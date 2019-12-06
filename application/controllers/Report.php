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
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('report/rtd_report');
        $this->load->view('template/footer');    
    }

    public function upload_rtd()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('report/upload_rtd');
        $this->load->view('template/footer');    
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

            $data = array(
                'delivery_date'=>$delivery_date,
                'delivery_hour'=>$delivery_hour,
                'region_id'=>$region_id,
                'type'=>$type,
                'participant_id'=>$participant_id,
                'resource_id'=>$resource_id,
                'mw'=>$mw,
                'price'=>$price,
                'initial'=>$initial,
                'upload_timestamp'=>$timestamp,
                'upload_by'=>$userid
            );

             if($this->super_model->insert_into("rtd", $data)){
                $error=0;
             } else {
                $error++;
             }
       
        }
        if($error==0){
             $this->session->set_flashdata('msg_updates', 'RTD successfully uploaded!');
             redirect(base_url().'report/upload_rtd/');
        } else {
            $this->session->set_flashdata('msg_error', 'There was an error uploading the RTD.');
             redirect(base_url().'report/upload_rtd/');
        }
    }

    
}
