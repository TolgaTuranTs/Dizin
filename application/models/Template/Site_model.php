<?php

/**

 * Site anasayfa Model Dosyası

 * User: Tolga TURAN

 * Date: 18.01.2017

 * Time: 13:36

 */



defined('BASEPATH') OR exit ('Buraya Giriş İzniniz Bulunmamaktadır');



Class site_model extends CI_Model{



    function __construct(){

        parent::__construct();

        // Database Başlatma

        $this->load->database();

    }



    /**

     * @return Anasayfa Kategori Listeleme

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



    public function toplam_dizinler($kategori){

        $this->db->select('*');

        $this->db->from('kategoriler');

        $this->db->where('kategori_id',$kategori);

        $sonuc = $this->db->get()->row();

        if($sonuc){

            return $sonuc;

        }else{

            return FALSE;

        }

    }



}





?>