<?php

class Model_profil extends CI_Model{


    function get_profile($username)
    {
        $query  ="SELECT * from user where username='$username'";
        return $this->db->query($query);
    }
    
    
    function user($username)
    {
        $query="SELECT * from user
                where username='$username'";
        return $this->db->query($query);
    }

    
    
    
}