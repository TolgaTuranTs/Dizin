<?php

/**

 * Sayfa İşlemleri

 * User: Tolga TURAN

 * Date: 19.01.2017

 * Time: 12:30

 */



// Koruma Kalkanı

defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır');



Class Sayfa extends CI_Controller{



    function __construct(){

        parent::__construct();

        // Model Dosyası

        $this->load->model('Template/Sayfa_model');

    }



    /**

     * İletişim Anasayfası

     */

    public function index($sayfa_sef){

            // Sayfa Başlığı

            $data['title'] = ucwords(strtolower($sayfa_sef));

            // Site Ayarlarını Çekip Header İle Tümüne yayma

            $data['sayfalar'] = $this->tema->sayfalar();

            // En Son Eklenen Siteler - Sidebar İçin

            $data['enson'] = $this->tema->enson_eklenenler();

            // Site ayarları

            $data['ayarlar'] = $this->tema->site_ayarlari();

        $this->load->view('Template/Static/header_view',$data);

        $this->load->view('Template/Static/sidebar_view',$data);

            // Böyle Kategori Varmı Yokmu Kontrolü

            $kontrol = $this->Sayfa_model->kontrol($sayfa_sef);

            // Yoksa Anasayfaya Git

            if(!$kontrol){redirect();}

            // Kategori Sef Ait Dizinleri Listeleme

            $data['sayfa'] = $this->Sayfa_model->oku($sayfa_sef);

        $this->load->view('Template/sayfa_view',$data);

        $this->load->view('Template/Static/footer_view');

    }



}







?>