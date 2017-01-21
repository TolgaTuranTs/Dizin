<?php
/**
 * Sayfa İşlemleri
 * User: Tolga TURAN
 * Date: 17.01.2017
 * Time: 21:33
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Buraya Giriş İzniniz Bulunamamaktadır');

Class Sayfa extends CI_Controller{

    function __construct(){
        parent::__construct();
        // Üye Giriş Yapmamışsa
        if(!$this->session->userdata('login')){redirect('Cms/Login');}
        // Model Dosyası
        $this->load->model('Cms/Sayfa_model');
    }

    /**
     * Sayfa Listeleme İşlemleri
     */
    public function index(){
            // Sayfa Başlığı
            $data['title'] = 'Sayfa Listesi';
            // İletişim Listesi
            $data['iletisim'] = $this->cms->iletisim();
            // Toplam İletişim Sayısı
            $data['toplam'] = $this->cms->toplam_iletisim();
        $this->load->view('Cms/Static/header_view',$data);
            // Listeleme Modeli
            $listele['sayfalar'] = $this->Sayfa_model->listele();
        $this->load->view('Cms/sayfa/listele_view',$listele);
        $this->load->view('Cms/Static/footer_view');
    }

    /**
     * Sayfa Ekleme İşlemleri
     */
    public function ekle(){
            // Sayfa Başlığı
            $data['title'] = 'Sayfa Ekleme İşlemi';
            // İletişim Listesi
            $data['iletisim'] = $this->cms->iletisim();
            // Toplam İletişim Sayısı
            $data['toplam'] = $this->cms->toplam_iletisim();
        $this->load->view('Cms/Static/header_view',$data);
            // Form Post Etme
            if(isset($_POST['sayfaekleF'])){
                // Formdan gelen bilgiler Post Ettirip Array Atama
                $data = array(
                    'sayfa_baslik'   => $this->input->post('sayfa_baslik'),
                    'sayfa_seflink'  => permalink($this->input->post('sayfa_baslik')),
                    'sayfa_key'      => $this->input->post('sayfa_key'),
                    'sayfa_text'     => $this->input->post('sayfa_text'),
                );
                // Ekleme Model Dosyası
                $ekle = $this->Sayfa_model->ekle($data);
                if($ekle){
                    echo '<script type="text/javascript">
                    alert("Tebrikler ! Sayfanız Başarıyla Eklendi");
                    window.location="'.site_url('Cms/Sayfa/Ekle').'";
                    </script>';
                }else{
                    echo '<script type="text/javascript">
                    alert("Hata ! Lütfen Daha Sonra Tekrar Deneyiniz");
                    window.location="'.site_url('Cms/Sayfa/Ekle').'";
                    </script>';
                }
            }
        $this->load->view('Cms/sayfa/ekle_view');
        $this->load->view('Cms/Static/footer_view');
    }

    /**
     * @param $id => Gelen Sayfa
     * Sayfa Düzenleme İşlemi
     */
    public function duzenle($id){
            // Gelen Değişken Yoksa
            if(!$id){redirect('Cms');}
            // Sayfa Başlığı
            $data['title'] = 'Sayfa Düzenleme';
            // İletişim Listesi
            $data['iletisim'] = $this->cms->iletisim();
            // Toplam İletişim Sayısı
            $data['toplam'] = $this->cms->toplam_iletisim();
        $this->load->view('Cms/Static/header_view',$data);
            // Düzenleme Modeli
            $bul['sayfalar'] = $this->Sayfa_model->bul($id);
            // Formdan Post Edip Arraya Atama
            if(isset($_POST['sayfaduzenleF'])){
                // Formdan gelen bilgiler
                $data = array(
                  'sayfa_baslik'    => $this->input->post('sayfa_baslik'),
                  'sayfa_seflink'   => permalink($this->input->post('sayfa_baslik')),
                  'sayfa_key'       => $this->input->post('sayfa_key'),
                  'sayfa_text'      => $this->input->post('sayfa_text')
                );
                // Düzeneleme Modeli
                $guncelle = $this->Sayfa_model->guncelle($data,$id);
                if($guncelle){
                    echo '<script type="text/javascript">
                    alert("Tebrikler ! Sayfanız Başarıyla Güncellendi");
                    window.location="'.site_url('Cms/Sayfa/duzenle/'.$id.'').'";
                    </script>';
                }else{
                    echo '<script type="text/javascript">
                    alert("Hata ! Lütfen Daha Sonra Tekrar Deneyiniz");
                    window.location="'.site_url('Cms/Sayfa/duzenle/'.$id.'').'";
                    </script>';
                }
            }
        $this->load->view('Cms/sayfa/duzenle_view',$bul);
        $this->load->view('Cms/Static/footer_view');
    }

    /**
     * @param $id => Gelen Sayfa
     * Sayfa Silme İşlemi
     */
    public function sil($id){
            // Gelen Değişken Yoksa
            if(!$id){redirect('Cms');}
        // Sayfa Silme Modeli
        $sayfa_sil = $this->Sayfa_model->sil($id);
        if($sayfa_sil){
            echo '<script type="text/javascript">
            alert("Tebrikler ! Sayfanız Başarıyla Silindi");
            window.location="'.site_url('Cms/Sayfa').'";
            </script>';
        }else{
            echo '<script type="text/javascript">
            alert("Hata ! Lütfen Daha Sonra Tekrar Deneyiniz");
            window.location="'.site_url('Cms/Sayfa').'";
            </script>';
        }
    }

}


?>