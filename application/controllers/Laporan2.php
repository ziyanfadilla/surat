<?php

class Laporan extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        chek_session();
        $this->load->model('model_dashboard');
        $this->load->model('Model_laporan');
    }
    
    function index(){
        $username   = $this->session->userdata('username');
        $data['user']= $this->model_dashboard->get_profile($username)->row_array();
        $user = $this->model_dashboard->get_profile($username)->row_array();
        
        
        $this->template->load('template','Laporan/lihat',$data);
        

        
    }
    
    
    
    function cetak_keluar(){
        if(isset($_POST['submit']))
        {
            
            $bulan              =   $this->input->post('bulan');
            $tahun              =   $this->input->post('tahun');
            
            $this->load->library('cfpdf');
            $pdf=new FPDF('P','mm','A4');
            $pdf->AddPage();
            $pdf->SetFont('Arial','B','L');
            $pdf->SetFontSize(14);
            $pdf->Text(80, 10, 'DAFTAR SURAT KELUAR');
            $pdf->SetFont('Arial','B','L');
            $pdf->SetFontSize(10);
            $pdf->Cell(10, 10,'','',1);
            $pdf->Cell(10, 7, 'NO', 1,0);
            $pdf->Cell(30, 7, 'NOMOR SURAT', 1,0);
            $pdf->Cell(60, 7, 'KATEGORI', 1,0);
            $pdf->Cell(45, 7, 'TANGGAL', 1,0);
            $pdf->Cell(45, 7, 'PERIHAL', 1,1);
            // tampilkan dari database
            $pdf->SetFont('Arial','','L');
            
            $username   = $this->session->userdata('username');
            $data['user']= $this->model_dashboard->get_profile($username)->row_array();
            $user = $this->model_dashboard->get_profile($username)->row_array();
        
            if($user['role'] == 's'):
                $data=  $this->Model_laporan->cetak_keluar_admin($bulan,$tahun);
            else:        
                $data=  $this->Model_laporan->cetak_keluar($bulan,$tahun, $username);
            endif;
            
            $no=1;
            $total=0;
            foreach ($data->result() as $r)
            {
                $pdf->Cell(10, 7, $no, 1,0);
                $pdf->Cell(30, 7, $r->nomer_surat, 1,0);
                $pdf->Cell(60, 7, $r->kategori, 1,0);
                $pdf->Cell(45, 7, $r->tgl_keluar, 1,0);
                $pdf->Cell(45, 7, $r->perihal, 1,1);
                $no++;
                //$total=$total+$r->total;
            }
            // end
    //        $pdf->Cell(67,7,'Total',1,0,'R');
    //        $pdf->Cell(38,7,$total,1,0);
            $pdf->Output();
            }
    }
    
    
    function cetak_masuk(){
        if(isset($_POST['submit']))
        {
            
            $bulan              =   $this->input->post('bulan');
            $tahun              =   $this->input->post('tahun');
            
            $this->load->library('cfpdf');
            $pdf=new FPDF('P','mm','A4');
            $pdf->AddPage();
            $pdf->SetFont('Arial','B','L');
            $pdf->SetFontSize(14);
            $pdf->Text(80, 10, 'DAFTAR SURAT MASUK');
            $pdf->SetFont('Arial','B','L');
            $pdf->SetFontSize(10);
            $pdf->Cell(10, 10,'','',1);
            $pdf->Cell(10, 7, 'NO', 1,0);
            $pdf->Cell(30, 7, 'NOMOR SURAT', 1,0);
            $pdf->Cell(60, 7, 'KATEGORI', 1,0);
            $pdf->Cell(45, 7, 'TANGGAL', 1,0);
            $pdf->Cell(45, 7, 'PERIHAL', 1,1);
            // tampilkan dari database
            $pdf->SetFont('Arial','','L');
            
            $username   = $this->session->userdata('username');
            $data['user']= $this->model_dashboard->get_profile($username)->row_array();
            $user = $this->model_dashboard->get_profile($username)->row_array();
        
            if($user['role'] == 's'):
                $data=  $this->Model_laporan->cetak_masuk_admin($bulan,$tahun);
            else:        
                $data=  $this->Model_laporan->cetak_masuk($bulan,$tahun, $username);
            endif;
            
            $no=1;
            $total=0;
            foreach ($data->result() as $r)
            {
                $pdf->Cell(10, 7, $no, 1,0);
                $pdf->Cell(30, 7, $r->nomer_surat, 1,0);
                $pdf->Cell(60, 7, $r->kategori, 1,0);
                $pdf->Cell(45, 7, $r->tgl_masuk, 1,0);
                $pdf->Cell(45, 7, $r->perihal, 1,1);
                $no++;
                //$total=$total+$r->total;
            }
            // end
    //        $pdf->Cell(67,7,'Total',1,0,'R');
    //        $pdf->Cell(38,7,$total,1,0);
            $pdf->Output();
            }
    }
    
    
}