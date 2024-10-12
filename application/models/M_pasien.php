<?php
defined('BASEPATH') OR exit('No direct script allowed');

class M_pasien extends CI_Model{
	function tampil_data(){
		return $this->db->get('pasien');
	}

	function edit_pasien($where, $table){
		return $this->db->get_where($table, $where);
	}

	function save_pasien($data,$table){
		$this->db->insert($table, $data);
	}

	function update_pasien($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function delete_pasien($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function list_header($nip='')
    {
       
        $sql = $this->db->query("select a.nip, a.tgl_kunjungan, a.nama_pasien, a.no_telp, a.alamat from pasien a where a.nip='".$nip."'");
        return $sql->result_array();   
    }

    public function list_detail($nip='')
    {
       
        $sql = $this->db->query("select b.no_rm, b.tgl_pemeriksaan, 
        	c.diagnosa, c.resep, c.keluhan, c.keterangan, d.nama_dokter, e.nama_obat
        	from rekam_medis b, detail_rekam c, dokter d, tbl_obat e
        	where b.no_rm = c.no_rm and b.kode_dokter = d.kode_dokter and c.kode_obat = e.kode_obat
        	and b.nip='".$nip."'");
        return $sql->result_array();   
    }

}

?>