<?php

class Surat_keluar extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        chek_session();
        $this->load->model('model_dashboard');
        $this->load->model('Model_surat_keluar');
    }
    
    function index(){
        $username   = $this->session->userdata('username');
        $data['user']= $this->model_dashboard->get_profile($username)->row_array();
        $user = $this->model_dashboard->get_profile($username)->row_array();
        
        
        if($user['role'] == 's'):
        $data['record']= $this->Model_surat_keluar->lihat();
        $this->template->load('template','surat_keluar/lihat',$data);
        
        else:

        // $data['record']= $this->Model_surat_keluar($username)->lihat2();
        $Model_surat_keluar = new Model_surat_keluar($username);
        $data['record'] = $Model_surat_keluar->lihat2();
        $this->template->load('template','surat_keluar/lihat',$data);
        
        endif;
        
    }
    
    
    
    function tambah(){
        if(isset($_POST['submit']))
        {
            $config['upload_path'] = './assets/images/surat_keluar/';
            $config['allowed_types'] = 'gif|jpg|png|JPG';
            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');
            $hasil=$this->upload->data();
            
            
            
            
            $nomer_surat           =   $this->input->post('nomer_surat');
            $id_kat_surat          =   $this->input->post('id_kat_surat');
            $tgl_keluar            =   $this->input->post('tgl_keluar');
            $alamat_penerima       =   $this->input->post('alamat_penerima');
            $perihal               =   $this->input->post('perihal');
            $disposisi             =   $this->input->post('disposisi');
            $gambar = base_url().'assets/images/surat_keluar/'.$hasil['file_name'];
            $id_user               =   $this->input->post('id_user');
   
   
            $data       = array('nomer_surat'       =>$nomer_surat,
                                'id_kat_surat'      =>$id_kat_surat,
                                'tgl_keluar'        =>$tgl_keluar,
                                'alamat_penerima'   =>$alamat_penerima,
                                'perihal'           =>$perihal,
                                'disposisi'         =>$disposisi,
                                'foto'              =>$gambar,
                                'id_user'           =>$id_user);
                         
            $this->Model_surat_keluar->tambah($data);
            redirect('surat_keluar');
        }else
        {
            $username   = $this->session->userdata('username');
            $data['user']= $this->model_dashboard->get_profile($username)->row_array();
            
            $data['admin']= $this->Model_surat_keluar->user()->result();
            $data['kategori_surat']= $this->Model_surat_keluar->kategori_surat()->result();
            $this->template->load('template','surat_keluar/tambah',$data);
        }
    }
    
    
    function edit(){
        if(isset($_POST['submit']))
        {
            
            if($_FILES['foto']['error'] == 0):
            $config = array(
                'upload_path' => './assets/images/surat_keluar/',
                'allowed_types' => 'gif|jpg|JPG|png',
                );
        $this->load->library('upload', $config);      
        $this->upload->do_upload('foto');
        $hasil = $this->upload->data();
        $gambar = base_url().'assets/images/surat_keluar/'.$hasil['file_name'];
        else:
            $gambar = $this->input->post('gambar');
        endif;
            
            
            $id                    =   $this->input->post('nomer_surat');
            $id_kat_surat          =   $this->input->post('id_kat_surat');
            $tgl_keluar            =   $this->input->post('tgl_keluar');
            $alamat_penerima       =   $this->input->post('alamat_penerima');
            $perihal               =   $this->input->post('perihal');
            $disposisi             =   $this->input->post('disposisi');
            $id_user               =   $this->input->post('id_user');
   
            $data       = array('nomer_surat'       =>$id,
                                'id_kat_surat'      =>$id_kat_surat,
                                'tgl_keluar'        =>$tgl_keluar,
                                'alamat_penerima'   =>$alamat_penerima,
                                'perihal'           =>$perihal,
                                'disposisi'         =>$disposisi,
                                'foto'              =>$gambar,
                                'id_user'           =>$id_user);
                         
            $this->Model_surat_keluar->edit($data,$id);
            redirect('surat_keluar');
        }else
        {
            $username   = $this->session->userdata('username');
            $data['user']= $this->model_dashboard->get_profile($username)->row_array();
            
            $id = $this->uri->segment(3);
            $data['record'] = $this->Model_surat_keluar->get_one($id)->row_array();
            $data['admin']= $this->Model_surat_keluar->user()->result();
            $data['kategori_surat']= $this->Model_surat_keluar->kategori_surat()->result();
            $this->template->load('template','surat_keluar/edit',$data,$id);
        }
    }
    
   
    function hapus(){
       $id= $this->uri->segment(3);
       $this->Model_surat_keluar->hapus($id);
        redirect(surat_keluar);
    }
    
    
    function cetak(){
        if(isset($_POST['submit']))
        {
            
            $tgl_awal              =   $this->input->post('tgl_awal');
            $tgl_akhir             =   $this->input->post('tgl_akhir');
            
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
            $pdf->Cell(45, 7, 'DISPOSISI', 1,1);
            // tampilkan dari database
            $pdf->SetFont('Arial','','L');
            
            $username   = $this->session->userdata('username');
        
            $data=  $this->Model_surat_keluar->cetak($tgl_awal,$tgl_akhir, $username);
            $no=1;
            $total=0;
            foreach ($data->result() as $r)
            {
                $pdf->Cell(10, 7, $no, 1,0);
                $pdf->Cell(30, 7, $r->nomer_surat, 1,0);
                $pdf->Cell(60, 7, $r->kategori, 1,0);
                $pdf->Cell(45, 7, $r->tgl_keluar, 1,0);
                $pdf->Cell(45, 7, $r->perihal, 1,1);
                $pdf->Cell(45, 7, $r->disposisi, 1,1);
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