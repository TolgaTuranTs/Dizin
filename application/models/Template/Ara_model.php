<?php
/**
 * Dizin İçerik Arama Veritabanı İşlemleri
 * User: Tolga TURAN
 * Date: 18.01.2017
 * Time: 14:37
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Buraya Giriş İzniniz Bulunmamaktadır');

Class ara_model extends CI_Model{

    function __construct(){
        parent::__construct();
        // Database Yükle
        $this->load->database();
    }

    /**
     * @param $earch => Gelen Arama
     * Arama İşlemi
     */
    public function bul($search){
        $this->db->select('*');
        $this->db->from('dizinler');
        $this->db->like('dizin_baslik',$search);
        $this->db->or_like('dizin_url',$search);
        $this->db->or_like('dizin_aciklama',$search);
        $this->db->or_like('dizin_etiket',$search);
        $this->db->where('dizin_durum',1);
        $data = $this->db->get()->result_array();
        if($data){
            return $data;
        }else{
            return FALSE;
        }
    }

}

?>