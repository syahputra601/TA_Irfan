<?php
defined('BASEPATH') OR exit('No direct script allowed');

class M_dokter extends CI_Model{
	function __construct()
		{
			parent::__construct();
			$this->table_name='dokter';
		}

	function tampil_data(){
		return $this->db->get('dokter');
	}

	function edit_dokter($where, $table){
		return $this->db->get_where($table, $where);
	}

	function save_dokter($data,$table){
		$this->db->insert($table, $data);
	}

	function update_dokter($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function delete_dokter($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

    public function getId(){
            $data = $this->db->get('dokter');

            $count = $data->num_rows() + 1;
            if ($count < 10 ) {
                $code = "DT-00000".$count;
            }
            elseif ($count < 100) {
                $code = "DT-000000".$count;
            }
            else{
                $code = "DT-0000".$count;
            }
            return $code;
        }

    public function ListComboDokter() {
        $this->db->select("kode_dokter, nama_dokter") ;
        $this->db->from($this->table_name);
        $sql = $this->db->get() ;
        
        $result[""] = "Please Select";
        if ($sql->num_rows() > 0) {
            
            foreach($sql->result_array() as $row) {
                $result[$row["kode_dokter"]] = $row["nama_dokter"] ;
            }
           
            return $result ;
        }else {
            echo "no data";
        }
    }


}

?>