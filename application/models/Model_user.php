<?php

class Model_user extends CI_Model {

    function lihat(){
        $query="select * from user order by role desc";
        return $this->db->query($query);
    }
    
    function tambah($data){
        $this->db->insert('user',$data);
    }
    
    function get_one($id){
        $param = array('id_user'=>$id);
        return $this->db->get_where('user',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('id_user',$id);
        $this->db->update('user',$data);
    }
    
    function hapus($id){
        $this->db->where('id_user',$id);
        $this->db->delete('user');
        
    }
    

}