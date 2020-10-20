<?php

class Model_laporan extends CI_Model {

    
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
    
    function cetak_masuk($bulan,$tahun,$username){
        $query="select s.*, k.nama as kategori
                from surat_masuk as s
                join kategori_surat as k
                on s.id_kat_surat=k.id_kat_surat
                join user as u
                on s.id_user=u.id_user
                where u.username = '$username' and s.tgl_masuk between '$tahun-$bulan-01' and '$tahun-$bulan-31'";
        return $this->db->query($query);
    }
    
    function cetak_keluar($bulan,$tahun,$username){
        $query="select s.*, k.nama as kategori
                from surat_keluar as s
                join kategori_surat as k
                on s.id_kat_surat=k.id_kat_surat
                join user as u
                on s.id_user=u.id_user
                where u.username = '$username' and s.tgl_keluar between '$tahun-$bulan-01' and '$tahun-$bulan-31'";
        return $this->db->query($query);
    }
    
    function cetak_masuk_admin($bulan,$tahun){
        $query="select s.*, k.nama as kategori
                from surat_masuk as s
                join kategori_surat as k
                on s.id_kat_surat=k.id_kat_surat
                join user as u
                on s.id_user=u.id_user
                where s.tgl_masuk between '$tahun-$bulan-01' and '$tahun-$bulan-31'";
        return $this->db->query($query);
    }
    
    function cetak_keluar_admin($bulan,$tahun){
        $query="select s.*, k.nama as kategori
                from surat_keluar as s
                join kategori_surat as k
                on s.id_kat_surat=k.id_kat_surat
                join user as u
                on s.id_user=u.id_user
                where s.tgl_keluar between '$tahun-$bulan-01' and '$tahun-$bulan-31'";
        return $this->db->query($query);
    }


}