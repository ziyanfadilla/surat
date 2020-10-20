<?php

class Agenda extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        chek_session();
        $this->load->model('model_dashboard');
        $this->load->model('Model_agenda');
    }
    
    function index(){
        $username   = $this->session->userdata('username');
        $data['user']= $this->model_dashboard->get_profile($username)->row_array();
        $user = $this->model_dashboard->get_profile($username)->row_array();
        
        if($user['role'] == 's'):
            $data['record']= $this->Model_agenda->lihat();
            $this->template->load('template','agenda/lihat',$data);
        else:
            $data['record']= $this->Model_agenda->lihat2();
            $this->template->load('template','agenda/lihat',$data);
        endif;
    }
    
    
    
    function tambah(){
        if(isset($_POST['submit']))
        {
            
            
            $agenda           =   $this->input->post('agenda');
            $id_kat_agenda    =   $this->input->post('id_kat_agenda');
            $tgl_agenda       =   $this->input->post('tgl_agenda');
            $nama             =   $this->input->post('nama');
            $alamat           =   $this->input->post('alamat');
            $status           =   'Belum';
            
   
            $data       = array('agenda'        =>$agenda,
                                'id_kat_agenda' =>$id_kat_agenda,
                                'tgl_agenda'    =>$tgl_agenda,
                                'nama'          =>$nama,
                                'status'          =>$status,
                                'alamat'        =>$alamat);
                         
            $this->Model_agenda->tambah($data);
            redirect('agenda');
        }else
        {
            $username   = $this->session->userdata('username');
            $data['user']= $this->model_dashboard->get_profile($username)->row_array();
            
            $data['kategori_agenda']= $this->Model_agenda->kategori_agenda()->result();
            $this->template->load('template','agenda/tambah',$data);
        }
    }
    
    
    function edit(){
        if(isset($_POST['submit']))
        {
            $id              =   $this->input->post('id');
            $agenda          =   $this->input->post('agenda');
            $id_kat_agenda   =   $this->input->post('id_kat_agenda');
            $tgl_agenda      =   $this->input->post('tgl_agenda');
            $nama            =   $this->input->post('nama');
            $alamat          =   $this->input->post('alamat');
            $status            =   $this->input->post('status');
   
            $data       = array('agenda'        =>$agenda,
                                'id_kat_agenda' =>$id_kat_agenda,
                                'tgl_agenda'    =>$tgl_agenda,
                                'nama'          =>$nama,
                                'alamat'        =>$alamat,
                                'status'        =>$status);
                         
            $this->Model_agenda->edit($data,$id);
            redirect('agenda');
        }else
        {
            $username   = $this->session->userdata('username');
            $data['user']= $this->model_dashboard->get_profile($username)->row_array();
            
            $id = $this->uri->segment(3);
            $data['record'] = $this->Model_agenda->get_one($id)->row_array();
            $data['kategori_agenda']= $this->Model_agenda->kategori_agenda()->result();
            $this->template->load('template','agenda/edit',$data,$id);
        }
    }
    
    function terlaksana(){
        
            $id                = $this->uri->segment(3);
            $status            =   "Terlaksana";
   
            $data       = array('status'=>$status);
                         
            $this->Model_agenda->terlaksana($data,$id);
            redirect('agenda');
        
    }
    
    function dibatalkan(){
        
            $id                = $this->uri->segment(3);
            $status            =   "Dibatalkan";
   
            $data       = array('status'=>$status);
                         
            $this->Model_agenda->dibatalkan($data,$id);
            redirect('agenda');
        
    }
    
   
    function hapus(){
       $id= $this->uri->segment(3);
       $this->Model_agenda->hapus($id);
        redirect(agenda);
    }
    
    
       
}