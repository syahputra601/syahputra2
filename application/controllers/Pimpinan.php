<?php
defined('BASEPATH') OR exit('No direct script allowed');

class Pimpinan extends CI_Controller{
	function __construct(){
		parent:: __construct();
		//$this->load->model('m_pimpinan');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');

		if($this->session->userdata('masuk') != TRUE){
			redirect(base_url("login"));
		}
	}

	function index(){
		$data["page"] = "v_pimpinan";
		// $this->load->view('v_header');
		// $this->load->view('pimpinan/v_pimpinan',$data);
		// $this->load->view('v_footer');
		$this->load->view("atasbawah/themes",$data);
	}


}

?>