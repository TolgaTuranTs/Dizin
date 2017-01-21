<?php
/**
 * Login İşlemleri
 * User: admin
 * Date: 17.01.2017
 * Time: 12:28
 */

defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır');

Class Login_model extends CI_Model{

    /**
     * Database Sınıfını Yükleme
     */
    function __construct(){
		parent::__construct();
        $this->load->database();
    }

    /**
     * @param $username => Formdan gelen Kullanıcı Adı
     * @param $password => Formdan Gelen Kullanıcı Şifresi
     * @return Admin Giriş İşlemi - Veritabanı
     */
    public function giris($username,$password){
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $data = $this->db->get();
        if($data->num_rows()>0)
            return TRUE;
        else
            return FALSE;
    }


}





?>