<?php
class Artikel extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('login');
            redirect($url);
        };
        $this->load->model('m_artikel');
        $this->load->library('upload');
        $this->load->library('typography');
    }
    function buat_artikel()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/v_buat-artikel');
        $this->load->view('admin/templates/footer');
    }

    function data_artikel()
    {
        $x['data'] = $this->m_artikel->get_artikel();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/v_data-artikel',$x);
        $this->load->view('admin/templates/footer');
    }

    function save()
    {
        $config['upload_path'] = './upload/artikel/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (!empty($_FILES['foto_artikel']['name'])) {
            if ($this->upload->do_upload('foto_artikel')) {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '60%';
                $config['width'] = 710;
                $config['height'] = 420;
                $config['new_image'] = './assets/images/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $foto_artikel = $gbr['file_name'];
                $judul_artikel = strip_tags($this->input->post('judul_artikel'));
                $isi_artikel = strip_tags($this->input->post('isi_artikel'));

                $data = array(
                    'judul_artikel'     => $judul_artikel,
                    'isi_artikel'     => $isi_artikel,
                    'foto_artikel'    => $foto_artikel
                );

                $this->m_artikel->input_data($data, 'artikel');
                echo " <script>
				alert('Data Artikel Berhasil ditambahkan');
				window.location='" . site_url('admin/artikel/data_artikel') . "';
			</script>";
            } else {
                echo " <script>
			alert('Error !!!!,Data Artikel Gagal ditambahkan');
			window.location='" . site_url('admin/buat_artikel') . "';
		</script>";
            }
        } else {
            redirect('admin/data_artikel');
        }
    }
}
