<?php

class Kategori_agenda extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        chek_session();
        $this->load->model('model_dashboard');
        $this->load->model('Model_kat_agenda');
    }
    
    function index(){
        $username   = $this->session->userdata('username');
        $data['user']= $this->model_dashboard->get_profile($username)->row_array();
            
        $data['record']= $this->Model_kat_agenda->lihat();
        $this->template->load('template','kategori_agenda/lihat',$data);
    }
    
    function tambah(){
        
        if(isset($_POST['submit'])){
            $id     = $this->input->post('id');
            $nama   = $this->input->post('nama');
            $data   = array('id'=>$id, 'nama'=>$nama);
            
            $this->Model_kat_agenda->tambah($data);
            redirect('kategori_agenda');
        } else {
            $username   = $this->session->userdata('username');
            $data['user']= $this->model_dashboard->get_profile($username)->row_array();
                        
            $this->template->load('template','kategori_agenda/tambah',$data);
        }
      
    }
    
    
    function edit(){
        
        if(isset($_POST['submit'])){
            $id     =   $this->input->post('id');
            $nama   =   $this->input->post('nama');
            $data   =   array('id'=>$id,'nama'=>$nama);

            $this->Model_kat_agenda->edit($data,$id);
            redirect('kategori_agenda');
        } else {
            $username   = $this->session->userdata('username');
            $data['user']= $this->model_dashboard->get_profile($username)->row_array();
            
            $id = $this->uri->segment(3);
            $data['record']     =  $this->Model_kat_agenda->get_one($id)->row_array();
            $this->template->load('template','kategori_agenda/edit',$data,$id);
        }
      
    }
    
    function hapus(){
       $id= $this->uri->segment(3);
        $this->Model_kat_agenda->hapus($id);
        redirect(kategori_agenda);
    }
    
 
    
}