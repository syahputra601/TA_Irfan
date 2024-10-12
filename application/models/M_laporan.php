

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

    class m_laporan extends CI_model
    {
        
        function __construct()
        {
            parent::__construct();
            $this->table_header = "rekam_medis";
            $this->table_detail = "detail_rekam";
        }

        function laporan($tahun){
            $this->db->select("*") ;
            $this->db->from($this->table_header);
            $this->db->where("LEFT(tgl_pemeriksaan, 4) = ",$tahun) ;
            $sql = $this->db->get();

            return $sql->result_array();
        }
    } 
?>