<?php
class Beranda extends CI_Controller
{
        function __construct()
        {
                parent::__construct();
                $this->load->model('m_artikel');
                $this->load->model('m_alternatif');
                $this->load->helper('text');
                $this->load->helper('date');
        }


        function index()
        {
                $x['data'] = $this->m_alternatif->get_alternatif_page();
                $x['query'] = $this->m_artikel->get_artikel_page();
                $this->load->view('member/templates/header');
                $this->load->view('member/pages/v_beranda', $x);
                $this->load->view('member/templates/footer');
        }
        
     
}
