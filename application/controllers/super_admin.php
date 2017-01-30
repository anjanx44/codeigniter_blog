<?php

class Super_Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        $this->load->model('super_admin_model');
        $admin_id = $this->session->userdata('admin_id');

        if ($admin_id == NULL) {
            redirect('admin', 'refresh');
        }
    }

    public function index() {
        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/pages/dashboard', '', true);

        $this->load->view('admin/admin_master', $data);
    }

    public function add_category() {
        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/pages/add_category', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_category() {


        $data = array();

        $data['category_name'] = $this->input->post('category_name', true);
        $data['category_description'] = $this->input->post('category_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
//        $this->load->model('super_admin_model'); auto_load
        $this->super_admin_model->save_category_info($data);

        $sdata = array();
        $sdata['message'] = "Save Category Information Successfully!";
        $this->session->set_userdata($sdata);

        redirect('super_admin/add_category');
    }

    public function manage_category() {
        $data = array();
        $data['all_category'] = $this->super_admin_model->select_all_category();

        $data['admin_main_content'] = $this->load->view('admin/pages/manage_category', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function unpublished_category($category_id) {
        $this->super_admin_model->unpublished_category_by_id($category_id);
        
        redirect('super_admin/manage_category');
        
    }
    
    public function published_category($category_id) {
        $this->super_admin_model->published_category_by_id($category_id);
        
        redirect('super_admin/manage_category');
        
    }

    public function logout() {
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('admin_id');
        $sdata = array();
        $sdata['message'] = "You are Successfully Logout!";
        $this->session->set_userdata($sdata);
        redirect('admin');
    }

}
