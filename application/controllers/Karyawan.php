<?php

class karyawan extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        chek_session();
        $this->load->model('model_dashboard');
        $this->load->model('Model_karyawan');
    }
    
    function index(){
        $username   = $this->session->userdata('username');
        $data['user']= $this->model_dashboard->get_profile($username)->row_array();
        
        $data['record']= $this->Model_karyawan->lihat();
        $this->template->load('template','karyawan/lihat',$data);
    }
    
    function tambah(){
        
        if(isset($_POST['submit'])){
            $nip  = $this->input->post('nip');
            $nama  = $this->input->post('nama');
            $jabatan  = $this->input->post('jabatan');
            $unit  = $this->input->post('unit');
            $golongan  = $this->input->post('golongan');
            $data   = array('nip'=>$nip,
                            'nama'=>$nama,
                            'jabatan'=>$jabatan,
                            'unit'=>$unit,
                            'golongan'=>$golongan,);
            
            $this->Model_karyawan->tambah($data,$id);
            redirect('karyawan');
        } else {
            $username   = $this->session->userdata('username');
            $data['user']= $this->model_dashboard->get_profile($username)->row_array();
        
            $this->template->load('template','karyawan/tambah',$data);
        }
      
    }
    
    
    function edit(){
        
        if(isset($_POST['submit'])){
            $id         = $this->input->post('id');
            $nama       = $this->input->post('nama');
            $jabatan    = $this->input->post('jabatan');
            $unit       = $this->input->post('unit');
            $golongan   = $this->input->post('golongan');
            $data       = array('nip'=>$id,
                            'nama'=>$nama,
                            'jabatan'=>$jabatan,
                            'unit'=>$unit,
                            'golongan'=>$golongan,);

            $this->Model_karyawan->edit($data,$id);
            redirect('karyawan');
        } else {
            $username   = $this->session->userdata('username');
            $data['user']= $this->model_dashboard->get_profile($username)->row_array();
        
            $id = $this->uri->segment(3);
            $data['record']     =  $this->Model_karyawan->get_one($id)->row_array();
            $this->template->load('template','karyawan/edit',$data);
        }
      
    }
    
    function hapus(){
       $id= $this->uri->segment(3);
        $this->Model_karyawan->hapus($id);
        redirect(karyawan);
    }
    
    function cetak(){
        
        $this->load->library('cfpdf');
        $pdf=new FPDF('P','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B','L');
        $pdf->Image(base_url().'assets/images/warureja.png');
        $pdf->Ln();
//        $pdf->SetFontSize(14);
//        $pdf->Text(80, 10, 'DAFTAR KARYAWAN');
        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(10);
        $pdf->Cell(10, 10,'','',1);
        $pdf->Cell(10, 12, 'NO', 1,0);
        $pdf->Cell(50, 12, 'NIP', 1,0);
        $pdf->Cell(60, 12, 'NAMA', 1,0);
        $pdf->Cell(45, 12, 'JABATAN', 1,0);
        $pdf->Cell(30, 12, 'UNIT', 1,1);
    //    $pdf->Cell(45, 7, 'GOLONGAN', 1,1);
        // tampilkan dari database
        $pdf->SetFont('Arial','','L');
        $data=  $this->Model_karyawan->lihat();
        $no=1;
        $total=0;
        foreach ($data->result() as $r)
        {
            $pdf->Cell(10, 12, $no, 1,0);
            $pdf->Cell(50, 12, $r->nip, 1,0);
            $pdf->Cell(60, 12, $r->nama, 1,0);
            $pdf->Cell(45, 12, $r->jabatan, 1,0);
            $pdf->Cell(30, 12, $r->unit, 1,1);
      //      $pdf->Cell(45, 7, $r->golongan, 1,1);
            $no++;
            //$total=$total+$r->total;
        }
        // end
//        $pdf->Cell(67,7,'Total',1,0,'R');
//        $pdf->Cell(38,7,$total,1,0);
        $pdf->Output();
    }
    
 
    
}