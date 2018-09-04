<?php
defined('BASEPATH') OR exit('No direct script allowed');

Class M_web extends CI_Model{
	function tampil_data(){
		return $this->db->get('user');
	}

	function edit_data($where, $table){
		return $this->db->get_where($table, $where);
	}

	function save_data($data, $table){
		$this->db->insert($table, $data);
	}

	function update_data($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function delete_data($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function data($number,$offset){
		return $query = $this->db->get('user',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		return $this->db->get('user')->num_rows();
	}
	
}


?>