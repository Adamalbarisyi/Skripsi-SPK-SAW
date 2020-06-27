<?php
class M_alternatif extends CI_Model
{

    function get_alternatif() //tampil data alternatif
    {
        $result = $this->db->get('alternatif');
        return $result;
    }

    function input_data($data, $table) // Tambah data alternatif
    {
        $this->db->insert($table, $data);
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
}
