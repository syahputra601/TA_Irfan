<?php
defined('BASEPATH') OR exit('No direct script allowed');

class Dokter extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('m_dokter');
		$this->load->library('form_validation');

		if($this->session->userdata('masuk') != TRUE){
			redirect(base_url("login"));
		}

	}

	function index(){
		$this->load->view('tamplate/header');
		$this->load->view('dokter/v_dokter');
		$this->load->view('tamplate/footer');
	}

	function list_dokter(){
		$data['dokter'] = $this->m_dokter->tampil_data()->result();
		$this->load->view('v_listdokter',$data);
	}

	function input_dokter(){
		$data['id']=$this->m_dokter->getId();
		$this->load->view('v_inputdokter',$data);
	}

	function action_input(){
		// $this->form_validation->set_rules('nip','nip','required');
		// $this->form_validation->set_rules('namapasien','namapasien','required');
		// $this->form_validation->set_rules('kelamin','kelamin','required');
		// $this->form_validation->set_rules('alamat','alamat','required');
		// $this->form_validation->set_rules('no_telp','no_telp','required');
		// $this->form_validation->set_rules('tgl_kunjungan','tgl_kunjungan','required');

		$kodedokter=$this->input->post('kodedokter');
		$namadokter=$this->input->post('namadokter');
		$notelp=$this->input->post('notelp');

		$cek = $this->db->query("SELECT * FROM dokter where nama_dokter='".$namadokter."'")->num_rows();
		if($cek >= 1){
			$this->session->set_flashdata('cek','Nama dokter sudah terdata.');
			$this->session->set_flashdata('cek2','Silahkan masukkan data dokter kembali.');
			redirect('dokter/input_dokter');
		}else{
			$data=array(
				'kode_dokter' => $kodedokter,
				'nama_dokter' => $namadokter,
				'no_telpdokter' => $notelp
				);

				$this->m_dokter->save_dokter($data, 'dokter');
				redirect('dokter/list_dokter');
			}
	}

	function edit($id){
		$where=array('kode_dokter' => $id);
		$data['dokter']=$this->m_dokter->edit_dokter($where, 'dokter')->result();
		$this->load->view('v_editdokter',$data);
	}

	function action_update(){
		// $this->form_validation->set_rules('nip','nip','required');
		// $this->form_validation->set_rules('namapasien','namapasien','required');
		// $this->form_validation->set_rules('kelamin','kelamin','required');
		// $this->form_validation->set_rules('alamat','alamat','required');
		// $this->form_validation->set_rules('no_telp','no_telp','required');
		// $this->form_validation->set_rules('tgl_kunjungan','tgl_kunjungan','required');

		$kodedokter=$this->input->post('kodedokter');
		$namadokter=$this->input->post('namadokter');
		$notelp=$this->input->post('notelp');

		$data=array(
			'nama_dokter' => $namadokter,
			'no_telpdokter' => $notelp
			);
		$where=array(
			'kode_dokter' => $kodedokter
			);
			$this->m_dokter->update_dokter($where, $data, 'dokter');
			redirect('dokter/list_dokter');
	}

	function action_delete($id){
		$where=array('kode_dokter' => $id);
		$this->m_dokter->delete_dokter($where, 'dokter');
		redirect('dokter/list_dokter');
	}

}

?>