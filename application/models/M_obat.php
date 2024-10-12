<?php
defined('BASEPATH') OR exit('No direct script allowed');

class M_obat extends CI_Model{
	function __construct()
		{
			parent::__construct();
			$this->table_name='tbl_obat';
		}

	function tampil_data(){
		return $this->db->get('tbl_obat');
	}

	function edit_obat($where, $table){
		return $this->db->get_where($table, $where);
	}

	function save_obat($data,$table){
		$this->db->insert($table, $data);
	}

	function update_obat($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function delete_obat($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

    public function getId(){
            $data = $this->db->get('tbl_obat');

            $count = $data->num_rows() + 1;
            if ($count < 10 ) {
                $code = "OB-00000".$count;
            }
            elseif ($count < 100) {
                $code = "OB-000000".$count;
            }
            else{
                $code = "OB-0000".$count;
            }
            return $code;
        }

     public function ListComboObat() {
        $this->db->select("kode_obat, nama_obat") ;
        $this->db->from($this->table_name);
        $sql = $this->db->get() ;
        
        $result[""] = "Please Select";
        if ($sql->num_rows() > 0) {
            
            foreach($sql->result_array() as $row) {
                $result[$row["kode_obat"]] = $row["nama_obat"] ;
            }
           
            return $result ;
        }else {
            echo "no data";
        }
    }


}

?>