<?php

class Surat_masuk extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        chek_session();
        $this->load->model('model_dashboard');
        $this->load->model('Model_surat_masuk');
    }
    
    function index(){
        $username   = $this->session->userdata('username');
        $data['user']= $this->model_dashboard->get_profile($username)->row_array();
        $user = $this->model_dashboard->get_profile($username)->row_array();
                
        
        if($user['role'] == 's'):
        $data['record']= $this->Model_surat_masuk->lihat();
        $this->template->load('template','surat_masuk/lihat',$data);
        
        else:
        $data['record']= $this->Model_surat_masuk->lihat2($username);
        $this->template->load('template','surat_masuk/lihat',$data);
        
        endif;
    }
    
    
    
    function tambah(){
        if(isset($_POST['submit']))
        {
            $config['upload_path'] = './assets/images/surat_masuk/';
            $config['allowed_types'] = 'gif|jpg|png|JPG';
            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');
            $hasil=$this->upload->data();
            
            
            
            
            $nomer_surat           =   $this->input->post('nomer_surat');
            $id_kat_surat          =   $this->input->post('id_kat_surat');
            $tgl_masuk             =   $this->input->post('tgl_masuk');
            $alamat_pengirim       =   $this->input->post('alamat_pengirim');
            $perihal               =   $this->input->post('perihal');
            $disposisi             =   $this->input->post('disposisi');
            $gambar = base_url().'assets/images/surat_masuk/'.$hasil['file_name'];
            $id_user               =   $this->input->post('id_user');
   
   
            $data       = array('nomer_surat'       =>$nomer_surat,
                                'id_kat_surat'      =>$id_kat_surat,
                                'tgl_masuk'         =>$tgl_masuk,
                                'alamat_pengirim'   =>$alamat_pengirim,
                                'perihal'           =>$perihal,
                                'disposisi'         =>$disposisi,
                                'foto'              =>$gambar,
                                'id_user'           =>$id_user);
                         
            $this->Model_surat_masuk->tambah($data);
            redirect('surat_masuk');
        }else
        {
            $username   = $this->session->userdata('username');
            $data['user']= $this->model_dashboard->get_profile($username)->row_array();
        
            
            $data['admin']= $this->Model_surat_masuk->user()->result();
            $data['kategori_surat']= $this->Model_surat_masuk->kategori_surat()->result();
            $this->template->load('template','surat_masuk/tambah',$data);
        }
    }
    
    
    function edit(){
        if(isset($_POST['submit']))
        {
            
            if($_FILES['foto']['error'] == 0):
            $config = array(
                'upload_path' => './assets/images/surat_masuk/',
                'allowed_types' => 'gif|jpg|JPG|png',
                );
        $this->load->library('upload', $config);      
        $this->upload->do_upload('foto');
        $hasil = $this->upload->data();
        $gambar = base_url().'assets/images/surat_masuk/'.$hasil['file_name'];
        else:
            $gambar = $this->input->post('gambar');
        endif;
            
            
            $id                    =   $this->input->post('nomer_surat');
            $id_kat_surat          =   $this->input->post('id_kat_surat');
            $tgl_masuk             =   $this->input->post('tgl_masuk');
            $alamat_pengirim       =   $this->input->post('alamat_pengirim');
            $perihal               =   $this->input->post('perihal');
            $disposisi             =   $this->input->post('disposisi');
            $id_user               =   $this->input->post('id_user');
   
   
            $data       = array('nomer_surat'       =>$id,
                                'id_kat_surat'      =>$id_kat_surat,
                                'tgl_masuk'         =>$tgl_masuk,
                                'alamat_pengirim'   =>$alamat_pengirim,
                                'perihal'           =>$perihal,
                                'disposisi'         =>$disposisi,
                                'foto'              =>$gambar,
                                'id_user'           =>$id_user);
                         
            $this->Model_surat_masuk->edit($data,$id);
            redirect('surat_masuk');
        }else
        {
            $username   = $this->session->userdata('username');
            $data['user']= $this->model_dashboard->get_profile($username)->row_array();
        
            
            $id = $this->uri->segment(3);
            $data['record'] = $this->Model_surat_masuk->get_one($id)->row_array();
            $data['admin']= $this->Model_surat_masuk->user()->result();
            $data['kategori_surat']= $this->Model_surat_masuk->kategori_surat()->result();
            $this->template->load('template','surat_masuk/edit',$data,$id);
        }
    }
    
   
    function hapus(){
       $id= $this->uri->segment(3);
       $this->Model_surat_masuk->hapus($id);
        redirect(surat_masuk);
    }
    
    
    
    function cetak(){
        if(isset($_POST['submit']))
        {
            
            $tgl_awal             =   $this->input->post('tgl_awal');
            $tgl_akhir             =   $this->input->post('tgl_akhir');
            
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
            $pdf->Cell(30, 7, 'No Surat', 1,0);
            $pdf->Cell(60, 7, 'Kategori', 1,0);
            $pdf->Cell(45, 7, 'Tanggal', 1,0);
            $pdf->Cell(45, 7, 'Perihal', 1,1);
         
            // tampilkan dari database
            $pdf->SetFont('Arial','','L');
            
            $username   = $this->session->userdata('username');
        
            $data=  $this->Model_surat_masuk->cetak($tgl_awal,$tgl_akhir,$username);
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