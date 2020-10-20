<?php

class Model_surat_masuk extends CI_Model {

    function lihat(){
        $query="select s.*, k.nama as kategori, u.nama as user
                from surat_masuk as s
                join kategori_surat as k
                on s.id_kat_surat=k.id_kat_surat
                join user as u
                on s.id_user=u.id_user";
        return $this->db->query($query);
    }
    
    function lihat2($username){
        $query="select s.*, k.nama as kategori, u.nama as user, u.id_user 
                from surat_masuk as s
                join kategori_surat as k
                on s.id_kat_surat=k.id_kat_surat
                join user as u
                on s.id_user=u.id_user
                where u.username = '$username'";
        return $this->db->query($query);
    }
    
    function cetak($tgl_awal,$tgl_akhir,$username){
        $query="select s.*, k.nama as kategori
                from surat_masuk as s
                join kategori_surat as k
                on s.id_kat_surat=k.id_kat_surat
                join user as u
                on s.id_user=u.id_user
                where u.username = '$username' and s.tgl_masuk between '$tgl_awal' and '$tgl_akhir' ";
        return $this->db->query($query);
    }
    
    function kategori_surat(){
        $query="select * from kategori_surat";
        return $this->db->query($query);
    }
    
    function user(){
        $query="select * from user";
        return $this->db->query($query);
    }
    
    function tambah($data){
        $this->db->insert('surat_masuk',$data);
    }
    
    function get_one($id){
        $param = array('id'=>$id);
        return $this->db->get_where('surat_masuk',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('nomer_surat',$id);
        $this->db->update('surat_masuk',$data);
    }
    

    
    function hapus($id){
        $this->db->where('id',$id);
        $this->db->delete('surat_masuk');
        
    }


}