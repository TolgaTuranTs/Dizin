<?php
/**
 * Sayfa Model İşlemleri -> Veritabanı
 * User: Tolga TURAN
 * Date: 17.01.2017
 * Time: 21:34
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Buraya Giriş İzniniz Bulunamamaktadır');

Class Sayfa_model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    /**
     * @param $data => Eklenecek Veriler
     * Sayfa Ekleme İşlemleri
     */
    public function ekle($data){
        $sayfa_ekle = $this->db->insert('sayfalar',$data);
        if($sayfa_ekle){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    /**
     * Sayfa Listeleme İşlemleri
     */
    public function listele(){
        $this->db->select('*');
        $this->db->from('sayfalar');
        $listele = $this->db->get()->result_array();
        if($listele){
            return $listele;
        }else{
            return FALSE;
        }
    }

    /**
     * @param $id = Gelen Sayfa İD
     * @return Sayfa Bulma İşlemleri
     */
    public function bul($id){
        $this->db->select('*');
        $this->db->from('sayfalar');
        $this->db->where('sayfa_id',$id);
        $bul = $this->db->get();
        if($bul){
            return $bul->row();
        }else{
            return FALSE;
        }
    }

    /**
     * @param $data => Düzenlenen Veriler
     * @param $id => Düzenlenecek Sayfa
     * @return Sayfa Düzenleme İşlem
     */
    public function guncelle($data,$id){
        $this->db->where('sayfa_id',$id);
        $guncelle = $this->db->update('sayfalar',$data);
        if($guncelle){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function sil($id){
        $this->db->where('sayfa_id',$id);
        $sayfa_sil = $this->db->delete('sayfalar');
        if($sayfa_sil){
            return TRUE;
        }else{
            return FALSE;
        }
    }

}

?>