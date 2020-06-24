<?php
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('default_controller');
            redirect($url);
        };
	}
	function index(){
		if($this->session->userdata('akses')=='2'){
            $this->load->view('pengelola/templates/header');
            $this->load->view('pengelola/pages/v_dashboard');
			$this->load->view('pengelola/templates/footer');
		}else{
			redirect('default_controller');
		}
	
	}
	
}