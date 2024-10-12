<?php
defined('BASEPATH') OR exit('No direct script allowed');

class Pasien extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('m_pasien');
		$this->load->library('form_validation');

		if($this->session->userdata('masuk') != TRUE){
			redirect(base_url("login"));
		}

	}

	function index(){
		$data['judul'] = "Data Pasien";
		$this->load->view('tamplate/header');
		$this->load->view('v_pasien');
		$this->load->view('tamplate/footer');
	}

	function list_pasien(){
		$data['pasien'] = $this->m_pasien->tampil_data()->result();
		$this->load->view('tamplate/header');
		$this->load->view('v_listpasien',$data);
		$this->load->view('tamplate/footer');
	}

	function input_pasien(){
		$this->load->view('tamplate/header');
		$this->load->view('v_inputpasien');
		$this->load->view('tamplate/footer');
	}

	function detail($nip='') {
        $data["nip"]=$nip;
        $data["header"] = $this->m_pasien->list_header($nip) ;
        $data["detail"] = $this->m_pasien->list_detail($nip) ;
        $this->load->view("v_detailpasien",$data);
    }

	function action_input(){
		// $this->form_validation->set_rules('nip','nip','required');
		// $this->form_validation->set_rules('namapasien','namapasien','required');
		// $this->form_validation->set_rules('kelamin','kelamin','required');
		// $this->form_validation->set_rules('alamat','alamat','required');
		// $this->form_validation->set_rules('no_telp','no_telp','required');
		// $this->form_validation->set_rules('tgl_kunjungan','tgl_kunjungan','required');
		$nip=$this->input->post('nip');
		$namapasien=$this->input->post('namapasien');
		$kelamin=$this->input->post('kelamin');
		$alamat=$this->input->post('alamat');
		$no_telp=$this->input->post('notelp');
		$tgl_kunjungan=$this->input->post('tgl_kunjungan');

		$cek = $this->db->query("SELECT * FROM pasien where nip='".$nip."'")->num_rows();
		if($cek<=0){

			$data=array(
				'nip' => $nip,
				'nama_pasien' => $namapasien,
				'kelamin' => $kelamin,
				'alamat' => $alamat,
				'no_telp' => $no_telp,
				'tgl_kunjungan' => $tgl_kunjungan
				);

				$this->m_pasien->save_pasien($data, 'pasien');
				redirect('pasien/list_pasien');
		}else{
			$this->session->set_flashdata('cek','Nip sudah terdata.');
			$this->session->set_flashdata('cek2','Silahkan masukkan data pasien kembali.');
			redirect('pasien/input_pasien');
		}
	}

	function edit($id){
		$where=array('nip' => $id);
		$data['pasien']=$this->m_pasien->edit_pasien($where, 'pasien')->result();
		$this->load->view('v_editpasien',$data);
	}

	function action_update(){
		// $this->form_validation->set_rules('nip','nip','required');
		// $this->form_validation->set_rules('namapasien','namapasien','required');
		// $this->form_validation->set_rules('kelamin','kelamin','required');
		// $this->form_validation->set_rules('alamat','alamat','required');
		// $this->form_validation->set_rules('no_telp','no_telp','required');
		// $this->form_validation->set_rules('tgl_kunjungan','tgl_kunjungan','required');

		$nip=$this->input->post('nip');
		$namapasien=$this->input->post('namapasien');
		$kelamin=$this->input->post('kelamin');
		$alamat=$this->input->post('alamat');
		$notelp=$this->input->post('notelp');
		$tgl_kunjungan=$this->input->post('tgl_kunjungan');

		$data=array(
			'nama_pasien' => $namapasien,
			'kelamin' => $kelamin,
			'alamat' => $alamat,
			'no_telp' => $notelp,
			'tgl_kunjungan' => $tgl_kunjungan
			);
		$where=array(
			'nip' => $nip
			);
			$this->m_pasien->update_pasien($where, $data, 'pasien');
			redirect('pasien/list_pasien');
	}

	function action_delete($id){
		$where=array('nip' => $id);
		$this->m_pasien->delete_pasien($where, 'pasien');
		redirect('pasien/list_pasien');
	}

}

?>