<?php
/**
 * Yönetim Paneli Giriş Kısmı
 * User: admin
 * Date: 17.01.2017
 * Time: 09:26
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Buraya Giriş İzniniz Bulunmamaktadır');

Class Login extends CI_Controller{

    function __construct(){
        parent::__construct();
        // Model Dosyası
        $this->load->model('Cms/Login_model');
    }

    /*
     * Yönetim Paneli Giriş Form Sayfası
     */
    public function index(){
        // Sayfa Title
        $data['title'] = 'Yönetim Paneli Giriş Formu';
        // Form Post İşlemleri
        if(isset($_POST['girisF'])){
            // Formdan gelen bilgiler
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $giris = $this->Login_model->giris($username,$password);
            if($giris){
                // Session Oluşturma
                $this->session->set_userdata('username',$username);
                $this->session->set_userdata('password',$password);
                $this->session->set_userdata('login',TRUE);
                redirect('Cms');
            }else{
                redirect('Cms/Login');
            }
        }
        // Admin Giriş Sayfa Teması
        $this->load->view('Cms/login_view',$data);
    }

    /**
     * Admin Oturum Sonlandırma
     */
    public function cikis(){
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('login');
        redirect('Cms');
    }

}



?>