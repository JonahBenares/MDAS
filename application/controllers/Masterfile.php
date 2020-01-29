<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masterfile extends CI_Controller {

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

    /*public function index(){  
        $this->load->view('masterfile/login');
    }*/

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('masterfile/dashboard');
        $this->load->view('template/footer');
    } 


    public function login(){  
        $this->load->view('masterfile/login');
    }

    public function dashboard()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('masterfile/dashboard');
        $this->load->view('template/footer');
    }

    public function login_process(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $count=$this->super_model->login_user($username,$password);
        if($count>0){   
            $password1 =md5($this->input->post('password'));
            $fetch=$this->super_model->select_custom_where("users", "username = '$username' AND (password = '$password' OR password = '$password1')");
            foreach($fetch AS $d){
                $userid = $d->user_id;
                $username = $d->username;
                $fullname = $d->fullname;
            }
            $newdata = array(
               'user_id'=> $userid,
               'username'=> $username,
               'fullname'=> $fullname,
               'logged_in'=> TRUE
            );
            $this->session->set_userdata($newdata);
            redirect(base_url());
        }
        else{
            $this->session->set_flashdata('error_msg', 'Username and password do not exist! Please contact your administrator.');
            $this->load->view('masterfile/login');    
        }
    }

    public function user_logout(){
        $this->session->sess_destroy();
        //$this->load->view('masterfile/login');
        echo "<script>alert('You have successfully logged out.'); 
        window.location ='".base_url()."masterfile/login'; </script>";
    }

    public function change_password(){
        $data['company'] =  $this->super_model->select_all_order_by('company', 'company_name', 'ASC');
        $data['department'] =  $this->super_model->select_all_order_by('department', 'department_name', 'ASC');
        $userid = $this->session->userdata['user_id'];
       
        $data['userid'] = $this->session->userdata['user_id'];
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('masterfile/change_password',$data);
        $this->load->view('template/footer');
    }

    public function powerplant_list(){
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        foreach($this->super_model->select_custom_where("powerplants","status='Active' ORDER BY facility_name ASC") AS $po){
            $type = $this->super_model->select_column_where("pp_type","type_name","type_id",$po->type_id);
            $subtype = $this->super_model->select_column_where("pp_subtype","subtype_name","subtype_id",$po->subtype_id);
            $location = $this->super_model->select_column_where("location","location_name","location_code",$po->location_id);
            $resource_id = $this->super_model->select_column_where("pp_resources","resource_id","powerplant_id",$po->powerplant_id);
            $data['powerplant'][]=array(
                "powerplant_id"=>$po->powerplant_id,
                "resource_id"=>$resource_id,
                "facility_name"=>$po->facility_name,
                "short_name"=>$po->short_name,
                "type"=>$type,
                "subtype"=>$subtype,
                "operator"=>$po->operator,
                "participant_id"=>$po->participant_id,
                "region"=>$po->region,
                "municipality_city"=>$po->municipality_city,
                "no_of_units"=>$po->no_of_units,
            );
        }
        $this->load->view('masterfile/powerplant_list',$data);
        $this->load->view('template/footer');
    }

    public function view_powerplant(){
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $powerplant_id = $this->uri->segment(3);
        foreach($this->super_model->select_row_where("powerplants","powerplant_id",$powerplant_id) AS $po){
            $type = $this->super_model->select_column_where("pp_type","type_name","type_id",$po->type_id);
            $subtype = $this->super_model->select_column_where("pp_subtype","subtype_name","subtype_id",$po->subtype_id);
            $location = $this->super_model->select_column_where("location","location_name","location_code",$po->location_id);
            $data['powerplant'][]=array(
                "powerplant_id"=>$po->powerplant_id,
                "facility_name"=>$po->facility_name,
                "short_name"=>$po->short_name,
                "type"=>$type,
                "subtype"=>$subtype,
                "operator"=>$po->operator,
                "participant_id"=>$po->participant_id,
                "region"=>$po->region,
                "region_id"=>$po->region_id,
                "location"=>$location,
                "municipality_city"=>$po->municipality_city,
                "no_of_units"=>$po->no_of_units,
                "capacity_installed"=>$po->capacity_installed,
                "capacity_dependable"=>$po->capacity_dependable,
                "ippa"=>$po->ippa,
                "fit_approved"=>$po->fit_approved,
                "owner_type"=>$po->owner_type,
                "type_of_contract"=>$po->type_of_contract,
                "status"=>$po->status,
            );
        }

        $row = $this->super_model->count_rows_where("pp_resources","powerplant_id",$powerplant_id);
        if($row!=0){
            foreach($this->super_model->select_row_where("pp_resources","powerplant_id",$powerplant_id) AS $rp){
                $data['resource'][]=array(
                    "resource_id"=>$rp->resource_id,
                    "date_commissioned"=>$rp->date_commissioned,
                );
            }
        }else {
            $data['resource']=array();
        }
        $this->load->view('masterfile/view_powerplant',$data);
        $this->load->view('template/footer');
    }

    public function plant_type_list(){
        $data['type_id'] = $this->uri->segment(3);
        $type_id = $this->uri->segment(3);
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $data['type']=$this->super_model->select_all_order_by("pp_type","type_name","ASC");
        $data['subtype']=$this->super_model->select_row_where("pp_subtype","type_id",$type_id);
        $this->load->view('masterfile/plant_type_list',$data);
        $this->load->view('template/footer');
    }

    public function insert_type(){
        $type = trim($this->input->post('type')," ");
        $color = trim($this->input->post('color')," ");
        $data = array(
            'type_name'=>$type,
            'legend_color'=>$color
        );
        if($this->super_model->insert_into("pp_type", $data)){
             $this->session->set_flashdata('msg', 'Type Successfully Added!');
             redirect(base_url().'masterfile/plant_type_list');
        }
    }

    public function update_type(){
        $type_id = $this->input->post('type_id');
        $type = $this->input->post('type');
        $color = $this->input->post('color');

        $data=array(
            'type_name'=>$type,
            'legend_color'=>$color,
        );
        if($this->super_model->update_where("pp_type", $data, "type_id", $type_id)){
            $this->session->set_flashdata('msg', 'Type Successfully Updated!');
            redirect(base_url().'masterfile/plant_type_list/');
        }
    }

    public function delete_type(){
        $type_id=$this->uri->segment(3);
        if($this->super_model->delete_where('pp_type', 'type_id', $type_id)){
             $this->session->set_flashdata('msg', 'Type Successfully Deleted!');
             redirect(base_url().'masterfile/plant_type_list');
        }
    }


    public function insert_subtype(){
        $subtype = trim($this->input->post('subtype')," ");
        $type_id = trim($this->input->post('type_id')," ");
        $data = array(
            'subtype_name'=>$subtype,
            'type_id'=>$type_id,
        );
        if($this->super_model->insert_into("pp_subtype", $data)){
             $this->session->set_flashdata('msgsub', 'Subtype Successfully Added!');
             redirect(base_url().'masterfile/plant_type_list/'.$type_id);
        }
    }

    public function update_subtype(){
        $subtype_id = $this->input->post('subtype_id');
        $subtype = $this->input->post('subtype');
        $type_id = $this->input->post('type_id');

        $data=array(
            'subtype_name'=>$subtype,
        );
        if($this->super_model->update_where("pp_subtype", $data, "subtype_id", $subtype_id)){
            $this->session->set_flashdata('msgsub', 'Subtype Successfully Updated!');
            redirect(base_url().'masterfile/plant_type_list/'.$type_id);
        }
    }

    public function delete_subtype(){
        $subtype_id=$this->uri->segment(3);
        $type_id=$this->uri->segment(4);
        if($this->super_model->delete_where('pp_subtype', 'subtype_id', $subtype_id)){
             $this->session->set_flashdata('msgsub', 'Subtype Successfully Deleted!');
             redirect(base_url().'masterfile/plant_type_list/'.$type_id);
        }
    }

    public function add_powerplant(){
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $data['powerplant_id'] = $this->uri->segment(3);
        $powerplant_id= $this->uri->segment(3);
        foreach($this->super_model->select_row_where("powerplants", "powerplant_id", $powerplant_id) AS $p){
            $data['facility_name']=$p->facility_name;
            $data['short_name']=$p->short_name;
            $data['type_id']=$p->type_id;
            $data['subtype_id']=$p->subtype_id;
            $data['operator']=$p->operator;
            $data['participant_id']=$p->participant_id;
            $data['region']=$p->region;
            $data['region_id']=$p->region_id;
            $data['municipality_city']=$p->municipality_city;
            $data['location_id']=$p->location_id;
            $data['capacity_installed']=$p->capacity_installed;
            $data['capacity_dependable']=$p->capacity_dependable;
            $data['no_of_units']=$p->no_of_units;
            $data['ippa']=$p->ippa;
            $data['fit_approved']=$p->fit_approved;
            $data['owner_type']=$p->owner_type;
            $data['type_of_contract']=$p->type_of_contract;
            $data['status']=$p->status;
        }
        $data['type']=$this->super_model->select_all_order_by("pp_type","type_name","ASC");
        $data['subtype']=$this->super_model->select_all_order_by("pp_subtype","subtype_name","ASC");
        $data['location']=$this->super_model->select_all_order_by("location","location_name","ASC");
        $this->load->view('masterfile/add_powerplant',$data);
        $this->load->view('template/footer');
    }

    public function getType(){
        $type = $this->input->post('type');
        echo '<option value="">-Select SubType-</option>';
        foreach($this->super_model->select_row_where('pp_subtype', 'type_id', $type) AS $row){
            echo '<option value="'. $row->subtype_id .'">'. $row->subtype_name .'</option>';
        }
    }

    public function insert_powerplant(){
        $facility = trim($this->input->post('facility')," ");
        $shortname = trim($this->input->post('shortname')," ");
        $type = trim($this->input->post('type')," ");
        $subtype = trim($this->input->post('subtype')," ");
        $operator = trim($this->input->post('operator')," ");
        $participant = trim($this->input->post('participant')," ");
        $region = trim($this->input->post('region')," ");
        $region_id = trim($this->input->post('region_id')," ");
        $municipality_city = trim($this->input->post('mprovince')," ");
        $location = trim($this->input->post('location')," ");
        $cap_installed = trim($this->input->post('cap_installed')," ");
        $cap_dependable = trim($this->input->post('cap_dependable')," ");
        $num_units = trim($this->input->post('num_units')," ");
        $ippa = trim($this->input->post('ippa')," ");
        $fit_approved = trim($this->input->post('fit_approved')," ");
        $owner_type = trim($this->input->post('owner_type')," ");
        $toc = trim($this->input->post('toc')," ");
        $status = trim($this->input->post('status')," ");

        $rows_head = $this->super_model->count_rows("powerplants");
        if($rows_head==0){
            $powerplant_id=1;
        } else {
            $max = $this->super_model->get_max("powerplants", "powerplant_id");
            $powerplant_id = $max+1;
        }

        $data = array(
            'powerplant_id'=>$powerplant_id,
            'facility_name'=>$facility,
            'short_name'=>$shortname,
            'type_id'=>$type,
            'subtype_id'=>$subtype,
            'operator'=>$operator,
            'participant_id'=>$participant,
            'region'=>$region,
            'region_id'=>$region_id,
            'municipality_city'=>$municipality_city,
            'location_id'=>$location,
            'capacity_installed'=>$cap_installed,
            'capacity_dependable'=>$cap_dependable,
            'no_of_units'=>$num_units,
            'ippa'=>$ippa,
            'fit_approved'=>$fit_approved,
            'owner_type'=>$owner_type,
            'type_of_contract'=>$toc,
            'status'=>$status,
        );
        if($this->super_model->insert_into("powerplants", $data)){
            redirect(base_url().'masterfile/add_powerplant_second/'.$powerplant_id);
        }
    }

    public function update_powerplant(){
        $powerplant_id = trim($this->input->post('powerplant_id')," ");
        $facility = trim($this->input->post('facility')," ");
        $shortname = trim($this->input->post('shortname')," ");
        $type = trim($this->input->post('type')," ");
        $subtype = trim($this->input->post('subtype')," ");
        $operator = trim($this->input->post('operator')," ");
        $participant = trim($this->input->post('participant')," ");
        $region = trim($this->input->post('region')," ");
        $region_id = trim($this->input->post('region_id')," ");
        $municipality_city = trim($this->input->post('mprovince')," ");
        $location = trim($this->input->post('location')," ");
        $cap_installed = trim($this->input->post('cap_installed')," ");
        $cap_dependable = trim($this->input->post('cap_dependable')," ");
        $num_units = trim($this->input->post('num_units')," ");
        $ippa = trim($this->input->post('ippa')," ");
        $fit_approved = trim($this->input->post('fit_approved')," ");
        $owner_type = trim($this->input->post('owner_type')," ");
        $toc = trim($this->input->post('toc')," ");
        $status = trim($this->input->post('status')," ");
        $data = array(
            'facility_name'=>$facility,
            'short_name'=>$shortname,
            'type_id'=>$type,
            'subtype_id'=>$subtype,
            'operator'=>$operator,
            'participant_id'=>$participant,
            'region'=>$region,
            'region_id'=>$region_id,
            'municipality_city'=>$municipality_city,
            'location_id'=>$location,
            'capacity_installed'=>$cap_installed,
            'capacity_dependable'=>$cap_dependable,
            'no_of_units'=>$num_units,
            'ippa'=>$ippa,
            'fit_approved'=>$fit_approved,
            'owner_type'=>$owner_type,
            'type_of_contract'=>$toc,
            'status'=>$status,
        );
        if($this->super_model->update_where("powerplants", $data, "powerplant_id", $powerplant_id)){
            redirect(base_url().'masterfile/add_powerplant_second/'.$powerplant_id.'/update');
        }
    }

    public function delete_powerplant(){
        $powerplant_id=$this->uri->segment(3);
        if($this->super_model->delete_where('powerplants', 'powerplant_id', $powerplant_id)){
            $this->super_model->delete_where('pp_resources', 'powerplant_id', $powerplant_id);
            $this->session->set_flashdata('msg', 'Powerplant Successfully Deleted!');
            redirect(base_url().'masterfile/powerplant_list');
        }
    }

    public function add_powerplant_second(){
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $powerplant_id = $this->uri->segment(3);
        $data['powerplant_id']=$powerplant_id;
        $data['update']=$this->uri->segment(4);
        $data['unit_number'] = $this->super_model->select_column_where("powerplants","no_of_units","powerplant_id",$powerplant_id);
        foreach($this->super_model->select_row_where("pp_resources", "powerplant_id", $powerplant_id) AS $p){
            $data['resource'][] = array(
                'ppr_id'=>$p->ppr_id,
                'resource_id'=>$p->resource_id,
                'date_commissioned'=>$p->date_commissioned,
            );
        }
        $this->load->view('masterfile/add_powerplant_second',$data);
        $this->load->view('template/footer');
    }

    public function insert_powersec(){
        $count = $this->input->post('count');
        $powerplant_id = trim($this->input->post('powerplant_id')," ");
        for($x=0;$x<$count;$x++){
            $resource_id = trim($this->input->post('resource_id'.$x)," ");
            $com_date = trim($this->input->post('com_date'.$x)," ");
            $data = array(
                'resource_id'=>$resource_id,
                'powerplant_id'=>$powerplant_id,
                'date_commissioned'=>$com_date,
            );
            $this->super_model->insert_into("pp_resources", $data);
        }
        $this->session->set_flashdata('msg', 'Powerplant Successfully Added!');
        redirect(base_url().'masterfile/powerplant_list');
    }

    public function update_powersec(){
        $count = $this->input->post('count');
        $powerplant_id = trim($this->input->post('powerplant_id')," ");
        for($x=0;$x<$count;$x++){
            $resource_id = trim($this->input->post('resource_id'.$x)," ");
            $com_date = trim($this->input->post('com_date'.$x)," ");
            $ppr_id = trim($this->input->post('ppr_id'.$x)," ");
            $data = array(
                'resource_id'=>$resource_id,
                'powerplant_id'=>$powerplant_id,
                'date_commissioned'=>$com_date,
            );

            if(!empty($ppr_id)){
                $this->super_model->update_where("pp_resources", $data, "ppr_id", $ppr_id);
            }else if($ppr_id=='') {
                $this->super_model->insert_into("pp_resources", $data);
            }
        }
        $this->session->set_flashdata('msg', 'Powerplant Successfully Updated!');
        redirect(base_url().'masterfile/powerplant_list');
    }

    public function location_list(){
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $data['location']=$this->super_model->select_all_order_by("location","location_name","ASC");
        $this->load->view('masterfile/location_list',$data);
        $this->load->view('template/footer');
    }

    public function insert_location(){
        $lvm = trim($this->input->post('lvm')," ");
        $location_code = trim($this->input->post('location_code')," ");
        $location_name = trim($this->input->post('location_name')," ");
        $data = array(
            'lvm'=>$lvm,
            'location_code'=>$location_code,
            'location_name'=>$location_name,
        );
        if($this->super_model->insert_into("location", $data)){
             $this->session->set_flashdata('msg', 'Location Successfully Added!');
             redirect(base_url().'masterfile/location_list');
        }
    }

    public function update_location(){
        $location_id = $this->input->post('location_id');
        $lvm = $this->input->post('lvm');
        $location_code = $this->input->post('location_code');
        $location_name = $this->input->post('location_name');

        $data=array(
            'lvm'=>$lvm,
            'location_code'=>$location_code,
            'location_name'=>$location_name,
        );
        if($this->super_model->update_where("location", $data, "location_id", $location_id)){
            $this->session->set_flashdata('msg', 'Location Successfully Updated!');
            redirect(base_url().'masterfile/location_list/');
        }
    }

    public function delete_location(){
        $location_id=$this->uri->segment(3);
        if($this->super_model->delete_where('location', 'location_id', $location_id)){
             $this->session->set_flashdata('msg', 'Location Successfully Deleted!');
             redirect(base_url().'masterfile/location_list');
        }
    }
    
}
