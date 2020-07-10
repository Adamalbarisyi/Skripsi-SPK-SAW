<?php
class Produk extends CI_Controller
{
        function __construct()
        {
                parent::__construct();
                
                $this->load->model('m_alternatif');
                $this->load->helper('text');
                $this->load->helper('date');
                
        }


        function index()
        {
                $x['data'] = $this->m_alternatif->get_alternatif_active();
                $this->load->view('member/templates/header');
                $this->load->view('member/pages/v_produk',$x);
                $this->load->view('member/templates/footer');
        }
        
        function detail_produk($id)
        {
                $x['query'] = $this->m_alternatif-> get_alternatif_detail_active($id);
                $this->load->view('member/templates/header');
                $this->load->view('member/pages/v_detail-produk',$x);
                $this->load->view('member/templates/footer');
        }
}
