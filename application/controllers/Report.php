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

    public  function get_column($column, $table, $where_col, $where_val){
        $col = $this->super_model->select_column_where($table, $column, $where_col,$where_val);
        
        return $col;
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

    public function get_interval($summary_id){
       
        $min_interval = $this->super_model->get_min_where("outage_profile_visayas", "outage_interval","summary_id = '$summary_id'");
        $max_interval = $this->super_model->get_max_where("outage_profile_visayas", "outage_interval","summary_id = '$summary_id'");
       

        if($min_interval == $max_interval){
            $interval = $max_interval;
        } else {
            $interval = $min_interval . " - " . $max_interval;
        }
        return $interval;
    }

    public function get_interval_luzon($summary_id){
       
        $min_interval = $this->super_model->get_min_where("outage_profile_luzon", "outage_interval","summary_id = '$summary_id'");
        $max_interval = $this->super_model->get_max_where("outage_profile_luzon", "outage_interval","summary_id = '$summary_id'");
       

        if($min_interval == $max_interval){
            $interval = $max_interval;
        } else {
            $interval = $min_interval . " - " . $max_interval;
        }
        return $interval;
    }

      public function actual_outage_visayas()
    {
         //$curr_month = date('Y-m');
        $curr_month = '2020-01';
        foreach($this->super_model->custom_query("SELECT * FROM outage_profile_visayas WHERE outage_date LIKE '$curr_month%' GROUP BY summary_id ORDER BY outage_date, summary_id ASC") AS $outage){
            $data['outage'][] = array(
                'outage_date'=>$outage->outage_date,
                'outage_interval'=>$outage->outage_interval,
                'summary_id'=>$outage->summary_id,
                'type_id'=>$outage->type_id,
                'participant_id'=>$outage->participant_id,
                'resource_id'=>$outage->resource_id,
                'capacity_dependable'=>$outage->capacity_dependable,

            );
        }
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('report/actual_outage_visayas',$data);
        $this->load->view('template/footer');    
    }

    public function get_total_perday($date, $location){
        if($location=='visayas'){
            $total=array();
            foreach($this->super_model->custom_query("SELECT DISTINCT resource_id, capacity_dependable FROM outage_profile_visayas WHERE outage_date = '$date' GROUP BY resource_id") AS $pro){
                $total[] = $pro->capacity_dependable;
            }
            $ttl = array_sum($total);
        }

        if($location=='luzon'){
            $total=array();
            foreach($this->super_model->custom_query("SELECT DISTINCT resource_id, capacity_dependable FROM outage_profile_luzon WHERE outage_date = '$date' GROUP BY resource_id") AS $p){
                $total[] = $p->capacity_dependable;
                
            }
            $ttl = array_sum($total);
        }

        return number_format($ttl);
    }


    public function export_actual_visayas(){
        require_once(APPPATH.'../assets/js/phpexcel/Classes/PHPExcel/IOFactory.php');
        $objPHPExcel = new PHPExcel();
        $exportfilename="actual_outages_visayas.xlsx";
        $month = date('Y-m');    
        $year=$this->uri->segment(3);
        $monthfilt=$this->uri->segment(4);

        if(!empty($year) && !empty($monthfilt)){
            $curr_month = $year."-".$monthfilt;
        }else {
            $curr_month = date('Y-m');
        }
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', "Actual Outages Visayas");
        foreach(range('B','H') as $columnID){
            $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
        }
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A2', "Date");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B2', "Interval");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C2', "Type");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D2', "Resource ID");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E2', "Capacity");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F2', "Outage Type");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G2', "Remarks");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H2', "Total Capacity on Outage");
        $num=3;
        $previousdate = '';
        foreach($this->super_model->custom_query("SELECT * FROM outage_profile_visayas WHERE outage_date LIKE '$curr_month%' GROUP BY summary_id ORDER BY outage_date, summary_id ASC") AS $out){
            $type = $this->super_model->select_column_where("pp_type", "type_name", "type_id", $out->type_id);
            $outage_type = $this->super_model->select_column_where("outage_summary_visayas", "outage_type", "summary_id", $out->summary_id);
            $remarks = $this->super_model->select_column_where("outage_summary_visayas", "remarks", "summary_id", $out->summary_id);
            if($previousdate !== '' && $previousdate !== $out->outage_date){
                $styleArray = array(
                    'borders' => array(
                        'top' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THICK,
                            'color' => array('rgb' => 'FF0000')
                        ),
                        'allborders' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THIN,
                        )
                    )
                );
                $objPHPExcel->getActiveSheet()->getStyle('A'.$num.":H".$num)->applyFromArray($styleArray);
            }else {
                $styleArray = array(
                    'borders' => array(
                        'allborders' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THIN,
                        )
                    )
                );
            }
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$num, (($month !== '' && $month !== $out->outage_date) ? date('F d', strtotime($out->outage_date)) : ''));
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$num, $this->get_interval($out->summary_id));
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$num, $type);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$num, $out->resource_id);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$num, $out->capacity_dependable);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$num, ($outage_type=='1') ? 'Planned' : 'Unplanned');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$num, $remarks);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.$num, ($previousdate !== $out->outage_date) ? $this->get_total_perday($out->outage_date, 'visayas') : '');
            $objPHPExcel->getActiveSheet()->getStyle('A'.$num.":H".$num)->applyFromArray($styleArray);
            $objPHPExcel->getActiveSheet()->getStyle('H'.$num)->getFont()->setBold(true);
            $objPHPExcel->getActiveSheet()->getStyle('A'.$num.":B".$num)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $objPHPExcel->getActiveSheet()->getStyle('E'.$num.":F".$num)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $objPHPExcel->getActiveSheet()->getStyle('H'.$num)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $objPHPExcel->getActiveSheet()->getStyle('E'.$num)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
            $month = $out->outage_date;
            $previousdate = $out->outage_date;
            $num++;
        }
        $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true)->setName('Arial Black')->setSize(12);
        $objPHPExcel->getActiveSheet()->getStyle('A2:H2')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('A2:H2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('A2:H2')->applyFromArray($styleArray);
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        if (file_exists($exportfilename))
        unlink($exportfilename);
        $objWriter->save($exportfilename);
        unset($objPHPExcel);
        unset($objWriter);   
        ob_end_clean();
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="actual_outages_visayas.xlsx"');
        readfile($exportfilename);
    }

    public function export_actual_luzon(){
        require_once(APPPATH.'../assets/js/phpexcel/Classes/PHPExcel/IOFactory.php');
        $objPHPExcel = new PHPExcel();
        $exportfilename="actual_outages_luzon.xlsx";
        $month = date('Y-m');    
        $year=$this->uri->segment(3);
        $monthfilt=$this->uri->segment(4);

        if(!empty($year) && !empty($monthfilt)){
            $curr_month = $year."-".$monthfilt;
        }else {
            $curr_month = date('Y-m');
        }
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', "Actual Outages Luzon");
        foreach(range('B','H') as $columnID){
            $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
        }
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A2', "Date");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B2', "Interval");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C2', "Type");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D2', "Resource ID");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E2', "Capacity");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F2', "Outage Type");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G2', "Remarks");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H2', "Total Capacity on Outage");
        $num=3;
        $previousdate = '';
        foreach($this->super_model->custom_query("SELECT * FROM outage_profile_luzon WHERE outage_date LIKE '$curr_month%' GROUP BY summary_id ORDER BY outage_date, summary_id ASC") AS $out){
            $type = $this->super_model->select_column_where("pp_type", "type_name", "type_id", $out->type_id);
            $outage_type = $this->super_model->select_column_where("outage_summary_luzon", "outage_type", "summary_id", $out->summary_id);
            $remarks = $this->super_model->select_column_where("outage_summary_luzon", "remarks", "summary_id", $out->summary_id);
            if($previousdate !== '' && $previousdate !== $out->outage_date){
                $styleArray = array(
                    'borders' => array(
                        'top' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THICK,
                            'color' => array('rgb' => 'FF0000')
                        ),
                        'allborders' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THIN,
                        )
                    )
                );
                $objPHPExcel->getActiveSheet()->getStyle('A'.$num.":H".$num)->applyFromArray($styleArray);
            }else {
                $styleArray = array(
                    'borders' => array(
                        'allborders' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THIN,
                        )
                    )
                );
            }
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$num, (($month !== '' && $month !== $out->outage_date) ? date('F d', strtotime($out->outage_date)) : ''));
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$num, $this->get_interval_luzon($out->summary_id));
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$num, $type);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$num, $out->resource_id);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$num, $out->capacity_dependable);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$num, ($outage_type=='1') ? 'Planned' : 'Unplanned');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$num, $remarks);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.$num, ($previousdate !== $out->outage_date) ? $this->get_total_perday($out->outage_date, 'luzon') : '');
            $objPHPExcel->getActiveSheet()->getStyle('A'.$num.":H".$num)->applyFromArray($styleArray);
            $objPHPExcel->getActiveSheet()->getStyle('H'.$num)->getFont()->setBold(true);
            $objPHPExcel->getActiveSheet()->getStyle('A'.$num.":B".$num)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $objPHPExcel->getActiveSheet()->getStyle('E'.$num.":F".$num)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $objPHPExcel->getActiveSheet()->getStyle('H'.$num)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $objPHPExcel->getActiveSheet()->getStyle('E'.$num)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
            $month = $out->outage_date;
            $previousdate = $out->outage_date;
            $num++;
        }
        $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true)->setName('Arial Black')->setSize(12);
        $objPHPExcel->getActiveSheet()->getStyle('A2:H2')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('A2:H2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('A2:H2')->applyFromArray($styleArray);
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        if (file_exists($exportfilename))
        unlink($exportfilename);
        $objWriter->save($exportfilename);
        unset($objPHPExcel);
        unset($objWriter);   
        ob_end_clean();
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="actual_outages_luzon.xlsx"');
        readfile($exportfilename);
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

    public function get_rtd_value_luzon($column, $date, $resource_id, $delivery_hour){
 
        $rtd_val = $this->super_model->custom_query("SELECT $column FROM mps_luzon WHERE delivery_date = '$date' AND resource_id = '$resource_id' AND delivery_hour = '$delivery_hour'");
     
      return $rtd_val;
    }

    /*public function export_mps(){
         require_once(APPPATH.'../assets/js/phpexcel/Classes/PHPExcel/IOFactory.php');
        $objPHPExcel = new PHPExcel();
        $exportfilename="MPS.xlsx";
        $phpColor = new PHPExcel_Style_Color();
        foreach(range('A','B') as $columnID){
            $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
        }
        foreach(range('C','J') as $columnID){
            $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
        }
        $month = date('m');
        $year = date('Y');
        $days=cal_days_in_month(CAL_GREGORIAN,$month,$year);
        $from =$year."-".$month."-01";
        $to = $year."-".$month."-".$days;
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', "MARKET PRICES AND SCHEDULE");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A2', "START DATE: 03-03-2020");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A3', "END DATE: 03-31-2020");
        $colorletter = 'C';
        $colornum = 1; 
        foreach($this->super_model->select_all("pp_type") AS $color){
            $legend = str_replace("#", '', $color->legend_color);
            $objPHPExcel->getActiveSheet()->getStyle($colorletter.$colornum)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB($legend);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue($colorletter.$colornum, $color->type_name);
            $colorletter++;
        }

        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A5', "Delivery Hour");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B5', "Region ID");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C5', "Type ID");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D5', "Participant ID");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E5', "Resource ID");
        $num1 = 6;
        $num2 = 6;
        $num3 = 6;
        $one=4;
        $two=5;
        $col='F';
        $col2='F';
        $col3='F';
        $styleArray = array(
            'borders' => array(
                'allborders' => array(
                  'style' => PHPExcel_Style_Border::BORDER_THIN
                )
            )
        );
        $inc_letter = 'AA';
        for($x=1;$x<=$days;$x++){
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue($col.$one, $x);
            $header = array(
                array(
                    'MW',
                    'Price',
                    'Initial',
                )
            );
            $objPHPExcel->getActiveSheet()->getStyle($col.$one)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $objPHPExcel->getActiveSheet()->getStyle('F'.$two.":CT".$two)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $objPHPExcel->getActiveSheet()->fromArray($header, null, $col2.$two);
            $inc_letter++;
            $col2++;
            $col2++;
            $objPHPExcel->getActiveSheet()->mergeCells($col.$one.':'.$col2.$one);
            $col++;
            $col++;
            $col++;
            $col2++;     
        }
        foreach($this->super_model->custom_query("SELECT delivery_date,delivery_hour, type, type_id, participant_id, resource_id, mw, price, initial FROM mps_luzon WHERE delivery_date BETWEEN '2020-03-06' AND '2020-03-10' GROUP BY delivery_hour,resource_id ORDER BY resource_id,delivery_hour ASC") AS $rtd_q){
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$num2, "$rtd_q->delivery_hour");
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$num2, "LUZON");
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$num2, "$rtd_q->type");
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$num2, "$rtd_q->participant_id");
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$num2, "$rtd_q->resource_id");
            for($y=1;$y<=$days;$y++){
                $date=$year."-".$month."-".str_pad($y, 2, "0", STR_PAD_LEFT);
                $mw = $this->get_rtd_value_luzon("mw", $date, $rtd_q->resource_id, $rtd_q->delivery_hour);
                $price = $this->get_rtd_value_luzon("price", $date, $rtd_q->resource_id, $rtd_q->delivery_hour);
                $initial = $this->get_rtd_value_luzon("initial", $date, $rtd_q->resource_id, $rtd_q->delivery_hour);
                $sheet = array(
                    array(
                        $mw,
                        $price,
                        $initial,
                    )
                );
            }
            $objPHPExcel->getActiveSheet()->fromArray($sheet, null, $col3.$num3);
            $col3++;
            $col3++;
            $num3++;
            $objPHPExcel->getActiveSheet()->getStyle('A'.$num1.":CT".$num1)->applyFromArray($styleArray);
            $objPHPExcel->getActiveSheet()->getStyle('A'.$num1.":C".$num1)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $num1++; 
            $num2++;
        }
        $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true)->setName('Arial')->setSize(13.5);
        $objPHPExcel->getActiveSheet()->getStyle('A5:CT5')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('A5:CT5')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('A2:A3')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('A4:CT4')->applyFromArray($styleArray);
        $objPHPExcel->getActiveSheet()->getStyle('A5:CT5')->applyFromArray($styleArray);
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        if (file_exists($exportfilename))
        unlink($exportfilename);
        $objWriter->save($exportfilename);
        unset($objPHPExcel);
        unset($objWriter);   
        ob_end_clean();
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="MPS.xlsx"');
        readfile($exportfilename);
    }*/

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
