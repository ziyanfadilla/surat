<?php

class Model_kat_agenda extends CI_Model {

    function lihat(){
        $query="select * from kategori_agenda";
        return $this->db->query($query);
    }
    
    function tambah($data){
        $this->db->insert('kategori_agenda',$data);
    }
    
    function get_one($id){
        $param = array('id_kat_agenda'=>$id);
        return $this->db->get_where('kategori_agenda',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('id_kat_agenda',$id);
        $this->db->update('kategori_agenda',$data);
    }
    
    function hapus($id){
        $this->db->where('id_kat_agenda',$id);
        $this->db->delete('kategori_agenda');
        
    }
    

}