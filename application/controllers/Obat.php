<?php
defined('BASEPATH') OR exit('No direct script allowed');

class Obat extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('m_obat');
		$this->load->library('form_validation');

		if($this->session->userdata('masuk') != TRUE){
			redirect(base_url("login"));
		}

	}

	function index(){
		$data['judul'] = "Data Obat";
		$this->load->view('v_obat', $data);
	}

	function list_obat(){
		$data['obat'] = $this->m_obat->tampil_data()->result();
		$this->load->view('v_listobat',$data);
	}

	function input_obat(){
		$data['id']=$this->m_obat->getId();
		$this->load->view('v_inputobat',$data);
	}

	function action_input(){
		// $this->form_validation->set_rules('nip','nip','required');
		// $this->form_validation->set_rules('namapasien','namapasien','required');
		// $this->form_validation->set_rules('kelamin','kelamin','required');
		// $this->form_validation->set_rules('alamat','alamat','required');
		// $this->form_validation->set_rules('no_telp','no_telp','required');
		// $this->form_validation->set_rules('tgl_kunjungan','tgl_kunjungan','required');

		$kodeobat=$this->input->post('kodeobat');
		$namaobat=$this->input->post('namaobat');
		$tipeobat=$this->input->post('tipeobat');
		$jumlah=$this->input->post('jumlah');

		$cek = $this->db->query("SELECT * FROM tbl_obat where nama_obat='".$namaobat."'")->num_rows();
		if($cek >= 1){
			$this->session->set_flashdata('cek','Nama obat sudah terdata.');
			$this->session->set_flashdata('cek2','Silahkan masukkan data obat kembali.');
			redirect('obat/input_obat');
		}else{
			$data=array(
				'kode_obat' => $kodeobat,
				'nama_obat' => $namaobat,
				'tipe_obat' => $tipeobat,
				'jumlah' => $jumlah
				);

				$this->m_obat->save_obat($data, 'tbl_obat');
				redirect('obat/list_obat');
			}
	}

	function edit($id){
		$where=array('kode_obat' => $id);
		$data['obat']=$this->m_obat->edit_obat($where, 'tbl_obat')->result();
		$this->load->view('v_editobat',$data);
	}

	function action_update(){
		// $this->form_validation->set_rules('nip','nip','required');
		// $this->form_validation->set_rules('namapasien','namapasien','required');
		// $this->form_validation->set_rules('kelamin','kelamin','required');
		// $this->form_validation->set_rules('alamat','alamat','required');
		// $this->form_validation->set_rules('no_telp','no_telp','required');
		// $this->form_validation->set_rules('tgl_kunjungan','tgl_kunjungan','required');

		$kodeobat=$this->input->post('kodeobat');
		$namaobat=$this->input->post('namaobat');
		$tipeobat=$this->input->post('tipeobat');
		$jumlah=$this->input->post('jumlah');

		$data=array(
			'nama_obat' => $namaobat,
			'tipe_obat' => $tipeobat,
			'jumlah' => $jumlah
			);

		$where=array(
			'kode_obat' => $kodeobat
			);

			$this->m_obat->update_obat($where, $data, 'tbl_obat');
			redirect('obat/list_obat');
	}

	function action_delete($id){
		$where=array('kode_obat' => $id);
		$this->m_obat->delete_obat($where, 'tbl_obat');
		redirect('obat/list_obat');
	}

}

?>