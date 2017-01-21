<?php
/**
 * Admin Profil Veritabanı İşlemleri
 * User: Tolga TURAN
 * Date: 19.01.2017
 * Time: 15:15
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Buraya Giriş İzniniz Bulunamamaktadır');

Class Profil_model extends CI_Model{

    function __consturct(){
        parent::__construct();
        // DB Yükle
        $this->load->database();
    }

    /**
     * Profil Bilgilerime Eriş
     */
    function bul(){
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('admin_id',1);
        $data = $this->db->get()->row();
        if($data){
            return $data;
        }else{
            return FALSE;
        }
    }

    /**
     * @param $eklenecekler -> Formdan gelen düzenlenen veriler
     */
    public function guncelle($eklenecekler){
        $this->db->where('admin_id',1);
        $duzenle = $this->db->update('admin',$eklenecekler);
        if($duzenle){
            return TRUE;
        }else{
            return FALSE;
        }
    }

}



?>