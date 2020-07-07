<?php
class M_alternatif extends CI_Model
{

    function get_alternatif() //tampil data alternatif verifikasi
    {
        $result = $this->db->get('alternatif_proyek');
        return $result;
    }

    function get_alternatif_verif() //tampil data alternatif active
    {
        $hasil = $this->db->query("SELECT * FROM alternatif_proyek WHERE status_post = '0'");

        return $hasil;
    }

    function get_alternatif_active() //tampil data alternatif active
    {
        $hasil = $this->db->query("SELECT * FROM alternatif_proyek WHERE status_post = '1'");

        return $hasil;
    }

    function get_alternatif_deactive() //tampil data alternatif deactive
    {
        $hasil = $this->db->query("SELECT * FROM alternatif_proyek WHERE status_post = '2'");

        return $hasil;
    }

    function get_alternatif_page() //tampil random data alternatif
    {
        $this->db->order_by('id_proyek', 'RANDOM');
        $result = $this->db->get('alternatif_proyek', 6, 1);
        return $result;
    }


    function input_data($data, $table) // Tambah data alternatif
    {
        if ($this->db->insert($table, $data)) {
            return true;
        } else {
            return false;
        }
    }

    function delete_data($where, $table) //Hapus data alternatif
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function update_data($where, $data, $table) // Update data alternatif
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }


    function update_data_active($where,$data, $table) // Update data alternatif active
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function update_data_deactive($where, $table)   // Update data alternatif deactive
    {
        return $this->db->get_where($table, $where);
    }
}
