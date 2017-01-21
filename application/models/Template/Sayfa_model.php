<?php
/**
 * Sayfa İçerik Veritabanı İşlemleri
 * User: Tolga TURAN
 * Date: 18.01.2017
 * Time: 14:37
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Buraya Giriş İzniniz Bulunmamaktadır');

Class Sayfa_model extends CI_Model{

    function __construct(){
        parent::__construct();
        // Database Yükle
        $this->load->database();
    }


    /**
     * @param $sef => Gelen Dizin Sayfa Sef
     * Sayfaya Ait Dizinleri Listeleme İşlemleri
     */
    public function oku($sayfa_sef){
        $this->db->select('*');
        $this->db->from('sayfalar');
        $this->db->where('sayfa_seflink',$sayfa_sef);
        $data = $this->db->get()->row();
        if($data){
            return $data;
        }else{
            return FALSE;
        }
    }

    /**
     * @param $kategori_sef => Gelen Kategori
     * Böyle Sayfa Var mı Yokmu Kontrolü
     */
    public function kontrol($sayfa_sef){
        $this->db->select('*');
        $this->db->from('sayfalar');
        $this->db->where('sayfa_seflink',$sayfa_sef);
        $kontrol = $this->db->get()->row();
        if($kontrol){
            return $kontrol;
        }else{
            return $kontrol;
        }
    }


}




?>