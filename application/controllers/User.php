<?php

class User extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        chek_session();
        $this->load->model('model_dashboard');
        $this->load->model('Model_user');
    }
    
    function index(){
        $username   = $this->session->userdata('username');
        $data['user']= $this->model_dashboard->get_profile($username)->row_array();
            
        $data['record']= $this->Model_user->lihat();
        $this->template->load('template','user/lihat',$data);
    }
    
    function tambah(){
        
        if(isset($_POST['submit'])){
            $username  = $this->input->post('username');
            $nama  = $this->input->post('nama');
            $password  = $this->input->post('password');
            $role  = $this->input->post('role');
            $gambar = base_url().'assets/images/profil/default.png';
            $data   = array('username'=>$username,
                            'nama'=>$nama,
                            'password'=>md5($password),
                            'role'=>$role,
                            'foto'=>$gambar);
            
            $this->Model_user->tambah($data,$id);
            redirect('user');
        } else {
            $username   = $this->session->userdata('username');
            $data['user']= $this->model_dashboard->get_profile($username)->row_array();
            
            $this->template->load('template','user/tambah',$data);
        }
      
    }
    
    
    function edit(){
        
        if(isset($_POST['submit'])){
            $id  = $this->input->post('id');
            $username  = $this->input->post('username');
            $nama  = $this->input->post('nama');
            $password  = $this->input->post('password');
            $role  = $this->input->post('role');
            $data   = array('username'=>$username,
                            'nama'=>$nama,
                            'password'=>md5($password),
                            'role'=>$role);

            $this->Model_user->edit($data,$id);
            redirect('user');
        } else {
            $username   = $this->session->userdata('username');
            $data['user']= $this->model_dashboard->get_profile($username)->row_array();
            
            
            $id = $this->uri->segment(3);
            $data['record']     =  $this->Model_user->get_one($id)->row_array();
            $this->template->load('template','user/edit',$data);
        }
      
    }
    
    function hapus(){
       $id= $this->uri->segment(3);
        $this->Model_user->hapus($id);
        redirect(user);
    }
    
 
    
}