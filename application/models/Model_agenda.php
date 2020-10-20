<?php

class Model_agenda extends CI_Model {

    function lihat(){
        $query="select a.*, k.nama as kategori
                from agenda as a
                join kategori_agenda as k
                on a.id_kat_agenda=k.id_kat_agenda
                order by a.tgl_agenda desc";
        return $this->db->query($query);
    }
    
    function lihat2(){
        $query="select a.*, k.nama as kategori
                from agenda as a
                join kategori_agenda as k
                on a.id_kat_agenda=k.id_kat_agenda
                order by a.tgl_agenda desc";
        return $this->db->query($query);
    }
    
    function user(){
        $query="select * from user";
        return $this->db->query($query);
    }
    
    function kategori_agenda(){
        $query="select * from kategori_agenda";
        return $this->db->query($query);
    }
    
        
    function tambah($data){
        $this->db->insert('agenda',$data);
    }
    
    function get_one($id){
        $param = array('id'=>$id);
        return $this->db->get_where('agenda',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('id',$id);
        $this->db->update('agenda',$data);
    }
    
    function terlaksana($data,$id)
    {
        $this->db->where('id',$id);
        $this->db->update('agenda',$data);
    }
    
    function dibatalkan($data,$id)
    {
        $this->db->where('id',$id);
        $this->db->update('agenda',$data);
    }
    
    function hapus($id){
        $this->db->where('id',$id);
        $this->db->delete('agenda');
    }

    

}