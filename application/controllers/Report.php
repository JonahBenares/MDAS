<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Hong_Kong");
class Report extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
        $this->load->model('super_model');
       
     
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

      function arrayToObject($array){
            if(!is_array($array)) { return $array; }
            $object = new stdClass();
            if (is_array($array) && count($array) > 0) {
                foreach ($array as $name=>$value) {
                    $name = strtolower(trim($name));
                    if (!empty($name)) { $object->$name = arrayToObject($value); }
                }
                return $object;
            } 
            else {
                return false;
            }
        }


    }

    public function rtd_report()
    {
        $region = $this->uri->segment(3);
        $from = $this->uri->segment(4);
        $to = $this->uri->segment(5);

        if(empty($region) && empty($from) && empty($to)){
            $data['region'] =  "VISAYAS";
            $region="VISAYAS";
            $month = date('m');
            $year = date('Y');
            $days=cal_days_in_month(CAL_GREGORIAN,$month,$year);
            $data['year']= $year;
            $data['month']=$month;
            $data['days']=$days;

            $fromdate = $year."-".$month."-01";
            $todate = $year."-".$month."-".$days;
        }
       
        $data['types'] = $this->super_model->select_all('pp_type');
        

        $data['rtd'] = $this->super_model->custom_query("SELECT delivery_date,delivery_hour, region_id, type, participant_id,resource_id FROM rtd WHERE region_id = '$region' AND delivery_date BETWEEN '$fromdate' AND '$todate' GROUP BY delivery_hour,resource_id ORDER BY resource_id,delivery_hour ASC");
        //$data['rtd_all'] = $this->super_model->custom_query("SELECT * FROM rtd WHERE region_id = '$region' AND delivery_date BETWEEN '$fromdate' AND '$todate'");
        //$this->load->view('template/header');
        //$this->load->view('template/navbar');
        $this->load->view('report/rtd_report',$data);
        //$this->load->view('template/footer');    
    }

    public function upload_rtd()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('report/upload_rtd');
        $this->load->view('template/footer');    
    }

    public function comparison_out()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('report/comparison_out');
        $this->load->view('template/footer');    
    }

    public function get_type($resource_id){
        $powerplant_id = $this->super_model->select_column_where("pp_resources", "powerplant_id", "resource_id", $resource_id);
        $type_id = $this->super_model->select_column_where("powerplants", "type_id", "powerplant_id", $powerplant_id);
        return $type_id;
    }

    public function get_rtd_value($column, $date, $resource_id, $delivery_hour, $region_id){
        //echo "delivery_date = '$date' AND resource_id = '$resource_id'";
       $value = $this->super_model->select_column_custom_where("rtd", $column, "delivery_date = '$date' AND resource_id = '$resource_id' AND delivery_hour = '$delivery_hour' AND region_id = '$region_id'");
        return $value;
    }

   public function import_rtd(){
         $dest= realpath(APPPATH . '../uploads/');
         $error_ext=0;
        if(!empty($_FILES['rtd']['name'])){
          
            $path_parts = pathinfo($_FILES["rtd"]["name"]);
            $ext1 = $path_parts['extension'];
           
            if($ext1=='php' || $ext1!='csv'){
                $error_ext++;
            } 
            else {
                 $filename1='rtd.'.$ext1;
                if(move_uploaded_file($_FILES["rtd"]['tmp_name'], $dest.'/'.$filename1)){
                    $this->readExcel_pr();
                }   
            }
        }
    }

    public function readExcel_pr(){
        require_once(APPPATH.'../assets/js/phpexcel/Classes/PHPExcel/IOFactory.php');
        $objPHPExcel = new PHPExcel();
        $inputFileName =realpath(APPPATH.'../uploads/rtd.csv');
        try {
            $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
            $objReader = PHPExcel_IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch(Exception $e) {
            die('Error loading file"'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }

        $sheet = $objPHPExcel->getActiveSheet();
        $highestRow = $sheet->getHighestRow();
        $error=0;
        $duplicates=0;
        $timestamp = date('Y-m-d H:i:s');
         $userid = $this->session->userdata['user_id'];
        $userfullname = $this->session->userdata['fullname'];

        for($x=6; $x<$highestRow; $x++){
            //$delivery_date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($objPHPExcel->getActiveSheet()->getCell('A'.$x)->getValue()));
            $del_date = trim($objPHPExcel->getActiveSheet()->getCell('A'.$x)->getValue());
            $delivery_date = date('Y-m-d', strtotime($del_date));
            $delivery_hour = trim($objPHPExcel->getActiveSheet()->getCell('B'.$x)->getValue());
            $region_id = trim($objPHPExcel->getActiveSheet()->getCell('C'.$x)->getValue());
            $type = trim($objPHPExcel->getActiveSheet()->getCell('D'.$x)->getValue());
            $participant_id = trim($objPHPExcel->getActiveSheet()->getCell('E'.$x)->getValue());
            $resource_id = trim($objPHPExcel->getActiveSheet()->getCell('F'.$x)->getValue());
            $mw = trim($objPHPExcel->getActiveSheet()->getCell('G'.$x)->getValue());
            $price = trim($objPHPExcel->getActiveSheet()->getCell('H'.$x)->getValue());
            $initial = trim($objPHPExcel->getActiveSheet()->getCell('I'.$x)->getValue());

                if($region_id == 'VISAYAS'){

                    $count = $this->super_model->count_custom_where("mps_visayas","delivery_date='$delivery_date' AND resource_id ='$resource_id' AND delivery_hour = '$delivery_hour'");

                    $type_id = $this->get_type($resource_id);
                  
                        $data = array(
                            'delivery_date'=>$delivery_date,
                            'delivery_hour'=>$delivery_hour,
                            'type'=>$type,
                            'type_id'=>$type_id,
                            'participant_id'=>$participant_id,
                            'resource_id'=>$resource_id,
                            'mw'=>$mw,
                            'price'=>$price,
                            'initial'=>$initial,
                            'upload_timestamp'=>$timestamp,
                            'upload_by'=>$userid
                        );
                        if($count==0) {
                             if($this->super_model->insert_into("mps_visayas", $data)){
                                $error=0;
                             } else {
                                $error++;
                             }
                        } else {
                            $duplicates++;
                        }

                } else if($region_id == 'LUZON'){

                    $count = $this->super_model->count_custom_where("mps_luzon","delivery_date='$delivery_date' AND resource_id ='$resource_id' AND delivery_hour = '$delivery_hour'");

                    $type_id = $this->get_type($resource_id);
                  
                        $data = array(
                            'delivery_date'=>$delivery_date,
                            'delivery_hour'=>$delivery_hour,
                            'type'=>$type,
                            'type_id'=>$type_id,
                            'participant_id'=>$participant_id,
                            'resource_id'=>$resource_id,
                            'mw'=>$mw,
                            'price'=>$price,
                            'initial'=>$initial,
                            'upload_timestamp'=>$timestamp,
                            'upload_by'=>$userid
                        );
                        if($count==0) {
                             if($this->super_model->insert_into("mps_luzon", $data)){
                                $error=0;
                             } else {
                                $error++;
                             }
                        } else {
                            $duplicates++;
                        }
                }
            }
             if($duplicates>0){
                $this->session->set_flashdata('msg_error', 'There were '.$duplicates.' duplicates found. The system prevented upload of duplicate data.');
                redirect(base_url().'report/upload_rtd/');
             } else {
                
                if($error==0){
                         $this->session->set_flashdata('msg_updates', 'MPS successfully uploaded!');
                         redirect(base_url().'report/upload_rtd/');
                 } else {
                        $this->session->set_flashdata('msg_error', 'There was an error uploading the MPS.');
                         redirect(base_url().'report/upload_rtd/');
                }
            }


      
    }

    
}
