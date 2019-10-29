<?php

class Main extends CI_Controller {

    public function __construct(){   
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->helper('string');
        $this->load->model('regist_model');
    }
        
    public function index(){		
        $this->load->view('common/header');
        $this->load->view('main/index');
        $this->load->view('common/footer');			
    }      
}