<?php

class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
		$this->load->model('account_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
    }

    function index(){
        $this->load->view('v_login');
    }

    function aksi_login(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $where=array(
            'username' => $username,
            'password' => $password
        );
        $cek=$this->m_login->cek_login("admin", $where)->num_rows();
        if($cek > 0) {
            $data_session=array(
                'nama' => $username,
                'status' => "login"
            );
        $this->session->set_userdata($data_session);
        redirect(base_url("admin"));
        }else {
            echo "Username dan Password Salah !";
        }
    }

    //Untuk Dua Hak Akses pada saat login
	function login_hakakses()
    {
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        if ($this->form_validation->run()==FALSE) {
            $data['username'] = set_value('username');
            $data['passowrd'] = set_value('password');
            $this->load->view('login/index');
        }

        else{
            $data = array('username' => $_POST['username'],
                          'password' => $_POST['password']);
            $hasil = $this->account_model->getuser($data);
            if (!empty($hasil)) {
                $this->account_model->ambilsession($data);
                foreach ($hasil as $key) {
                   
                $sesi = array('username' => $key->username,
                              'masuk' => TRUE,
                              'level' => $key->status );
                $level=$key->status;
                }
                // var_dump($sesi);exit();
                $this->session->set_userdata($sesi,true);

                if ($level==1) {
                    redirect ('web/index');
                }
                elseif ($level==2) {
                    redirect ('pimpinan/index');//belum ada view nya
                }
                else {
                    redirect('login/index');
                }
                
            }
            else{
                $this->load->view('login/index');
            }
       
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }

}

?>