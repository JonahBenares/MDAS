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
                $empid = $d->employee_id;
                $username = $d->username;
                $fullname = $d->fullname;
                $department=$d->department_id;
                $company=$d->company_id;
                $location=$d->location_id;
                $usertype=$d->usertype;
            }
            $newdata = array(
               'user_id'=> $userid,
               'employee'=> $empid,
               'username'=> $username,
               'fullname'=> $fullname,
               'department'=> $department,
               'company'=> $company,
               'location'=>$location,
               'usertype'=> $usertype,
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

   

    public function add_user(){
        $pw=md5('12345');
        $data=array(
            'employee_id'=>$this->input->post('employee_name'),
            'username'=>$this->input->post('username'),
            'password'=>$pw,
            'company_id'=>$this->input->post('company'),
            'department_id'=>$this->input->post('department'),
            'location_id'=>$this->input->post('location'),
            'status'=>$this->input->post('status'),
            'usertype'=>$this->input->post('usertype'),
        );
        if($this->super_model->insert_into("users", $data)){
             redirect(base_url().'masterfile/user_list');
        }

    }

    public function update_user(){
        $id = $this->input->post('user_id');
        $location=$this->input->post('location');
        $usertype=$this->input->post('usertype');
        if($usertype==2){
            if(empty($location)){
                $data=array(
                    'company_id'=>$this->input->post('company'),
                    'department_id'=>$this->input->post('department'),
                    'status'=>$this->input->post('status'),
                    'usertype'=>$this->input->post('usertype'),
                );
            } else {
                $data=array(
                    'company_id'=>$this->input->post('company'),
                    'department_id'=>$this->input->post('department'),
                    'status'=>$this->input->post('status'),
                    'usertype'=>$this->input->post('usertype'),
                    'location_id'=>$location,
                );
            }
        } else {
             $data=array(
                    'company_id'=>$this->input->post('company'),
                    'department_id'=>$this->input->post('department'),
                    'status'=>$this->input->post('status'),
                    'usertype'=>$this->input->post('usertype'),
                    'location_id'=>0
                );
        }
        if($this->super_model->update_where("users", $data, "user_id", $id)){
             redirect(base_url().'masterfile/user_list');
        }

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

    public function update_password(){
        $oldpw = md5($this->input->post('old_password'));
        $newpw = $this->input->post('new_password');
        $userid = $this->input->post('user_id');
        $old = $this->super_model->select_column_where("users","password","user_id",$userid);
        //$opw = md5($old);
        if($old!=$oldpw){
            echo "error";
        }else {
            $hashed = md5($newpw);
            $data=array(
                'password'=>$hashed
            );
            if($this->super_model->update_where("users", $data, "user_id", $userid)){
                echo "ok";
            }
        }
    }

    
}
