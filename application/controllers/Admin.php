<?php
defined('BASEPATH') OR exit('No direct script allowed');

Class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_admin');
		$this->load->helper('url');
		$this->load->library('form_validation');

		if($this->session->userdata('masuk') != TRUE){
			redirect(base_url("login"));
		}if($this->session->userdata('level') == 2){
			redirect(base_url("login"));
		}

	}

	public function index(){
		$this->load->view('tamplate/header');
		$this->load->view('v_index');
		$this->load->view('tamplate/footer');
	}


}


?>