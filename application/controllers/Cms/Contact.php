<?php
/**
 * İletişim Sayfası
 * User: Tolga TURAN
 * Date: 19.01.2017
 * Time: 13:40
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Buraya Giriş İzniniz Bulunmamaktadır');

Class Contact extends CI_Controller{

    function __construct(){
        parent::__construct();
        // Giriş Yapılmamışsa
        if(!$this->session->userdata('login')){redirect('Cms/Login');}
        // Model Dosyası
        $this->load->model('Cms/Contact_model');
    }

    /**
     * İletişim Listeleme Sayfası
     */
    public function index(){
            // Sayfa Başlığı
            $data['title'] = 'İletişim Sayfası';
            // İletişim Listesi
            $data['iletisim'] = $this->cms->iletisim();
            // Toplam İletişim Sayısı
            $data['toplam'] = $this->cms->toplam_iletisim();
        $this->load->view('Cms/Static/header_view',$data);
            // İletişim Bilgilerini Listeleme Modeli
            $data['iletisimler'] = $this->Contact_model->listele();
        $this->load->view('Cms/iletisim/listele_view',$data);
        $this->load->view('Cms/Static/footer_view');
    }

    /**
     * @param $id => Gelen İletişim
     */
    public function sil($id){
        // Gelen Değişken Yoksa
        if(!$id){redirect('Cms');}
        $sil = $this->Contact_model->sil($id);
        if($sil){
            echo '<script type="text/javascript">
            alert("Tebrikler ! İletişim Mesajı Silindi");
            window.location="'.site_url('Cms/iletisim').'";
            </script>';
        }else{
            echo '<script type="text/javascript">
            alert("Hata ! Lütfen Daha Sonra Tekrar Deneyiniz");
            window.location="'.site_url('Cms/iletisim').'";
            </script>';
        }
    }

    /**
     * @param $id -> Gelen İletişim
     * İletişim Mesajı Okuma Alanı
     */
    public function oku($id){
            // Gelen Değişken Yoksa
            if(!$id){redirect('Cms');}
            // Sayfa Başlığı
            $data['title'] = 'İletişim Mesajı';
            // İletişim Listesi
            $data['iletisim'] = $this->cms->iletisim();
            // Toplam İletişim Sayısı
            $data['toplam'] = $this->cms->toplam_iletisim();
        $this->load->view('Cms/Static/header_view',$data);
            // Okuma Model Dosyası
            $oku['iletisim'] = $this->Contact_model->oku($id);
        $this->load->view('Cms/iletisim/oku_view',$oku);
        $this->load->view('Cms/Static/footer_view');
    }

}


?>