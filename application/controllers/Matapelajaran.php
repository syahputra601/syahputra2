<?php
defined('BASEPATH') OR exit('No direct script allowed');

Class Matapelajaran extends CI_Controller{
    function __construct(){
		parent::__construct();		
		$this->load->model('m_matapelajaran');
		$this->load->helper('url');
        $this->load->helper('form');
	}

    function index(){
        $data['matpel']=$this->m_matapelajaran->tampil_data()->result();
        //$this->load->view('v_matapelajaran',$data);
        $data2['judul'] = "Data Matapelajaran";
        $this->load->view('v_header', $data);
		$this->load->view('v_matapelajaran', $data, $data2);
		$this->load->view('v_footer', $data);
    }

    public function search(){
        $keyword = $this->input->post('keyword');
        $data['matpel']=$this->m_matapelajaran->get_product_keyword($keyword);
        $this->load->view('search',$data);
    }

    function add_matpel(){
        $this->load->view('v_input_matapelajaran');
    }

    function action_add(){
        $nama_matpel=$this->input->post('nama_matapelajaran');
        $idpengajar=$this->input->post('id_pengajar');

        $data=array(
            'nama_matapelajaran' => $nama_matpel,
            'id_pengajar' => $idpengajar
        ); 
        
        // if($this->form_validation->run() != FALSE){
        //     $this->m_siswa->save_data($data, 'siswa');
        //     redirect('v_siswa');
        // } else{
        //     $this->load->view('v_add_student');
        // }

        $this->m_matapelajaran->save_data($data, 'm_matapelajaran');
        redirect('Matapelajaran/index');
    }

    function edit($id){
        $where=array('idm_matapelajaran' => $id);
        $data['matpel']=$this->m_matapelajaran->edit_data($where, 'm_matapelajaran')->result();
        $this->load->view('v_edit_matapelajaran', $data);
    }

    function update(){
        $id=$this->input->post('id');
        $nama_matpel=$this->input->post('nama_matapelajaran');
        $idpengajar=$this->input->post('id_pengajar');

        $data=array(
            'nama_matapelajaran' => $nama_matpel,
            'id_pengajar' => $idpengajar,
        ); 

        $where=array(
            'idm_matapelajaran' => $id
        );

        $this->m_matapelajaran->update_data($where,$data, 'm_matapelajaran');
        redirect('Matapelajaran/index');
    }

    function delete($id){
        $where=array('idm_matapelajaran' => $id);
        $this->m_matapelajaran->delete_data($where, 'm_matapelajaran');
        redirect('Matapelajaran/index');
        
    }

    

}

?>