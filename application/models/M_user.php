<?php
defined('BASEPATH') OR exit('No direct script allowed');

class M_user extends CI_Model{
	function tampil_data(){
		return $this->db->get('user');
	}

	function edit_user($where, $table){
		return $this->db->get_where($table, $where);
	}

	function save_user($data,$table){
		$this->db->insert($table, $data);
	}

	function update_user($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function delete_user($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

    public function getId(){
            $data = $this->db->get('user');

            $count = $data->num_rows() + 1;
            if ($count < 10 ) {
                $code = "IDS-00000".$count;
            }
            elseif ($count < 100) {
                $code = "IDS-000000".$count;
            }
            else{
                $code = "IDS-0000".$count;
            }
            return $code;
        }

}

?>