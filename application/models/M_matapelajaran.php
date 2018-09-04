<?php
defined('BASEPATH') OR exit('No direct Script allowed');

class M_matapelajaran extends CI_Model{
    function tampil_data(){
        return $this->db->get('m_matapelajaran');
    }
    
    //Mencari siswa dengan CI
    public function get_product_keyword($keyword){
        $this->db->select('*');
        $this->db->from('m_matapelajaran');
        $this->db->like('nama_matapelajaran',$keyword);
        $this->db->or_like('id_pengajar',$keyword);
        return $this->db->get()->result();
    }

    function save_data($data,$table){
        $this->db->insert($table, $data);
    }

    function edit_data($where, $table){
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function delete_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}

?>