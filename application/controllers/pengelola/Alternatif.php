<?php
class Alternatif extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('default_controller');
            redirect($url);
        };
        $this->load->model('m_alternatif');
        $this->load->library('upload');
    }
    function buat_alternatif()
    {
        $this->load->view('pengelola/templates/header');
        $this->load->view('pengelola/pages/v_buat_alternatif');
        $this->load->view('pengelola/templates/footer');
    }

    function data_alternatif()
    {
        $x['query'] = $this->m_alternatif->get_alternatif_deactive();
        $x['data'] = $this->m_alternatif->get_alternatif_active();
        $this->load->view('pengelola/templates/header');
        $this->load->view('pengelola/pages/v_data_alternatif',$x);
        $this->load->view('pengelola/templates/footer');
    }


    function simpan()
    {
        if ($this->input->post('submit') == true) {
            $config['upload_path'] = './uploads/produk/'; //path folder
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['encrypt_name'] = FALSE; //nama yang terupload nantinya
            $config['max_size']     = 3024; // 3MB



            $this->load->library('upload', $config);
            $result_array = array();
            for ($i = 1; $i <= 4; $i++) {
                $changeName = "Produk_" . date("Y_m_d_") . time() . "." . strtolower(pathinfo($_FILES['fotoproyek' . $i]['name'], PATHINFO_EXTENSION));
                $config['file_name'] = $changeName;
                if (!empty($_FILES['fotoproyek' . $i]['name'])) {
                    if (!$this->upload->do_upload('fotoproyek' . $i))
                        $this->upload->display_errors();
                    else
                        echo "Foto berhasil di upload";
                }
            }

            $judul_proyek = strip_tags($this->input->post('judul_proyek'));
            $deskripsi_proyek = strip_tags($this->input->post('deskripsi_proyek'));
            $sertifikat_proyek = strip_tags($this->input->post('sertifikat_proyek'));
            $provinsi_proyek = strip_tags($this->input->post('provinsi_proyek'));
            $kabupaten_proyek = strip_tags($this->input->post('kabupaten_proyek'));
            $luastanah_proyek = strip_tags($this->input->post('luastanah_proyek'));
            $harga_m_proyek = strip_tags($this->input->post('harga/m_proyek'));
            $lebar_depan_proyek = strip_tags($this->input->post('lebar_depan_proyek'));
            $harga_total_proyek = strip_tags($this->input->post('harga_total_proyek'));
            $jarak_proyek = strip_tags($this->input->post('jarak_proyek'));
            $fasilitas_proyek = strip_tags($this->input->post('fasilitas_proyek'));
            $nama_pengelola = strip_tags($this->input->post('nama_pengelola'));
            $nama_kantor = strip_tags($this->input->post('nama_kantor'));
            $nomor_hp = strip_tags($this->input->post('nomor_hp'));
            $result_array[0] = strip_tags($this->input->post('fotoproyek1'));
            $result_array[1] = strip_tags($this->input->post('fotoproyek2'));
            $result_array[2] = strip_tags($this->input->post('fotoproyek3'));
            $result_array[3] = strip_tags($this->input->post('fotoproyek4'));

            

            $data = array(
                'judul_proyek'     => $judul_proyek,
                'deskripsi_proyek'     => $deskripsi_proyek,
                'sertifikat_proyek'    => $sertifikat_proyek,
                'provinsi_proyek'     => $provinsi_proyek,
                'kabupaten_proyek'    => $kabupaten_proyek,
                'luastanah_proyek'     => $luastanah_proyek,
                'harga/m_proyek'    => $harga_m_proyek,
                'lebar_depan_proyek'     => $lebar_depan_proyek,
                'harga_total_proyek'    => $harga_total_proyek,
                'jarak_proyek'     => $jarak_proyek,
                'fasilitas_proyek'    => $fasilitas_proyek,
                'nama_pengelola'     => $nama_pengelola,
                'nama_kantor'    => $nama_kantor,
                'nomor_hp'     => $nomor_hp,
                'fotoproyek1' => $result_array[0]['file_name'],
                'fotoproyek2' => $result_array[1]['file_name'],
                'fotoproyek3' => $result_array[2]['file_name'],
                'fotoproyek4' => $result_array[3]['file_name'],
            );

            $this->m_alternatif->input_data($data, 'alternatif_proyek');
            echo " <script>
             alert('Data Alternatif Berhasil ditambahkan');
             window.location='" . site_url('pengelola/dashboard') . "';
         </script>";
        } else {
            echo " <script>
			alert('Error !!!! Data Alternatif Gagal ditambahkan');
			window.location='" . site_url('pengelola/alternatif/buat_alternatif') . "';
		</script>";
        }
        
        
        
        
    }

    function edit($id_proyek)
    {

        if ($this->input->post('submit') == true) {
            $this->load->library('upload');
            $dataInfo = array();
            // $files = $_FILES;
            // $cpt = count($_FILES['fotoproyek']['name']);
            
            $config['upload_path'] = './uploads/produk/'; //path folder
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['encrypt_name'] = FALSE; //nama yang terupload nantinya
            $config['max_size']     = 3024; // 3MB
            
            for ($i=1; $i<=5; $i++) { 
                $config["file_name"] = "Foto$i"."_".date("Y_m_d_").time().".".strtolower(pathinfo($_FILES["fotoproyek$i"]['name'], PATHINFO_EXTENSION));
                $this->upload->initialize($config);
                $this->upload->do_upload("fotoproyek$i");
                $fotoproyek[$i] = $this->upload->data()["file_name"];
            }
            
    
            $judul_proyek = strip_tags($this->input->post('judul_proyek'));
            $deskripsi_proyek = strip_tags($this->input->post('deskripsi_proyek'));
            $sertifikat_proyek = strip_tags($this->input->post('sertifikat_proyek'));
            $provinsi_proyek = strip_tags($this->input->post('provinsi_proyek'));
            $kabupaten_proyek = strip_tags($this->input->post('kabupaten_proyek'));
            $luastanah_proyek = strip_tags($this->input->post('luastanah_proyek'));
            $harga_m_proyek = strip_tags($this->input->post('harga/m_proyek'));
            $lebar_depan_proyek = strip_tags($this->input->post('lebar_depan_proyek'));
            $harga_total_proyek = strip_tags($this->input->post('harga_total_proyek'));
            $jarak_proyek = strip_tags($this->input->post('jarak_proyek'));
            $fasilitas_proyek = strip_tags($this->input->post('fasilitas_proyek'));
            $nama_pengelola = strip_tags($this->input->post('nama_pengelola'));
            $nama_kantor = strip_tags($this->input->post('nama_kantor'));
            $nomor_hp = strip_tags($this->input->post('nomor_hp'));

            $data = array(
                'judul_proyek'     => $judul_proyek,
                'deskripsi_proyek'     => $deskripsi_proyek,
                'sertifikat_proyek'    => $sertifikat_proyek,
                'provinsi_proyek'     => $provinsi_proyek,
                'kabupaten_proyek'    => $kabupaten_proyek,
                'luastanah_proyek'     => $luastanah_proyek,
                'harga/m_proyek'    => $harga_m_proyek,
                'lebar_depan_proyek'     => $lebar_depan_proyek,
                'harga_total_proyek'    => $harga_total_proyek,
                'jarak_proyek'     => $jarak_proyek,
                'fasilitas_proyek'    => $fasilitas_proyek,
                'nama_pengelola'     => $nama_pengelola,
                'nama_kantor'    => $nama_kantor,
                'nomor_hp'     => $nomor_hp,
                'fotoproyek1' => $fotoproyek[1],
                'fotoproyek2' => $fotoproyek[2],
                'fotoproyek3' => $fotoproyek[3],
                'fotoproyek4' => $fotoproyek[4],
                'fotoproyek5' => $fotoproyek[5],
            );
            
            $where = array(
                'id_proyek' => $id_proyek
            );
            
            if ($this->m_alternatif->update_data($where,$data, 'alternatif_proyek')) {
                    echo " <script>
             alert('Data Alternatif Berhasil ditambahkan');
             window.location='" . site_url('pengelola/dashboard') . "';
         </script>";
            }
            else {
                echo "<script>
                    alert('Error !!!! Data Alternatif Gagal untuk diubah');
                    window.location='" . site_url('pengelola/alternatif/buat_alternatif') . "';
                </script>";
            }
        
            
        } else {
            echo "<script>
                alert('Error !!!! Data Alternatif Gagal untuk ditambahkan');
                window.location='" . site_url('pengelola/alternatif/buat_alternatif') . "';
		    </script>";
        }
    }
    
    

    
    }