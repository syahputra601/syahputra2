<?php
defined('BASEPATH') OR exit('No direct script allowed');

Class Siswa extends CI_Controller{
    function __construct(){
		parent::__construct();		
		$this->load->model('m_siswa', '', TRUE);
		$this->load->helper('url');
        $this->load->helper('form');
        //Tambahan coding untuk Join tabel
	}

    function index(){
        // jika ada get / post maka cari data di database sesuai data yang dikirim lewat get atau post
        $data['siswa']=$this->m_siswa->tampil_data()->result();
        //$this->load->view('v_siswa',$data);
        $data2['judul'] = "Data Students";
		$this->load->view('v_header', $data);
		$this->load->view('v_siswa', $data, $data2);
		$this->load->view('v_footer', $data);
    }

    //cari nama
    function carinama(){
        $nama=$this->input->post('nama');
        $where=array(
            'nama' => $nama
        );
        //$this->m_siswa->update_data($where,$data, 'siswa');
        $data['siswa']=$this->m_siswa->cari_data($where, 'siswa')->result();
        $this->load->view('v_siswa', $data);
    }

    public function search(){
        $keyword = $this->input->post('keyword');
        $data['siswa']=$this->m_siswa->get_product_keyword($keyword);
        $this->load->view('search',$data);
    }

    function add_student(){
        $this->load->view('v_input_siswa');
    }

    function action_add(){
        $nama=$this->input->post('nama');
        $alamat=$this->input->post('alamat');
        $nama_orangtua=$this->input->post('nama_orangtua');
        $nomor_telepon_orangtua=$this->input->post('nomor_telepon_orangtua');
        $jenis_kelamin=$this->input->post('jenis_kelamin');
        $tempat_lahir=$this->input->post('tempat_lahir');
        $tanggal_lahir=$this->input->post('tanggal_lahir');

        $data=array(
            'nama' => $nama,
            'alamat' => $alamat,
            'nama_orangtua' => $nama_orangtua,
            'nomor_telepon_orangtua' => $nomor_telepon_orangtua,
            'jenis_kelamin' => $jenis_kelamin,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir
        ); 
        
        // if($this->form_validation->run() != FALSE){
        //     $this->m_siswa->save_data($data, 'siswa');
        //     redirect('v_siswa');
        // } else{
        //     $this->load->view('v_add_student');
        // }

        $this->m_siswa->save_data($data, 'siswa');
        redirect('siswa/index');
    }

    function edit($id){
        $where=array('idsiswa' => $id);
        $data['siswa']=$this->m_siswa->edit_data($where, 'siswa')->result();
        $this->load->view('v_edit_siswa', $data);
    }

    function update(){
        $id=$this->input->post('id');
        $nama=$this->input->post('nama');
        $alamat=$this->input->post('alamat');
        $nama_orangtua=$this->input->post('nama_orangtua');
        $nomor_telepon_orangtua=$this->input->post('nomor_telepon_orangtua');
        $jenis_kelamin=$this->input->post('jenis_kelamin');
        $tempat_lahir=$this->input->post('tempat_lahir');
        $tanggal_lahir=$this->input->post('tanggal_lahir');

        $data=array(
            'nama' => $nama,
            'alamat' => $alamat,
            'nama_orangtua' => $nama_orangtua,
            'nomor_telepon_orangtua' => $nomor_telepon_orangtua,
            'jenis_kelamin' => $jenis_kelamin,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir
        ); 

        $where=array(
            'idsiswa' => $id
        );

        $this->m_siswa->update_data($where,$data, 'siswa');
        redirect('siswa/index');
    }

    function delete($id){
        $where=array('idsiswa' => $id);
        $this->m_siswa->delete_data($where, 'siswa');
        redirect('siswa/index');
        
    }

    //tabel join 
    function add_siswamatpel(){
    // query memanggil function duatable di model
    $data['join2'] = $this->m_siswa->duatable(); 
    // print_r($data);
    // die;
    $this->load->view('v_siswamatpel',$data);   
    }

     //tabel join
    function add_siswamatapelajaran(){
    // query memanggil function duatable di model
    $data['join2'] = $this->m_siswa->duatable2(); 
    // print_r($data);
    // die;
    $this->load->view('v_siswamatapelajaran',$data);   
    }
    
    function add_nilaisiswa(){
        $this->load->view('v_input_nilai_siswa');
    }

    function nilaisiswa(){
        $data['nilaisiswa']=$this->m_siswa->tampil_nilaisiswa()->result();
        $this->load->view('v_nilai_siswa', $data);
    }

    function action_addnilai(){
        $idsiswa=$this->input->post('idsiswa');
        $idm_matapelajaran=$this->input->post('idm_matapelajaran');
        $id_nilai=$this->input->post('id_nilai');

        $data=array(
            'idsiswa' => $idsiswa,
            'idm_matapelajaran' => $idm_matapelajaran,
            'nilai' => $id_nilai
        ); 
        
        // if($this->form_validation->run() != FALSE){
        //     $this->m_siswa->save_data($data, 'siswa');
        //     redirect('v_siswa');
        // } else{
        //     $this->load->view('v_add_student');
        // }

        $this->m_siswa->save_datanilai($data, 'relational_siswa_mp');
        redirect('siswa/nilaisiswa');
    }

    function delete_renilai($id){
        $where=array('idrelational_siswa_mp' => $id);
        $this->m_siswa->delete_renilai($where, '   relational_siswa_mp');
        redirect('siswa/nilaisiswa');
        
    }

}

?>