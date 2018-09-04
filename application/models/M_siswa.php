<?php
defined('BASEPATH') OR exit('No direct Script allowed');

class M_siswa extends CI_Model{
    function tampil_data(){
        return $this->db->get('siswa');
    }

    function tampil_nilaisiswa(){
        return $this->db->get('relational_siswa_mp');
    }
    
    //Mencari siswa dengan CI
    public function get_product_keyword($keyword){
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->like('nama',$keyword);
        $this->db->or_like('idsiswa',$keyword);
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

    //model untuk join tabel matapelajaran dengan pengajar
    public function duatable() {
        $this->db->select('*');
        $this->db->from('m_matapelajaran');
        $this->db->join('pengajar', 'm_matapelajaran.id_pengajar = pengajar.id_pengajar');
        $query = $this->db->get();
        // echo $this->db->last_query;
        // die;
        return $query->result();
    }

    //model untuk join tabel siswa dengan matapelajaran
    public function duatable2() {
        $this->db->select('*');
        $this->db->from('relational_siswa_mp');
        $this->db->join('siswa', 'relational_siswa_mp.idsiswa = siswa.idsiswa');
        $this->db->join('m_matapelajaran', 'relational_siswa_mp.idm_matapelajaran = m_matapelajaran.idm_matapelajaran');
        $query = $this->db->get();
        // echo $this->db->last_query;
        // die;
        return $query->result();
    }

    //Cari data siswa berdasarkan nama
    function cari_data($where, $table){
        $this->db->like($where);
        $data = $this->db->get($table);
        return $data;
    }

    //Save data tambah nilai siswa
    function save_datanilai($data,$table){
        $this->db->insert($table, $data);
    }

    function delete_renilai($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

}

?>