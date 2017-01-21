<?php
/**
 * Dizin İle İlgili Veritabanı İşlemleri
 * User: Tolga TURAN
 * Date: 18.01.2017
 * Time: 16:27
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Buraya Giriş İzniniz Bulunmamaktadır');

Class Dizin_model extends CI_Model{

    function __construct(){
        parent::__construct();
        // DB yükle
        $this->load->database();
    }

    /**
     * Eklenen Dizinleri Listeleme
     */
    public function listele(){
        $this->db->select('*');
        $this->db->from('dizinler');
        $this->db->order_by('dizin_id','DESC');
        $data = $this->db->get()->result_array();
        if($data){
            return $data;
        }else{
            return FALSE;
        }
    }

    /**
     * @param $id => Gelen Dizin
     * Gelen Dizine Ait Bilgiler
     */
    public function detay($id){
        $this->db->select('*');
        $this->db->from('dizinler');
        $this->db->where('dizin_id',$id);
        $data = $this->db->get()->row();
        if($data){
            return $data;
        }else{
            redirect(site_url('Cms/Dizin'));
        }
    }

    /**
     * Kategorileri Listeletme
     */
    public function kategoriler(){
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
     * @param $bilgiler => Düzenlenecek Bilgiler Arrayı
     * @param $id => Düzenlenecek Dizin İD
     */
    public function duzenle($bilgiler,$id){
        $this->db->where('dizin_id',$id);
        $duzenle = $this->db->update('dizinler',$bilgiler);
        if($duzenle){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    /**
     * @param $id => Gelen Dizin İD
     * Dizin Silme İşlemi
     */
    public function sil($id){
        $this->db->where('dizin_id',$id);
        $sil = $this->db->delete('dizinler');
        if($sil){
            return TRUE;
        }else{
            return FALSE;
        }
    }


}



?>