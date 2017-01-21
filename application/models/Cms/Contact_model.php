<?php
/**
 * İletişim Sayfa Veritabanı İşlemleri
 * User: Tolga TURAN
 * Date: 19.01.2017
 * Time: 13:40
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır');

Class Contact_model extends CI_Model{

    function __construct(){
        parent::__construct();
        // DB Yükle
        $this->load->database();
    }

    /**
     * İletişim Listeleme
     */
    public function listele(){
        $this->db->select('*');
        $this->db->from('iletisim');
        $this->db->order_by('iletisim_id','DESC');
        $data = $this->db->get()->result_array();
        if($data){
            return $data;
        }else{
            return FALSE;
        }
    }

    /**
     * @param $id -> Gelen İD
     * İletişim Mesajı Silme İşlemi
     */
    public function sil($id){
        $this->db->where('iletisim_id',$id);
        $sil = $this->db->delete('iletisim');
        if($sil){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    /**
     * @param $id -> Gelen İletişim
     * Gelen İletişim Mesajını Okuma
     */
    public function oku($id){
        $this->db->select('*');
        $this->db->from('iletisim');
        $this->db->where('iletisim_id',$id);
        $oku = $this->db->get();
        if($oku){
            return $oku->row();
        }else{
            return FALSE;
        }
    }
}

?>