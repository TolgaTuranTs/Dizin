<?php
/**
 * İletişim Veritabanı İşlemleri
 * User: Tolga TURAN
 * Date: 19.01.2017
 * Time: 12:31
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır');

Class iletisim_model extends CI_Model{

    function __construct(){
        parent::__construct();
        // DB Yükle
        $this->load->database();
    }

    /**
     * @param $data -> Kaydedilecek Veriler
     */
    public function kaydet($data){
        $kaydet = $this->db->insert('iletisim',$data);
        if($kaydet){
            return TRUE;
        }else{
            return FALSE;
        }
    }

}


?>