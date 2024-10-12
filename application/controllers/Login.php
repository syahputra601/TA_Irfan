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

	function login_hakakses()
        {
            $this->form_validation->set_rules('username', 'username', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            if ($this->form_validation->run()==FALSE) {
                $data['username'] = set_value('username');
                $data['passowrd'] = set_value('password');
                redirect('login');
            }

            else{
                $pass=md5($_POST['password']);
                $pass1=$_POST['password'];
                $data = array('username' => $_POST['username'],
                              'password' => $pass1);
                $hasil = $this->account_model->getuser($data);
                if (!empty($hasil)) {

                    foreach ($hasil as $key) {
                       
                    $sesi = array('nama' => $key->nama,
                    			  'username' => $key->username,
                                  'masuk' => TRUE,
                                  'level' => $key->status );
                    $level=$key->status;
                    }
                    // var_dump($sesi);exit();
                    $this->session->set_userdata($sesi,true);

                    if ($level==1) {
                        redirect ('admin/index');
                    }
                    elseif ($level==2) {
                        redirect ('dokter/index');
                    }
                    
                }
                else{
                    $this->session->set_flashdata('sukses', 'Username atau Password Salah!');
                    redirect('login');
                }
           
            }
        }

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}