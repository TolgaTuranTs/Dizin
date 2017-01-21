<?php
/**
 * Site ayarları
 * User: Tolga TURAN
 * Date: 17.01.2017
 * Time: 12:49
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır');

Class Ayarlar extends CI_Controller{

    function __construct(){
        parent::__construct();
        // Üye Giriş Kontrolü
        if(!$this->session->userdata('login')){redirect('Cms/Login');}
        // Model Dosyası
        $this->load->model('Cms/Ayarlar_model');
    }

    /**
     * Site Ayarlar Sayfası
     */
    public function index(){
            // Sayfa Title
            $data['title'] = 'Site Ayarlar Sayfası';
            // İletişim Listesi
            $data['iletisim'] = $this->cms->iletisim();
            // Toplam İletişim Sayısı
            $data['toplam'] = $this->cms->toplam_iletisim();
        $this->load->view('Cms/Static/header_view',$data);
            // Form Post Ettirme İşlemi
            if(isset($_POST['siteayarF'])){
                // Formdan gelen bilgileri Arraya Aktararak Post Ettirme
                $data = array(
                    'site_baslik'   => $this->input->post('site_baslik'),
                    'site_key'      => $this->input->post('site_key'),
                    'site_desc'     => $this->input->post('site_desc'),
                    'site_facebook' => $this->input->post('site_facebook'),
                    'site_iletisim' => $this->input->post('site_iletisim'),
                    'site_copyright'=> $this->input->post('site_copyright'),
                    'site_reklam'   => $this->input->post('site_reklam'),
                    'site_twitter'  => $this->input->post('site_twitter'),
                    'site_logo'     => $this->input->post('site_logo')
                );
                // Düzenmele Modeli
                $sonuc = $this->Ayarlar_model->duzenle($data);
                if($sonuc){
                    echo '<script type="text/javascript">
                    alert("Tebrikler ! Site Ayarları Güncellendi");
                    window.location="'.site_url('Cms/Ayarlar').'";
                    </script>';
                }else{
                    echo '<script type="text/javascript">
                    alert("Hata ! Lütfen Daha Sonra Tekrar Deneyiniz");
                    window.location="'.site_url('Cms/Ayarlar').'";
                    </script>';
                }
            }
            // Site ayarlarını çekip ekrana bastırma
            $data['ayarlar'] = $this->Ayarlar_model->bul();
        $this->load->view('Cms/site_ayarlari_view',$data);
        $this->load->view('Cms/Static/footer_view');
    }


}

?>