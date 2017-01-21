<?php
/**
 * Dizin İle İlgili İşlemler
 * User: Tolga TURAN
 * Date: 18.01.2017
 * Time: 16:26
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit ('Buraya Giriş İzniniz Bulunmamaktadır');

Class Dizin extends CI_Controller{

    function __construct(){
        parent::__construct();
        // Giriş Yapılmamışsa
        if(!$this->session->userdata('login')){redirect('Cms/Login');}
        // Model Dosyası
        $this->load->model('Cms/Dizin_model');
    }

    /**
     * Dizinleri Listeleme Sayfası
     */
    public function index(){
            // Sayfa Başlığı
            $data['title'] = 'Eklenen Dizin İşlemleri';
            // İletişim Listesi
            $data['iletisim'] = $this->cms->iletisim();
            // Toplam İletişim Sayısı
            $data['toplam'] = $this->cms->toplam_iletisim();
        $this->load->view('Cms/Static/header_view',$data);
            // Dizin Listesi Eklenen
            $data['dizinler'] = $this->Dizin_model->listele();
        $this->load->view('Cms/dizin/listele_view',$data);
        $this->load->view('Cms/Static/footer_view');
    }

    /**
     * @param $id => Gelen Dizin İD
     * Eklenen Site Bilgilerini Detaylı Görme
     */
    public function detay($id){
        // Gelen Dizin Yoksa
        if(!$id){redirect(site_url('Cms/Dizin'));}
            // Sayfa Başlığı
            $data['title'] = 'Dizin Detayı';
            // İletişim Listesi
            $data['iletisim'] = $this->cms->iletisim();
            // Toplam İletişim Sayısı
            $data['toplam'] = $this->cms->toplam_iletisim();
        $this->load->view('Cms/Static/header_view',$data);
            // Dizine Ait Bilgileri Detay Sayfasına Gönderme
            $data['detay'] = $this->Dizin_model->detay($id);
        $this->load->view('Cms/dizin/detay_view',$data);
        $this->load->view('Cms/Static/footer_view');
    }

    /**
     * @param $id - Gelen Dizin İD
     * Bilgileri Düzenleme
     */
    public function duzenle($id){
        // Gelen Dizin Yoksa
            if(!$id){redirect(site_url('Cms/Dizin'));}
            // Sayfa Başlığı
            $data['title'] = 'Dizin Detayı';
            // İletişim Listesi
            $data['iletisim'] = $this->cms->iletisim();
            // Toplam İletişim Sayısı
            $data['toplam'] = $this->cms->toplam_iletisim();
        $this->load->view('Cms/Static/header_view',$data);
            // Dizine Ait Bilgileri Detay Sayfasına Gönderme
            $data['detay'] = $this->Dizin_model->detay($id);
            // Formu Post Ettirme
            if(isset($_POST['dizinduzenleF'])){
                // Formdan gelen bilgileri Arraya Atayıp Post Ettme
                $bilgiler = array(
                  'dizin_baslik'        => $this->input->post('dizin_baslik'),
                  'dizin_url'           =>  $this->input->post('dizin_url'),
                  'dizin_kategori'      => $this->input->post('dizin_kategori'),
                  'dizin_aciklama'      => $this->input->post('dizin_aciklama'),
                  'dizin_etiket'        => $this->input->post('dizin_etiket'),
                  'dizin_ekleyen'       => $this->input->post('dizin_ekleyen'),
                  'dizin_ekleyen_mail'  => $this->input->post('dizin_ekleyen_mail'),
                  'dizin_durum'         => $this->input->post('dizin_durum')
                );
                // Düzenleme Model Dosyası
                $duzenle = $this->Dizin_model->duzenle($bilgiler,$id);
                if($duzenle){
                    echo '<script type="text/javascript">
                    alert("Tebrikler ! Dizin Site Ayarları Güncellendi");
                    window.location="'.site_url('Cms/Dizin').'";
                    </script>';
                }else{
                    echo '<script type="text/javascript">
                    alert("Hata ! Lütfen Daha Sonra Tekrar Deneyiniz");
                    window.location="'.site_url('Cms/Dizin').'";
                    </script>';
                }
            }
            // Kategorileri Listeletme
            $data['kategoriler'] = $this->Dizin_model->kategoriler();
        $this->load->view('Cms/dizin/duzenle_view',$data);
        $this->load->view('Cms/Static/footer_view');
    }

    /**
     * @param $id => Gelen Dizin İD
     */
    public function sil($id){
        // Silme Model
        $sil = $this->Dizin_model->sil($id);
        if($sil){
            echo '<script type="text/javascript">
            alert("Tebrikler ! Dizin Başarıyla Silindi");
            window.location="'.site_url('Cms/Dizin').'";
            </script>';
        }else{
            echo '<script type="text/javascript">
            alert("Hata ! Lütfen Daha Sonra Tekrar Deneyiniz");
            window.location="'.site_url('Cms/Dizin').'";
            </script>';
        }
    }



}



?>