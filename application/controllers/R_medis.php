<?php
defined('BASEPATH') OR exit('No direct script allowed');

class R_medis extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('m_medis');
		$this->load->model('m_dokter');
		$this->load->model('m_obat');
		$this->load->model('m_pasien');
		$this->load->library('form_validation');

		if($this->session->userdata('masuk') != TRUE){
			redirect(base_url("login"));
		}

	}

	function index(){
		$this->load->view('medis/v_medis');
	}

	function list_medis(){
		$data['medis'] = $this->m_medis->tampil_data()->result();
		$this->load->view('medis/v_medis',$data);
	}

	function input_medis(){
		$this->load->view('medis/v_inputmedis');
	}

	public function add() {
		$data['kode_dtr'] = $this->m_dokter->ListComboDokter();
		$data['kode_obt'] = $this->m_obat->ListComboObat();
        $data['no'] = $this->m_medis->getId();
        $this->load->view('medis/v_inputmedis',$data);
    }


	public function detail($no_rm='') {
        $data["no_rm"]=$no_rm;
        $data["header"] = $this->m_medis->list_header($no_rm) ;
        $data["detail"] = $this->m_medis->list_detail($no_rm) ;
        $this->load->view("medis/v_detailmedis",$data);
    }

    public function cetakdetail($no_rm='') {
        $data["no_rm"]=$no_rm;
        $data["header"] = $this->m_medis->list_header($no_rm) ;
        $data["detail"] = $this->m_medis->list_detail($no_rm) ;
        $this->load->view("laporan/v_cetakdetail",$data);
    }

	function action_input(){
		$namadokter=$this->input->post('namadokter');
		$nip=$this->input->post('nip');
		$diagnosa=$this->input->post('diagnosa');
		$namaobat=$this->input->post('namaobat');
		$resep=$this->input->post('resep');
		$keluhan=$this->input->post('keluhan');
		$keterangan=$this->input->post('keterangan');
		$tgl_pemeriksaan=$this->input->post('tgl_pemeriksaan');
		$no=$this->input->post('no_rm');

		$data_rmedis=array(
			'no_rm' => $no,
			'kode_dokter' => $namadokter,
			'nip' => $nip,
			'tgl_pemeriksaan' => $tgl_pemeriksaan
			);

			

		$data_dmedis=array(
			'no_rm' => $no,
			'kode_obat' => $namaobat,
			'diagnosa' => $diagnosa,
			'resep' => $resep,
			'keluhan' => $keluhan,
			'keterangan' => $keterangan
			);
		$this->m_medis->save_rmedis($data_rmedis, 'rekam_medis');
		$this->m_medis->save_dmedis($data_dmedis, 'detail_rekam');
		redirect('R_medis/list_medis');
	}

	function action_delete($id){
		$where=array('no_rm' => $id);
		$this->m_medis->delete_rmedis($where, 'rekam_medis');
		$this->m_medis->delete_dmedis($where, 'detail_rekam');
		redirect('R_medis/list_medis');
	}

	function get_pasien(){
		$nip=$this->input->post('nip');
		$data=$this->m_medis->get_data_pasien_bykode($nip);
		echo json_encode($data);
	}




}

?>