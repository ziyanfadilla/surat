<?php

class Profil extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        chek_session();
        $this->load->model('model_dashboard');
        $this->load->model('model_profil');
        $this->load->model('Model_user');
    }
      
    function index(){
        $username   = $this->session->userdata('username');
        $data['user']= $this->model_dashboard->get_profile($username)->row_array();
        
        $data['profil']= $this->model_profil->user($username)->row_array();
        $this->template->load('template','profil/lihat_profile',$data);
    }

    
    function edit_profile(){
        if(isset($_POST['submit']))
        {
            
            
             if($_FILES['foto']['error'] == 0):
			$config = array(
				'upload_path' => './assets/images/profil/',
				'allowed_types' => 'gif|jpg|JPG|png|PNG',
				);
		$this->load->library('upload', $config);      
		$this->upload->do_upload('foto');
		$hasil = $this->upload->data();
                
		$gambar = base_url().'assets/images/profil/'.$hasil['file_name'];
		
                else:
			$gambar = $this->input->post('gambar');
		endif;
            
                
            
            
            $id             =    $this->input->post('id');
            $nama           =   $this->input->post('nama');
            $username       =   $this->input->post('username');
            $password       =   $this->input->post('password');
            
   
            $data       = array('nama'=>$nama,
                                'username'=>$username,
                                'password'=>md5($password),
                                'foto'=>$gambar);
            $this->Model_user->edit($data,$id);
            redirect('Profil');
        }else
        {
            $username   = $this->session->userdata('username');
            $data['user']= $this->model_dashboard->get_profile($username)->row_array();
            
            
            $id = $this->uri->segment(3);
            $data['record']     =  $this->Model_user->get_one($id)->row_array();
            $this->template->load('template','profil/edit',$data);
        }
    }
    
    
}
