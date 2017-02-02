<?php
/**
 * Site İle İlgili Genel Ayarlar -> Tüm Yerden Çekilebilir
 * User: Tolga TURAN
 * Date: 18.01.2017
 * Time: 14:03
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Buraya Giriş İzniniz Bulunmamaktadır');

Class tema {

    /**
     * Sayfaları Listeleme Fonksiyonu
     */
    public function sayfalar(){
        $ci =& get_instance();
        // DB Yükle
        $ci->load->database();
        $ci->db->select('*');
        $ci->db->from('sayfalar');
        $data = $ci->db->get()->result_array();
        if($data){
            return $data;
        }else{
            return FALSE;
        }
    }

    /**
     * @param $kategori Kategori
     * @return Kategoriye Ait Kaçtane Dizin var kontrolü
     */
    public function toplam_dizinler($kategori){
        $ci = & get_instance();
        $ci->db->select('*');
        $ci->db->from('dizinler');
        $ci->db->where('dizin_kategori',$kategori);
        $ci->db->where('dizin_durum',1);
        $sonuc = $ci->db->count_all_results();
        if($sonuc){
            return $sonuc;
        }else{
            echo 0 ;
        }
    }

    /**
     * @return Sidebar İçin En Son Eklenenler Listesi
     */
    public function enson_eklenenler(){
        $ci = & get_instance();
        $ci->db->select('*');
        $ci->db->from('dizinler');
        $ci->db->order_by('dizin_id','DESC');
		$ci->db->where('dizin_durum',1);
        $ci->db->limit(6);
        $data = $ci->db->get()->result_array();
        if($data){
            return $data;
        }else{
            return FALSE;
        }
    }

    /**
     * @return Site ayarlarına erişme
     */
    public function site_ayarlari(){

        $ci = & get_instance();
        $ci->db->select('*');
        $ci->db->from('site_ayarlari');
        $ci->db->where('site_id',1);
        $data = $ci->db->get()->row();
        if($data){
            return $data;
        }else{
            return FALSE;
        }
    }

}




?>
