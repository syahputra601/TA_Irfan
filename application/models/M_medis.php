<?php
defined('BASEPATH') OR exit('No direct script allowed');

class M_medis extends CI_Model{
	function tampil_data(){
		return $this->db->get('rekam_medis');
	}

	function detail_rmedis($where, $table){
		return $this->db->get_where($table, $where);
	}

	function detail_dmedis($where, $table){
		return $this->db->get_where($table, $where);
	}

	function save_rmedis($data,$table){
		$this->db->insert($table, $data);
	}

	function save_dmedis($data,$table){
		$this->db->insert($table, $data);
	}

	function update_medis($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function delete_rmedis($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function delete_dmedis($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function list_header($no_rm='')
    {
       
        $sql = $this->db->query("select a.no_rm, b.nama_pasien, b.no_telp, b.alamat, c.nama_dokter, a.tgl_pemeriksaan from rekam_medis a, pasien b, dokter c where  a.kode_dokter = c.kode_dokter and a.nip = b.nip and a.no_rm='".$no_rm."'");
        return $sql->result_array();   
    }

    public function list_detail($no_rm='')
    {
       
        $sql = $this->db->query("select a.no_rm, a.diagnosa, a.resep, a.keluhan, a.keterangan, b.nama_obat from detail_rekam a, tbl_obat b where a.kode_obat = b.kode_obat and a.no_rm='".$no_rm."'");
        return $sql->result_array();   
    }

    public function getId(){
            $data = $this->db->get('rekam_medis');

            $count = $data->num_rows() + 1;
            if ($count < 10 ) {
                $code = "RM-00000".$count;
            }
            elseif ($count < 100) {
                $code = "RM-000000".$count;
            }
            else{
                $code = "RM-0000".$count;
            }
            return $code;
        }

	function get_data_pasien_bykode($nip){
		$hsl=$this->db->query("SELECT * FROM pasien WHERE nip='$nip'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'nip' => $data->nip,
					'nama_pasien' => $data->nama_pasien,
					// 'harga' => $data->harga,
					// 'satuan' => $data->satuan,
					);
			}
		}
		return $hasil;
	}

}

?>