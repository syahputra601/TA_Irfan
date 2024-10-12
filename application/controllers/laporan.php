<?php 

    class laporan extends CI_Controller
    {
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('m_laporan',"",true);

            if($this->session->userdata('masuk') != TRUE){
            redirect(base_url("login"));
            }

        }

        public function index()
        {
            $this->load->view('laporan/v_laporan');
        }

        public function reportPdf()
        {
            $years = $this->input->post('tahun', TRUE);
            $data= $this->m_laporan->laporan($years);
            $this->load->library('fpdf_master');
                $column_no_rm = "";
                $column_nip = "";
                $column_kodedokter = "";
                $column_tglpemeriksaan = "";
            foreach ($data as $row) {
                $no_rm = $row["no_rm"];
                $nip = $row["nip"];
                $kode_dokter = $row["kode_dokter"];
                $tgl_pemeriksaan = $row["tgl_pemeriksaan"];
                

                $column_no_rm = $column_no_rm.$no_rm."\n";
                $column_nip = $column_nip.$nip."\n";
                $column_kodedokter = $column_kodedokter.$kode_dokter."\n";
                $column_tglpemeriksaan = $column_tglpemeriksaan.$tgl_pemeriksaan."\n";
                

                //Create a new PDF file
                $this->fpdf = new FPDF('P','mm',array(210,297)); //L For Landscape / P For Portrait
                $this->fpdf->AddPage();

                //Menambahkan Gambar
                //$pdf->Image('../foto/logo.png',10,10,-175);

                $this->fpdf->SetFont('Arial','B',13);
                $this->fpdf->Cell(70);
                $this->fpdf->Cell(30,10,'Laporan Data Rekam Medis',0,0,'C');

            }

            $this->fpdf->SetFont('Arial','B',10);
            $this->fpdf->SetFillColor(255, 255, 255);
            $this->fpdf->SetY(30);
            $this->fpdf->SetX(25);
            $this->fpdf->Cell(30,8,'No Rekam',1,0,'C',1);
            $this->fpdf->SetX(55);
            $this->fpdf->Cell(30,8,'NIP',1,0,'C',1);
            $this->fpdf->SetX(85);
            $this->fpdf->Cell(30,8,'Kode Dokter',1,0,'C',1);
            $this->fpdf->SetX(115);
            $this->fpdf->Cell(50,8,'Tanggal Pemeriksaan',1,0,'C',1);
            $this->fpdf->Ln();

            //Now show the columns
            $this->fpdf->SetFont('Arial','',10);

            $this->fpdf->SetY(38);
            $this->fpdf->SetX(25);
            $this->fpdf->MultiCell(30,7,$column_no_rm,1,'C');

            $this->fpdf->SetY(38);
            $this->fpdf->SetX(55);
            $this->fpdf->MultiCell(30,7,$column_nip,1,'C');

            $this->fpdf->SetY(38);
            $this->fpdf->SetX(85);
            $this->fpdf->MultiCell(30,7,$column_kodedokter,1,'C');

            $this->fpdf->SetY(38);
            $this->fpdf->SetX(115);
            $this->fpdf->MultiCell(50,7,$column_tglpemeriksaan,1,'C');

            echo $this->fpdf->Output();
            
        }

        
}
?>