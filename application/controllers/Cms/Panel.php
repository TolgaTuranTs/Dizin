<?php
/**
 * Panel Anasayfası
 * User: Tolga TURAN
 * Date: 16.01.2017
 * Time: 22:36
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit ('Bu Sayfaya Giriş İzniniz Bulunmamaktadır');

Class Panel extends CI_Controller{

    function __construct(){
        parent::__construct();
        // Giriş Yapılmamışsa
        if(!$this->session->userdata('login')){redirect('Cms/Login');}
        // Model Dosyası
        $this->load->model('Cms/Ayarlar_model');
    }

    /**
     * Yönetim Paneli Anasayfası
     */
    public function index(){
            // Sayfa Title
            $data['title'] = 'Dizin Yönetim Paneli';
            // İletişim Listesi
            $data['iletisim'] = $this->cms->iletisim();
            // Toplam İletişim Sayısı
            $data['toplam'] = $this->cms->toplam_iletisim();
            // Toplam Kategori Sayısı
            $data['toplam_kategori'] = $this->cms->toplam_kategori();
            // Toplam Site
            $data['toplam_site'] = $this->cms->toplam_site();
            // Toplam Sayfa
            $data['toplam_sayfa'] = $this->cms->toplam_sayfa();
            // Toplam İletişim
            $data['toplam_iletisim'] = $this->cms->toplam_iletisim();
            // Oanysız Dizinleri Listele
            $data['onaysiz'] = $this->Ayarlar_model->onaysiz_siteler();
        // Header Sayfası
        $this->load->view('Cms/Static/header_view',$data);
        // Panel Anasayfası
        $this->load->view('Cms/panel_view');
        // Footer Sayfası
        $this->load->view('Cms/Static/footer_view');
    }

}


?>