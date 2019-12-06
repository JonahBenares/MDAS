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

    public function index(){  
        $this->load->view('masterfile/login');
    }

    public function login(){
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
            redirect(base_url().'masterfile/dashboard/');
        }
        else{
            $this->session->set_flashdata('error_msg', 'Username and password do not exist! Please contact your administrator.');
            $this->load->view('masterfile/login');    
        }
    }

    public function user_logout(){
        $this->session->sess_destroy();
        $this->load->view('masterfile/login');
        echo "<script>alert('You have successfully logged out.'); 
        window.location ='".base_url()."masterfile/index'; </script>";
    }

   
    public function dashboard()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('masterfile/dashboard');
        $this->load->view('template/footer');
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

    public function powerplant_list()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('masterfile/powerplant_list');
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

    public function add_powerplant()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('masterfile/add_powerplant');
        $this->load->view('template/footer');
    }
    public function add_powerplant_second()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('masterfile/add_powerplant_second');
        $this->load->view('template/footer');
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
