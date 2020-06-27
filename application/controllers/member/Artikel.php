<?php
class Artikel extends CI_Controller
{
        function __construct()
        {
                parent::__construct();
                if ($this->session->userdata('masuk') != TRUE) {
                        $url = base_url('default_controller');
                        redirect($url);
                };
        }


        function index()
        {
                $this->load->view('member/templates/header');
                $this->load->view('member/pages/v_artikel');
                $this->load->view('member/templates/footer');
        }
}
