<?php
class Subkriteria extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('login');
            redirect($url);
        };
        $this->load->model('m_subkriteria');
        $this->load->model('m_kriteria');
    }
    function index()
    {
        $x['data'] = $this->m_subkriteria->get_subkriteria();
        $x['criteria'] = $this->m_kriteria->get_kriteria();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/v_subkriteria', $x);
        $this->load->view('admin/templates/footer');
    }
    
    function save()
    {
        $id_kriteria = strip_tags($this->input->post('id_kriteria'));
        $nama_subkriteria = strip_tags($this->input->post('nama_subkriteria'));
        $nilai_subkriteria = strip_tags($this->input->post('nilai_subkriteria'));
        $ket_subkriteria = strip_tags($this->input->post('ket_subkriteria'));

        $data = array(
            'id_kriteria'            => $id_kriteria,
            'nama_subkriteria'       => $nama_subkriteria,
            'nilai_subkriteria'      => $nilai_subkriteria,
            'ket_subkriteria'        => $ket_subkriteria
        );
        $this->m_subkriteria->input_data($data, 'subkriteria');
        redirect('admin/subkriteria');
    }
    
    function update($id_subkriteria)
    {
        $nama_subkriteria = strip_tags($this->input->post('nama_subkriteria'));
        $nilai_subkriteria = strip_tags($this->input->post('nilai_subkriteria'));
        $ket_subkriteria = strip_tags($this->input->post('ket_subkriteria'));

        $data = array(
            'nama_subkriteria'     => $nama_subkriteria,
            'nilai_subkriteria'     => $nilai_subkriteria,
            'ket_subkriteria'    => $ket_subkriteria
        );

        $where = array(
            'id_subkriteria' => $id_subkriteria
        );
        $this->m_subkriteria->update_data( $where,$data, 'subkriteria');
        redirect('admin/subkriteria');
    }
    
    function delete($id)  //delete kriteria
    {
        $where = array('id_subkriteria' => $id);
        $this->m_kriteria->delete_data($where, 'subkriteria');
        redirect('admin/subkriteria');
    }


}