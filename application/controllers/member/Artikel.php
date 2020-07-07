<?php
class Artikel extends CI_Controller
{
        function __construct()
        {
                parent::__construct();
               
        }


        function index()
        {
                $this->load->view('member/templates/header');
                $this->load->view('member/pages/v_detail-artikel');
                $this->load->view('member/templates/footer');
        }
        
        function detail_artikel()
        {
                $this->load->view('member/templates/header');
                $this->load->view('member/pages/v_detail-artikel');
                $this->load->view('member/templates/footer');
        }
}
