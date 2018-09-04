<?php
defined('BASEPATH') OR exit('No direct script allowed');

Class Pengajar extends CI_Controller{
    function __construct(){
		parent::__construct();		
		$this->load->model('m_pengajar');
		$this->load->helper('url');
        $this->load->helper('form');
	}

    function index(){
        $data['pengajar']=$this->m_pengajar->tampil_data()->result();
        $this->load->view('v_pengajar',$data);
    }

    //Untuk searching data
    public function search(){
        $keyword = $this->input->post('keyword');
        $data['pengajar']=$this->m_pengajar->get_product_keyword($keyword);
        $this->load->view('search',$data);
    }

    function add_pengajar(){
        $this->load->view('v_input_pengajar');
    }

    function action_add(){
        $nama_pengajar=$this->input->post('nama_pengajar');
        $idm_matapelajaran=$this->input->post('idm_matapelajaran');

        $data=array(
            'nama_pengajar' => $nama_pengajar,
            'idm_matapelajaran' => $idm_matapelajaran
        ); 
        
        // if($this->form_validation->run() != FALSE){
        //     $this->m_siswa->save_data($data, 'siswa');
        //     redirect('v_siswa');
        // } else{
        //     $this->load->view('v_add_student');
        // }

        $this->m_pengajar->save_data($data, 'pengajar');
        redirect('Pengajar/index');
    }

    function edit($id){
        $where=array('id_pengajar' => $id);
        $data['pengajar']=$this->m_pengajar->edit_data($where, 'pengajar')->result();
        $this->load->view('v_edit_pengajar', $data);
    }

    function update(){
        $id=$this->input->post('id');
        $nama_pengajar=$this->input->post('nama_pengajar');
        $idm_matapelajaran=$this->input->post('idm_matapelajaran');

        $data=array(
            'nama_pengajar' => $nama_pengajar,
            'idm_matapelajaran' => $idm_matapelajaran,
        ); 

        $where=array(
            'id_pengajar' => $id
        );

        $this->m_pengajar->update_data($where,$data, 'pengajar');
        redirect('Pengajar/index');
    }

    function delete($id){
        $where=array('id_pengajar' => $id);
        $this->m_pengajar->delete_data($where, 'pengajar');
        redirect('Pengajar/index');
        
    }

    

}

?>