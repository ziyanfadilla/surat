<?php

class Dashboard extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        chek_session();
        $this->load->model('model_dashboard');
        
    }
    
    function index(){
        $username   = $this->session->userdata('username');
       
        
        
        $data = array(
			'tot_surat_masuk' => $this->model_dashboard->get_masuk()->num_rows(),
                        'tot_surat_keluar' => $this->model_dashboard->get_keluar()->num_rows(),
                        'tot_agenda' => $this->model_dashboard->get_agenda()->num_rows(),
                        'tot_karyawan' => $this->model_dashboard->get_karyawan()->num_rows(),
                        'user' => $this->model_dashboard->get_profile($username)->row_array()
			//'tot_penyakit' => $this->model_dashboard->GetProductView()->num_rows(),
			//'nama' => $this->session->userdata('nama'),	
		);
        
        $this->template->load('template','dashboard/lihat',$data);
    }  

}