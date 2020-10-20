<?php

class Kategori_surat extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        chek_session();
        $this->load->model('model_dashboard');
        $this->load->model('Model_kat_surat');
    }
    
    function index(){
        $username   = $this->session->userdata('username');
        $data['user']= $this->model_dashboard->get_profile($username)->row_array();
            
        $data['record']= $this->Model_kat_surat->lihat();
        $this->template->load('template','kategori_surat/lihat',$data);
    }
    
    function tambah(){
        
        if(isset($_POST['submit'])){
            $kode             = $this->input->post('kode');
            $nama             = $this->input->post('nama');
            $data             = array('kode'=>$kode,'nama'=>$nama);
            
            $this->Model_kat_surat->tambah($data);
            redirect('kategori_surat');
        } else {
            $username       = $this->session->userdata('username');
            $data['user']   = $this->model_dashboard->get_profile($username)->row_array();
            
            $this->template->load('template','kategori_surat/tambah',$data);
        }
      
    }
    
    
    function edit(){
        
        if(isset($_POST['submit'])){
            $kode           = $this->input->post('kode');
            $nama           = $this->input->post('nama');
            $data           = array('kode'=>$kode,'nama'=>$nama);

            $this->Model_kat_surat->edit($data,$kode);
            redirect('kategori_surat');
        } else {
            $username   = $this->session->userdata('username');
            $data['user']= $this->model_dashboard->get_profile($username)->row_array();
            
            $id = $this->uri->segment(3);
            $data['record']     =  $this->Model_kat_surat->get_one($id)->row_array();
            $this->template->load('template','kategori_surat/edit',$data,$id);
        }
      
    }
    
    function hapus(){
       $id= $this->uri->segment(3);
        $this->Model_kat_surat->hapus($id);
        redirect(kategori_surat);
    }
    
 
    
}