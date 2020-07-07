<?php
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('default_controller');
            redirect($url);
        };
		$this->load->model('m_alternatif');
	}
	function index(){
		if($this->session->userdata('akses')=='2'){
			$x['data'] = $this->m_alternatif->get_alternatif_verif();
            $this->load->view('pengelola/templates/header');
            $this->load->view('pengelola/pages/v_dashboard',$x);
			$this->load->view('pengelola/templates/footer');
		}else{
			redirect('default_controller');
		}
	
	}
	
}