<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_login extends CI_Model{


    function login($username,$password)
    {
        $chek=  $this->db->get_where('user',array('username'=>$username,'password'=>  md5($password)));
        if($chek->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
    }

    
    function cek_username($username)
    {
        $chek=  $this->db->get_where('user',array('username'=>$username));
        if($chek->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
    }
    
}