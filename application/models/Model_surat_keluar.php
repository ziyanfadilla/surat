<?php

class Model_surat_keluar extends CI_Model {

    private $username;


    public function __construct($username = null){
        $this->set_username($username);
    }

    public function set_username($username){
        $this->username = $username;
    }

    function lihat(){
        $query="select s.*, k.nama as kategori, u.nama as user
                from surat_keluar as s
                join kategori_surat as k
                on s.id_kat_surat=k.id_kat_surat
                join user as u
                on s.id_user=u.id_user";
        return $this->db->query($query);
    }
    
    function lihat2(){
        $username = $this->username;
        $query="select s.*, k.nama as kategori, u.nama as user, u.id_user 
                from surat_keluar as s
                join kategori_surat as k
                on s.id_kat_surat=k.id_kat_surat
                join user as u
                on s.id_user=u.id_user
                where u.username = 'admin'";
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
        $this->db->insert('surat_keluar',$data);
    }
    
    function get_one($id){
        $param = array('id'=>$id);
        return $this->db->get_where('surat_keluar',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('nomer_surat',$id);
        $this->db->update('surat_keluar',$data);
    }
    

    
    function hapus($id){
        $this->db->where('id',$id);
        $this->db->delete('surat_keluar');
        
    }
    
    function cetak($tgl_awal,$tgl_akhir,$username){
        $query="select s.*, k.nama as kategori
                from surat_keluar as s
                join kategori_surat as k
                on s.id_kat_surat=k.id_kat_surat
                join user as u
                on s.id_user=u.id_user
                where u.username = '$username' and tgl_keluar between '$tgl_awal' and '$tgl_akhir'";
        return $this->db->query($query);
    }
    


}