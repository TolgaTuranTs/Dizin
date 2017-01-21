<?php

/**

 * Dizine Site Ekleme İşlemi

 * User: Tolga TURAN

 * Date: 18.01.2017

 * Time: 15:01

 */



// Koruma Kalkanı

defined('BASEPATH') OR exit('Buraya Giriş İzniniz Bulunmamaktadır');



Class Ekle extends CI_Controller{



    function __construct(){

        parent::__construct();

        // Model Dosyası

        $this->load->model('Template/Dizin_model');

    }



    /**

     * Site Ekleme Sayfası

     */

    public function index(){

            // Sayfa Başlığı

            $data['title'] = 'Dizine Site Ekleme Sayfası';

            // Site Ayarlarını Çekip Header İle Tümüne yayma

            $data['sayfalar'] = $this->tema->sayfalar();

            // En Son Eklenen Siteler - Sidebar İçin

            $data['enson'] = $this->tema->enson_eklenenler();

            // Site ayarları

            $data['ayarlar'] = $this->tema->site_ayarlari();

        $this->load->view('Template/Static/header_view',$data);

        $this->load->view('Template/Static/sidebar_view',$data);

            // Kategori Seçtirmek İçin Kategori Listesi Alma

            $data['kategoriler'] = $this->Dizin_model->ekle_kategoriler();

            // Form Post Ettirme

            if(isset($_POST['siteekleF'])){

                // Formdan gelen bilgileri Arraya Atarak Post Ettirme

                $eklenecekler = array(

                    'dizin_baslik'      => $this->input->post('dizin_baslik',TRUE),

                    'dizin_url'         => $this->input->post('dizin_url',TRUE),

                    'dizin_kategori'    => $this->input->post('dizin_kategori',TRUE),

                    'dizin_aciklama'    => $this->input->post('dizin_aciklama',TRUE),

                    'dizin_etiket'      => $this->input->post('dizin_etiket',TRUE),

                    'dizin_ekleyen'     => $this->input->post('dizin_ekleyen',TRUE),

                    'dizin_ekleyen_mail'=> $this->input->post('dizin_ekleyen_email'),

                    'dizin_tarih'       => date('d/m/Y'),

                    'dizin_durum'       => 0,

                    'dizin_ekleyen_ip'  => $this->input->ip_address(),

                );

         

                // Her Şey Doğruysa Eklenecek Bilgileri Model Dosyasını Gönderme

                $site_ekle = $this->Dizin_model->ekle($eklenecekler);

                if($site_ekle){

                    echo '<script type="text/javascript">

                    alert("Tebrikler ! Siteniz Onaylanır Onaylanmaz Dizine Eklenecektir");

                    window.location="'.site_url('site-ekle').'";

                    </script>';

                }else{

                    echo '<script type="text/javascript">

                    alert("Hata ! Lütfen Daha Sonra Tekrar Deneyiniz");

                    window.location="'.site_url('site-ekle').'";

                    </script>';

                }

            }

        $this->load->view('Template/ekle_view',$data);

        $this->load->view('Template/Static/footer_view');

    }



}





?>