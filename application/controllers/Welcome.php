<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{  
            $data = array();
            $data['all_published_category']=$this->welcome_model->select_all_published_category();
            $data['maincontent'] = $this->load->view('pages/home_content','',true);
            $data['title'] = 'Home';
            $data['bnr_img'] = true;
            
            $this->load->view('master',$data);
	}
        
        public function portfollio(){
            $data = array();
            $data['maincontent'] = $this->load->view('pages/portfollio','',true);
            $data['title'] = 'Portfollio';
            $this->load->view('master',$data);
        }
}
