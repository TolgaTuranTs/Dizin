<?php

/**

 * İletişim İşlemleri

 * User: Tolga TURAN

 * Date: 19.01.2017

 * Time: 12:30

 */



// Koruma Kalkanı

defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır');



Class Contact extends CI_Controller{



    function __construct(){

        parent::__construct();

        // Model Dosyası

        $this->load->model('Template/Contact_model');

    }



    /**

     * İletişim Anasayfası

     */

    public function index(){

            // Sayfa Başlığı

            $data['title'] = 'Bizimle İletişime Geçin';

            // Site Ayarlarını Çekip Header İle Tümüne yayma

            $data['sayfalar'] = $this->tema->sayfalar();

            // En Son Eklenen Siteler - Sidebar İçin

            $data['enson'] = $this->tema->enson_eklenenler();

            // Site ayarları

            $data['ayarlar'] = $this->tema->site_ayarlari();

        $this->load->view('Template/Static/header_view',$data);

        $this->load->view('Template/Static/sidebar_view',$data);

            // Form Post Ettirme

            if(isset($_POST['iletisimkaydetF'])){

                // Formdan gelen bilgileri Arraya Atayıp Post Etme

                $data = array(

                    'adsoyad'   => $this->input->post('adsoyad',TRUE),

                    'email'     => $this->input->post('email',TRUE),

                    'ip_adres'  => $_SERVER['REMOTE_ADDR'],

                    'tarih'     => date('d/m/Y'),

                    'baslik'    => $this->input->post('baslik',TRUE),

                    'mesaj'     => $this->input->post('mesaj',TRUE)

                );

                // İletişim Mesajı Kaydetme Model

                $kaydet = $this->Contact_model->kaydet($data);

                if($kaydet){

                    echo '<script type="text/javascript">

                    alert("Tebrikler ! İletişim Mesajınız Gönderildi , En Kısa Sürede İrtibat Sağlayacağız");

                    window.location="'.site_url('iletisim').'";

                    </script>';

                }else{

                    echo '<script type="text/javascript">

                    alert("Hata ! Lütfen Daha Sonra Tekrar Deneyiniz");

                    window.location="'.site_url('iletisim').'";

                    </script>';

                }



            }

        $this->load->view('Template/iletisim_view');

        $this->load->view('Template/Static/footer_view');

    }



}







?>