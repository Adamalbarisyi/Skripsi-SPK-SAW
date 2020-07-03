<?php
class M_alternatif extends CI_Model
{

    function get_alternatif() //tampil data alternatif
    {
        $result = $this->db->get('alternatif_proyek');
        return $result;
    }

    function input_data($data, $table) // Tambah data alternatif
    {
        if ($this->db->insert($table, $data)) {
            return true;
        }
        else {
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
}
