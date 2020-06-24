<?php
class Beranda extends CI_Controller
{
        function __construct()
        {
                parent::__construct();
        }


        function index()
        {
                $this->load->view('member/templates/header');
                $this->load->view('member/pages/v_beranda');
                $this->load->view('member/templates/footer');
        }
}
