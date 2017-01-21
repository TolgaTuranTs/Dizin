<?php

/**

 * Created by PhpStorm.

 * User: Tolga TURAN

 * Date: 19.01.2017

 * Time: 17:04

 */



// Koruma Kalkanı

defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır');



Class Ara extends CI_Controller{



    function __construct(){

        parent::__construct();

        $this->load->model('Template/Ara_model');

    }



    /**

     * Arama Sayfası

     */

    public function index(){

        // Form Post Ettirme

        if(isset($_POST['searchF'])){

            // Formdan gelen bilgi

            $search = $this->input->post('search',TRUE);

        }

            // Sayfa Başlığı

            $data['title'] = ucwords(strtolower($search));;

            // Site Ayarlarını Çekip Header İle Tümüne yayma

            $data['sayfalar'] = $this->tema->sayfalar();

            // En Son Eklenen Siteler - Sidebar İçin

            $data['enson'] = $this->tema->enson_eklenenler();

            // Site ayarları

            $data['ayarlar'] = $this->tema->site_ayarlari();

        $this->load->view('Template/Static/header_view',$data);

        $this->load->view('Template/Static/sidebar_view',$data);

            // Arama Modeli

            $data['aranan'] = $this->Ara_model->bul($search);

        $this->load->view('Template/ara_view',$data);

        $this->load->view('Template/Static/footer_view');

    }



}



?>