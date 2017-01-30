<?php

class Admin extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        $admin_id = $this->session->userdata('admin_id');
        
        if($admin_id != NULL){
            redirect('super_admin','refresh');
        }
        
    }
    
    
    public function index()
    {
        $this->load->view('admin/admin_login');
    }
    public function admin_login_check()
    {
        $email_address = $this->input->post('email_address',true);
        $admin_password = $this->input->post('admin_password',true);
        
        $this->load->model('admin_model');
        $result = $this->admin_model->check_admin_login_info($email_address,$admin_password);
        
        $sdata = array();
        
        if($result)
        {
            $sdata['name']=$result->admin_name;
            $sdata['admin_id']=$result->admin_id;
            $this->session->set_userdata($sdata);
            redirect('super_admin');
        }
        else
        {
            $sdata['exception']="Your User Email Or Password is Incorrect";
            $this->session->set_userdata($sdata);
            
            $exception = $this->session->userdata('exception');
           
            
            redirect('admin/index');
        }
        
        
    }
    
}