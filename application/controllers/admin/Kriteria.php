<?php
class Kriteria extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('login');
            redirect($url);
        };
        $this->load->model('m_kriteria');
    }
    function index()
    {
        $x['data'] = $this->m_kriteria->get_kriteria();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/v_kriteria', $x);
        $this->load->view('admin/templates/footer');
    }

    function save()
    {
        $nama_kriteria = strip_tags($this->input->post('nama_kriteria'));
        $tipe_kriteria = strip_tags($this->input->post('tipe_kriteria'));
        $bobot_kriteria = strip_tags($this->input->post('bobot_kriteria'));

        $data = array(
            'nama_kriteria'     => $nama_kriteria,
            'tipe_kriteria'     => $tipe_kriteria,
            'bobot_kriteria'    => $bobot_kriteria
        );
        $this->m_kriteria->input_data($data, 'kriteria');
        redirect('admin/kriteria');
    }

    function delete($id)  //delete kriteria
    {
        $where = array('id_kriteria' => $id);
        $this->m_kriteria->delete_data($where, 'kriteria');
        redirect('admin/kriteria');
    }


    function update($id_kriteria)
    {
        $nama_kriteria = strip_tags($this->input->post('nama_kriteria'));
        $tipe_kriteria = strip_tags($this->input->post('tipe_kriteria'));
        $bobot_kriteria = strip_tags($this->input->post('bobot_kriteria'));

        $data = array(
            'nama_kriteria'     => $nama_kriteria,
            'tipe_kriteria'     => $tipe_kriteria,
            'bobot_kriteria'    => $bobot_kriteria
        );

        $where = array(
            'id_kriteria' => $id_kriteria
        );
        $this->m_kriteria->update_data( $where,$data, 'kriteria');
        redirect('admin/kriteria');
    }
}
