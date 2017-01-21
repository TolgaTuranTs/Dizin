<?php
/**
 * Kategori Model Dosyası
 * User: Tolga TURAN
 * Date: 17.01.2017
 * Time: 14:55
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Buraya Giriş İzniniz Bulunmamaktadır');

Class Kategori_model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    /**
     * @return Kategorileri Listeleme
     */
    public function listele(){
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
     * @param $id => Gelen Kategori İD
     * @return Gelen Kategori İd Ait Bilgileri Bulma
     */
    public function bul($id){
        $this->db->select('*');
        $this->db->from('kategoriler');
        $this->db->where('kategori_id',$id);
        $data = $this->db->get()->row();
        if($data){
            return $data;
        }else{
            redirect('Cms/Kategori');
        }
    }

    /**
     * @param $data => Düzenlenecek Veriler - Array
     * @param $id => Düzenlenecek Veri
     * Kategori Düzenleme İşlemi
     */
    public function guncelle($data,$id){
        $this->db->where('kategori_id',$id);
        $guncelle = $this->db->update('kategoriler',$data);
        if($guncelle){
            return TRUE;
        }else
            return FALSE;
    }

    /**
     * @param $data => Formdan gelen bilgiler
     * Kategori Ekleme İşlemleri
     */
    public function ekle($data){
        $ekle = $this->db->insert('kategoriler',$data);
        if($ekle){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    /**
     * @param $id => Gelen Kategori İD
     * @return Kategori Silme İşlemi
     */
    public function sil($id){
        $this->db->where('kategori_id',$id);
        $sil = $this->db->delete('kategoriler');
        if($sil){
            return TRUE;
        }else{
            return FALSE;
        }
    }

}

?>