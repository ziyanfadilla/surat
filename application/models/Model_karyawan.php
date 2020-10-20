<?php

class Model_karyawan extends CI_Model {

    function lihat(){
        $query="select * from karyawan order by nama";
        return $this->db->query($query);
    }
    
    function tambah($data){
        $this->db->insert('karyawan',$data);
    }
    
    function get_one($id){
        $param = array('nip'=>$id);
        return $this->db->get_where('karyawan',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('nip',$id);
        $this->db->update('karyawan',$data);
    }
    
    function hapus($id){
        $this->db->where('nip',$id);
        $this->db->delete('karyawan');
        
    }
    

}