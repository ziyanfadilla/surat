<?php

class Model_dashboard extends CI_Model{


    function get_profile($username)
    {
        $query  ="SELECT * from user where username='$username'";
        return $this->db->query($query);
    }
    
    function get_masuk()
    {
        $query  ="SELECT * from surat_masuk";
        return $this->db->query($query);
    }
    
    function get_keluar()
    {
        $query  ="SELECT * from surat_keluar";
        return $this->db->query($query);
    }
    
    function get_agenda()
    {
        $query  ="SELECT * from agenda";
        return $this->db->query($query);
    }
    
    function get_karyawan()
    {
        $query  ="SELECT * from karyawan";
        return $this->db->query($query);
    }
    
       
}