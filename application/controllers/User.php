<?php
defined('BASEPATH') OR exit('No direct script allowed');

class User extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('m_user');
		$this->load->library('form_validation');

		if($this->session->userdata('masuk') != TRUE){
			redirect(base_url("login"));
		}

	}

	function index(){
		$data['judul'] = "Data User";
		$this->load->view('v_user', $data);
	}

	function list_user(){
		$data['user'] = $this->m_user->tampil_data()->result();
		$this->load->view('v_listuser',$data);
	}

	function input_user(){
		$data['id']=$this->m_user->getId();
		$this->load->view('v_inputuser',$data);
	}

	function action_input(){
		// $this->form_validation->set_rules('nip','nip','required');
		// $this->form_validation->set_rules('namapasien','namapasien','required');
		// $this->form_validation->set_rules('kelamin','kelamin','required');
		// $this->form_validation->set_rules('alamat','alamat','required');
		// $this->form_validation->set_rules('no_telp','no_telp','required');
		// $this->form_validation->set_rules('tgl_kunjungan','tgl_kunjungan','required');
		$kode=$this->input->post('kodeuser');
		$nama=$this->input->post('nama');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$status=$this->input->post('status');

		$cek = $this->db->query("SELECT * FROM user where username='".$username."'")->num_rows();
		if($cek >= 1){
			$this->session->set_flashdata('cek','Username sudah terdata.');
			$this->session->set_flashdata('cek2','Silahkan masukkan data user kembali.');
			redirect('user/input_user');
		}else{
			$data=array(
				'id_user' => $kode,
				'nama' => $nama,
				'username' => $username,
				'password' => $password,
				'status' => $status
				);
				$this->m_user->save_user($data, 'user');
				redirect('user/list_user');
			}
	}

	function edit($id){
		$where=array('id_user' => $id);
		$data['user']=$this->m_user->edit_user($where, 'user')->result();
		$this->load->view('v_edituser',$data);
	}

	function action_update(){
		// $this->form_validation->set_rules('nip','nip','required');
		// $this->form_validation->set_rules('namapasien','namapasien','required');
		// $this->form_validation->set_rules('kelamin','kelamin','required');
		// $this->form_validation->set_rules('alamat','alamat','required');
		// $this->form_validation->set_rules('no_telp','no_telp','required');
		// $this->form_validation->set_rules('tgl_kunjungan','tgl_kunjungan','required');

		$kode=$this->input->post('kodeuser');
		$nama=$this->input->post('nama');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$status=$this->input->post('status');

		$data=array(
			'nama' => $nama,
			'username' => $username,
			'password' => $password,
			'status' => $status
			);
		$where=array(
			'id_user' => $kode
			);
			$this->m_user->update_user($where, $data, 'user');
			redirect('user/list_user');
	}

	function action_delete($id){
		$where=array('id_user' => $id);
		$this->m_user->delete_user($where, 'user');
		redirect('user/list_user');
	}

}

?>