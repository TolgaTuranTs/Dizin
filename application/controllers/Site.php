<?php

/**
 * Site Anasayfası
 * User: Tolga TURAN
 * Date: 16.01.2017
 * Time: 22:36
 */
// Koruma Kalkanı
defined('BASEPATH') OR exit ('Bu Sayfaya Giriş İzniniz Bulunmamaktadır');

Class Site extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        // Model Dosyası
        $this->load->model('Template/Site_model');
    }

    // Site Anasayfası
    public function index(){
            // Sayfa Başlığı
            $data['title'] = '';
            // Site Ayarlarını Çekip Header İle Tümüne yayma
            $data['sayfalar'] = $this->tema->sayfalar();
            // En Son Eklenen Siteler - Sidebar İçin
            $data['enson'] = $this->tema->enson_eklenenler();
            // Site ayarları
            $data['ayarlar'] = $this->tema->site_ayarlari();
        $this->load->view('Template/Static/header_view',$data);
        $this->load->view('Template/Static/sidebar_view',$data);
            // Kategori Listeleme Model
            $data['kategoriler'] = $this->Site_model->listele();
        $this->load->view('Template/anasayfa_view',$data);
        $this->load->view('Template/Static/footer_view');
    }

}

?>
