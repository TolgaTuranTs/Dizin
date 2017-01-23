<?php
/**
 * Kategori İşlemleri
 * User: Tolga TURAN
 * Date: 17.01.2017
 * Time: 14:55
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Buraya Giriş İzniniz Bulunamamaktadır');

Class Kategori extends CI_Controller{

    function __construct(){
        parent::__construct();
        // Üye Giriş Kontrolü
        if(!$this->session->userdata('login')){redirect('Cms/Login');}
        // Kategori Model Dosyası
        $this->load->model('Cms/Kategori_model');
    }

    /**
     * Kategori Listeleme İşlemleri
     */
    public function index(){
            // Sayfa Başlığı
            $data['title'] = 'Kategori İşlemleri';
            // İletişim Listesi
            $data['iletisim'] = $this->cms->iletisim();
            // Toplam İletişim Sayısı
            $data['toplam'] = $this->cms->toplam_iletisim();
        $this->load->view('Cms/Static/header_view',$data);
            // Kategoriyi Listeleme Modeli
            $data['kategoriler'] = $this->Kategori_model->listele();
        $this->load->view('Cms/kategoriler/listele_view',$data);
        $this->load->view('Cms/Static/footer_view');
    }

    /**
     * Kategori Ekleme İşlemleri
     */
    public function Ekle(){
            // Sayfa Başlığı
            $data['title'] = 'Kategori Ekleme Sayfası';
            // İletişim Listesi
            $data['iletisim'] = $this->cms->iletisim();
            // Toplam İletişim Sayısı
            $data['toplam'] = $this->cms->toplam_iletisim();
        $this->load->view('Cms/Static/header_view',$data);
            // Form Post Ettirme
            if(isset($_POST['kategoriekleF'])){
                // Formdan gelen bilgiler Post Ettirip Array Atama
                $data = array(
                    'kategori_baslik'   => $this->input->post('kategori_baslik'),
                    'kategori_seflink'  => permalink($this->input->post('kategori_baslik')),
                    'kategori_key'      => $this->input->post('kategori_key')
                );
                // Kategori Ekleme Model
                $kategori_ekle = $this->Kategori_model->ekle($data);
                if($kategori_ekle){
                    echo '<script type="text/javascript">
                    alert("Tebrikler ! Kategoriniz Başarıyla Eklendi");
                    window.location="'.site_url('Cms/Kategori/Ekle').'";
                    </script>';
                }else{
                    echo '<script type="text/javascript">
                    alert("Hata ! Lütfen Daha Sonra Tekrar Deneyiniz");
                    window.location="'.site_url('Cms/Kategori/Ekle').'";
                    </script>';
                }
            }
        $this->load->view('Cms/kategoriler/ekle_view');
        $this->load->view('Cms/Static/footer_view');
    }

    /**
     * @param $id => Gelen Kategori
     * Kategori Düzenleme İşlemleri
     */
    public function duzenle($id){
        // Gelen Değişken Yoksa
        if(!$id){redirect('Cms');}
            // Sayfa Başlığı
            $data['title'] = 'Kategori Düzenleme Sayfası';
            // İletişim Listesi
            $data['iletisim'] = $this->cms->iletisim();
            // Toplam İletişim Sayısı
            $data['toplam'] = $this->cms->toplam_iletisim();
        $this->load->view('Cms/Static/header_view',$data);
            // Kategoriye Ait Bilgileri Bulma
            $data['kategori'] = $this->Kategori_model->bul($id);
            // Form Post Ettirme
            if(isset($_POST['kategoriduzenleF'])){
                // Formdan gelen bilgiler
                $kategori_baslik    = $this->input->post('kategori_baslik');
                $kategori_seflink   = permalink($kategori_baslik);
                $kategori_key       = $this->input->post('kategori_key');
                // Bilgileri Arraya Atama
                $data = array(
                    'kategori_baslik'   => $kategori_baslik,
                    'kategori_seflink'  => $kategori_seflink,
                    'kategori_key'      => $kategori_key
                );
                // Düzenleme Model Dosyası
                $duzenle = $this->Kategori_model->guncelle($data,$id);
                if($duzenle){
                    echo '<script type="text/javascript">
                    alert("Tebrikler ! Kategoriniz Başarıyla Güncellendi");
                    window.location="'.site_url('Cms/Kategori/duzenle/'.$id.'').'";
                    </script>';
                }else{
                    echo '<script type="text/javascript">
                    alert("Hata  ! Lütfen Daha Sonra Tekrar Deneyiniz");
                    window.location="'.site_url('Cms/Kategori/duzenle/'.$id.'').'";
                    </script>';
                }
            }
        $this->load->view('Cms/kategoriler/duzenle_view',$data);
        $this->load->view('Cms/Static/footer_view');
    }

    /**
     * @param $id => Gelen Kategori
     * Kategori Silme İşlemleri
     */
    public function sil($id){
        // Gelen Değişken Yoksa
        if(!$id){redirect('Cms');}
        // Silme Modoli
        $kategori_sil = $this->Kategori_model->sil($id);
        if($kategori_sil){
            echo '<script type="text/javascript">
            alert("Tebrikler  ! Kategoriniz Başarıyla Silindi");
            window.location="'.site_url('Cms/Kategori').'";
            </script>';
        }else{
            echo '<script type="text/javascript">
            alert("Hata  ! Lütfen Daha Sonra Tekrar Deneyiniz");
            window.location="'.site_url('Cms/Kategori').'";
            </script>';
        }
    }

}




?>