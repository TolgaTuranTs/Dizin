<?php

/**

 * Dizin İçerik Sayfası

 * User: Tolga TURAN

 * Date: 18.01.2017

 * Time: 14:37

 */



// Koruma Kalkanı

defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır');



Class Dizin extends CI_Controller{



    function __construct(){

        parent::__construct();

        // Model Dosyası

        $this->load->model('Template/Dizin_model');

    }



    /**

     * @param $kategori_sef => Gelen Kategori Dizinin Seflinki

     */

    public function index($kategori_sef){

            // Sayfa Başlığı

        $data['title'] = ucwords(strtolower($kategori_sef)).' kategorisi';

        // Site Ayarlarını Çekip Header İle Tümüne yayma

        $data['sayfalar'] = $this->tema->sayfalar();

        // En Son Eklenen Siteler - Sidebar İçin

        $data['enson'] = $this->tema->enson_eklenenler();

        // Site ayarları

        $data['ayarlar'] = $this->tema->site_ayarlari();

        $this->load->view('Template/Static/header_view',$data);

        $this->load->view('Template/Static/sidebar_view',$data);

        // Böyle Kategori Varmı Yokmu Kontrolü

        $kontrol = $this->Dizin_model->kontrol($kategori_sef);

        // Yoksa Anasayfaya Git

        if(!$kontrol){redirect();}

        // Kategori Sef Ait Dizinleri Listeleme

        $data['dizinler'] = $this->Dizin_model->oku($kategori_sef);

        // Kategori Adını Alıp Başlık Olarak Yazdırma - İlk Harf Büyük

        $data['kategori_sef'] = ucwords(strtolower($kategori_sef));

        $this->load->view('Template/dizin_view',$data);

        $this->load->view('Template/Static/footer_view');

    }



}







?>