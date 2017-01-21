<?php
/**
 * Dizin İçerik Veritabanı İşlemleri
 * User: Tolga TURAN
 * Date: 18.01.2017
 * Time: 14:37
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Buraya Giriş İzniniz Bulunmamaktadır');

Class Dizin_model extends CI_Model{

    function __construct(){
        parent::__construct();
        // Database Yükle
        $this->load->database();
    }

    /**
     * @param $eklenecekler => Gelen Bilgiler
     * Dizine Site Ekleme İşlemleri
     */
    public function ekle($eklenecekler){
        $site_ekle = $this->db->insert('dizinler',$eklenecekler);
        if($site_ekle){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    /**
     * Site Eklenirken Listelencek Dizin Kategoriler
     */
    public function ekle_kategoriler(){
        $this->db->select('*');
        $this->db->from('kategoriler');
        $data = $this->db->get()->result_array();
        if($data){
            return $data;
        }else{
            return FALSE;
        }
    }

    /**
     * @param $sef => Gelen Dizin Kategori Sef
     * Kategoriye Ait Dizinleri Listeleme İşlemleri
     */
    public function oku($kategori_sef){
        $this->db->select('*');
        $this->db->from('dizinler');
        $this->db->where('dizin_kategori',$kategori_sef);
        $this->db->where('dizin_durum',1);
        $this->db->order_by('dizin_id','DESC');
        $data = $this->db->get()->result_array();
        if($data){
            return $data;
        }else{
            return FALSE;
        }
    }

    /**
     * @param $kategori_sef => Gelen Kategori
     * Böyle Kategori Var mı Yokmu Kontrolü
     */
    public function kontrol($kategori_sef){
        $this->db->select('*');
        $this->db->from('kategoriler');
        $this->db->where('kategori_seflink',$kategori_sef);
        $kontrol = $this->db->get()->row();
        if($kontrol){
            return $kontrol;
        }else{
            return $kontrol;
        }
    }


}




?>