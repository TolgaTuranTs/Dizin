<?php
/**
 * Created by PhpStorm.
 * User: Tolga TURAN
 * Date: 19.01.2017
 * Time: 15:15
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Buraya Giriş İzniniz Bulunamamaktadır');

Class Profil extends CI_Controller{

    function __construct(){
        parent::__construct();
        // Üye Giriş Kontrolü
        if (!$this->session->userdata('login')) {
            redirect('Cms/Login');
        }
        // Profil Model Dosyası
        $this->load->model('Cms/Profil_model');
    }

    public function index(){
            // Sayfa Başlığı
            $data['title'] = 'Kişisel Profil Sayfası';
            // İletişim Listesi
            $data['iletisim'] = $this->cms->iletisim();
            // Toplam İletişim Sayısı
            $data['toplam'] = $this->cms->toplam_iletisim();
        $this->load->view('Cms/Static/header_view',$data);
            // Bilgilerimi Bul
            $data['bilgilerim'] = $this->Profil_model->bul();
            // Form Post Ettirme
            if(isset($_POST['profilF'])){
                // Formdan gelen bilgileri arraya atama
                $eklenecekler = array(
                    'username'      => $this->input->post('username'),
                    'admin_mail'    => $this->input->post('admin_mail'),
                    'admin_name'    => $this->input->post('admin_name')
                );
                // Güncelleme Modeli
                $guncelle = $this->Profil_model->guncelle($eklenecekler);
                if($guncelle){
                    echo '<script type="text/javascript">
                    alert("Tebrikler ! Profil Bilgileriniz Güncellendi,Çıkış Sayfasına Yönlendiriliyorsunuz");
                    window.location="'.site_url('Cms/cikis').'";
                    </script>';
                }else{
                    echo '<script type="text/javascript">
                    alert("Hata ! Lütfen Daha Sonra Tekrar Deneyiniz");
                    window.location="'.site_url('Cms/profil').'";
                    </script>';
                }
            }
        $this->load->view('Cms/profil/profil_view',$data);
        $this->load->view('Cms/Static/footer_view');
    }

    /**
     * Şifre Güncelleme İşlemi
     */
    public function sifre(){
        // Sayfa Başlığı
        $data['title'] = 'Şifremi Güncelle';
        // İletişim Listesi
        $data['iletisim'] = $this->cms->iletisim();
        // Toplam İletişim Sayısı
        $data['toplam'] = $this->cms->toplam_iletisim();
        $this->load->view('Cms/Static/header_view',$data);
        // Bilgilerimi Bul
        $data['bilgilerim'] = $this->Profil_model->bul();
        // Form Post Ettirme
        if(isset($_POST['sifreF'])){
            // Formdan gelen bilgileri arraya atama
            $eklenecekler = array(
                'password'      => $this->input->post('password')
            );
            // Güncelleme Modeli
            $guncelle = $this->Profil_model->guncelle($eklenecekler);
            if($guncelle){
                echo '<script type="text/javascript">
                    alert("Tebrikler ! Şifreniz Güncellendi,Çıkış Sayfasına Yönlendiriliyorsunuz");
                    window.location="'.site_url('Cms/cikis').'";
                    </script>';
            }else{
                echo '<script type="text/javascript">
                    alert("Hata ! Lütfen Daha Sonra Tekrar Deneyiniz");
                    window.location="'.site_url('Cms/sifre').'";
                    </script>';
            }
        }
        $this->load->view('Cms/profil/sifre_view',$data);
        $this->load->view('Cms/Static/footer_view');
    }


}

?>