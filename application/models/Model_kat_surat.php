<?php

class Model_kat_surat extends CI_Model {

    function lihat(){
        $query="select * from kategori_surat";
        return $this->db->query($query);
    }
    
    function tambah($data){
        $this->db->insert('kategori_surat',$data);
    }
    
    function get_one($id){
        $param = array('id_kat_surat'=>$id);
        return $this->db->get_where('kategori_surat',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('id_kat_surat',$id);
        $this->db->update('kategori_surat',$data);
    }
    
    function hapus($id){
        $this->db->where('id_kat_surat',$id);
        $this->db->delete('kategori_surat');
        
    }
    

}