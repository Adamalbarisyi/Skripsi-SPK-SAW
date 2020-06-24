<?php
class M_subkriteria extends CI_Model
{

    function get_subkriteria() //tampil data Subkriteria
    {
        $result = $this->db->select('kriteria.nama_kriteria, subkriteria. * ')-> join('kriteria', 'kriteria.id_kriteria = subkriteria.id_kriteria')->get('subkriteria');
        return $result;
    }

    function input_data($data, $table) // Tambah data Subkriteria
    {
        $this->db->insert($table, $data);
    }

    function delete_data($where, $table) //Hapus data Subkriteria
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function update_data($where, $data, $table) //  Update Subkriteria
    { 
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
