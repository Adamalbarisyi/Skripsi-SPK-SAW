<?php
class M_kriteria extends CI_Model
{

    function get_kriteria() //tampil data kriteria
    {
        $result = $this->db->get('kriteria');
        return $result;
    }

    function input_data($data, $table) // Tambah data kriteria
    {
        $this->db->insert($table, $data);
    }

    function delete_data($where, $table) //Hapus data kriteria
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function update_data($where, $data, $table) // Update data kriteria
    { 
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
