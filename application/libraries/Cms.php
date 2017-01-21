<?php
/**
 * Admin Panel İle İlgili Genel Ayarlar -> Tüm Yerden Çekilebilir
 * User: Tolga TURAN
 * Date: 19.01.2017
 * Time: 14:30
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Buraya Giriş İzniniz Bulunmamaktadır');

Class cms {

    function __construct(){
        $ci = & get_instance();
        // DB Yükle
        $ci->load->database();
    }

    /**
     * @return bool Headerdaki İletişim Listesi
     */
    public function iletisim(){
        $ci = & get_instance();
        $ci->db->select('*');
        $ci->db->from('iletisim');
        $ci->db->order_by('iletisim_id','DESC');
        $ci->db->limit(3);
        $data = $ci->db->get()->result_array();
        if($data){
            return $data;
        }else{
            return FALSE;
        }
    }

    /**
     * @return Toplam İletişim
     */
    public function toplam_iletisim(){
        $ci = & get_instance();
        $ci->db->select('*');
        $ci->db->from('iletisim');
        $sonuc = $ci->db->count_all_results();
        if($sonuc){
            return $sonuc;
        }else{
            echo 0 ;
        }
    }

    /**
     * @return Toplam Kategori Sayısı
     */
    public function toplam_kategori(){
        $ci = & get_instance();
        $ci->db->select('*');
        $ci->db->from('kategoriler');
        $sonuc = $ci->db->count_all_results();
        if($sonuc){
            return $sonuc;
        }else{
            echo 0 ;
        }
    }

    /**
     * @return Toplam Site Sayısı
     */
    public function toplam_site(){
        $ci = & get_instance();
        $ci->db->select('*');
        $ci->db->from('dizinler');
        $sonuc = $ci->db->count_all_results();
        if($sonuc){
            return $sonuc;
        }else{
            echo 0 ;
        }
    }

    /**
     * @return Toplam Sayfa Sayısı
     */
    public function toplam_sayfa(){
        $ci = & get_instance();
        $ci->db->select('*');
        $ci->db->from('sayfalar');
        $sonuc = $ci->db->count_all_results();
        if($sonuc){
            return $sonuc;
        }else{
            echo 0 ;
        }
    }

}

?>