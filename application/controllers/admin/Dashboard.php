<?php
class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('login');
			redirect($url);
		};

		$this->load->model('m_alternatif');
	}
	function index()
	{
		if ($this->session->userdata('akses') == '1') {
			$x['data'] = $this->m_alternatif->get_alternatif_verif();
			$this->load->view('admin/templates/header');
			$this->load->view('admin/v_dashboard', $x);
			$this->load->view('admin/templates/footer');
		} else {
			redirect('login');
		}
	}


	function active($id_proyek)
	{
		$status_post = strip_tags($this->input->post('status_post'));

		$data = array(
			'status_post' => $status_post,
		);

		$where = array(
			'id_proyek' => $id_proyek
		);


		$this->m_alternatif->update_data_active($where, $data, 'alternatif_proyek');
		redirect('admin/dashboard');
	}


	function deactive()
	{
	}
}
