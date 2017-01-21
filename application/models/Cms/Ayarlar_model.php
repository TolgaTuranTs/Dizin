<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 17.01.2017
 * Time: 12:50
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit ('Bu Sayfaya Giriş İzniniz Bulunmamaktadır');

Class Ayarlar_model extends CI_Model{

    /**
     * Veritabanı Sınıfını Yükleme
     */
    function __construct(){
        $this->load->database();
    }

    /**
     * @return Site ayarlarını Bulma fonksiyonu
     */
    public function bul(){
        $this->db->select('*');
        $this->db->from('site_ayarlari');
        $this->db->where('site_id',1);
        $data = $this->db->get();
        if($data){
            return $data->row();
        }else{
            return FALSE;
        }
    }

    /**
     * @param $data Formdan Gelen bilgiler
     * @return Site Ayarlarını Güncelleme
     */
    public function duzenle($data){
        $this->db->where('site_id',1);
        $duzenle = $this->db->update('site_ayarlari',$data);
        if($duzenle){
            return TRUE;
        }else
            return FALSE;
    }

    /**
     * Anasayfada Listelenmesi İçin Onaysız Dizinler
     */
    public function onaysiz_siteler(){
        $this->db->where('dizin_durum',0);
        $this->db->select('*');
        $this->db->from('dizinler');
        $data = $this->db->get()->result_array();
        if($data){
            return $data;
        }else{
            return FALSE;
        }
    }
}


?>