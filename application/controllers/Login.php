<?php

class Login extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('model_login');
    }
    
    
            
    function index(){
        $this->load->view('login/login');
    }
    
    function login(){
        if(isset($_POST['submit'])){
            $username   =   $this->input->post('username');
            $password   =   $this->input->post('password');
            $hasil      =   $this->model_login->login($username,$password);


            if($hasil==1){
                    $this->db->where('username',$username);
                    $this->session->set_userdata(array('status_login'=>'oke','username'=>$username));
                    redirect('dashboard');
            }
            else {
                
                echo "<script>alert('username salah, I Love You :* :*');
                window.location='".base_url()."/login/login'
                </script>";
                
            }
        }
        else{
            chek_session_login();
            $this->load->view('login/login');
        }
    }
    
    function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
    
    
    
} 

