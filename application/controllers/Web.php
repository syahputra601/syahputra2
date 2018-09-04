<?php
defined('BASEPATH') OR exit('No direct script allowed');

class Web extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_web');
		$this->load->helper('url');
		$this->load->library('form_validation');

		if($this->session->userdata('masuk') != TRUE){
			redirect(base_url("login"));
		}if($this->session->userdata('level') == 2){
			redirect(base_url("login"));
		}

	}

	public function index(){
		$data['judul'] = "How we do business";
		$this->load->view('v_header', $data);
		$this->load->view('v_index', $data);
		$this->load->view('v_footer', $data);
	}

	public function about(){
		$data['judul'] = "Halaman About";
		$this->load->view('v_header', $data);
		$this->load->view('v_index', $data);
		$this->load->view('v_footer', $data);
	}

	public function identitas(){
		$data['judul'] = "Halaman Input Data Identitas";
		// $datauser['user'] = $this->m_web->tampil_data()->result();
		// $this->load->view('v_header',$data);
		// $this->load->view('v_identitas',$datauser);
		// $this->load->view('v_footer',$data);

		$this->load->database();
		$jumlah_data = $this->m_web->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'web/identitas/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['user'] = $this->m_web->data($config['per_page'],$from);
		$this->load->view('v_header',$data);
		$this->load->view('v_identitas',$data);
		$this->load->view('v_footer',$data);
	}

	public function printout(){
		$data['judul'] = "Halaman Print Out Data Identitas";
		$this->load->view('v_header',$data);
		$this->load->view('v_index',$data);
		$this->load->view('v_footer',$data);
	}

	function input_data(){
		$data['judul'] = "Halaman Input Data Identitas";
		$this->load->view('v_header',$data);
		$this->load->view('v_input_identitas',$data);
		$this->load->view('v_footer',$data);
	}

	function action_input(){
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('pekerjaan','pekerjaan','required');

		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$pekerjaan=$this->input->post('pekerjaan');

		$data=array(
			'nama' => $nama,
			'alamat' => $alamat,
			'pekerjaan' => $pekerjaan
			);
		if($this->form_validation->run() != false){
			$this->m_web->save_data($data, 'user');
			redirect('web/identitas');
		} else{
			$this->load->view('v_header');
			$this->load->view('v_input_identitas');
			$this->load->view('v_footer');
		}
	}

	function edit($id){
		$where=array('Id_identitas' => $id);
		$data['user']=$this->m_web->edit_data($where, 'user')->result();
		$this->load->view('v_header');
		$this->load->view('v_edit_identitas',$data); 
		$this->load->view('v_footer');
	}

	function action_update(){
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('pekerjaan','pekerjaan','required');

		$id=$this->input->post('id');
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$pekerjaan=$this->input->post('pekerjaan');

		$data=array(
			'nama' => $nama,
			'alamat' => $alamat,
			'pekerjaan' => $pekerjaan
			);
		$where=array(
			'Id_identitas' => $id
			);

		if($this->form_validation->run() != false){
			$this->m_web->update_data($where, $data, 'user');
			redirect('web/identitas');
		} else{
			$this->load->view('v_header');
			$this->load->view('v_edit_identitas');
			$this->load->view('v_footer');
		}
	}

	function delete($id){
		$where=array('Id_identitas' => $id);
		$this->m_web->delete_data($where, 'user');
		redirect('web/identitas');
	}

}


?>