<?php defined('BASEPATH') OR exit('Bu Sayfay Giriş İzniniz Bulunmamaktadır'); ?>
<!-- İletişim Alanı -->
<div class="col-lg-9">
    <div class="panel panel-primary">
        <div class="panel-heading">İletişim Alanı</div>
        <div class="panel-body">
            <div class="col-lg-12" style="padding:10px 10px 10px 10px">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="email">Adınız Soyadınız</label>
                        <input type="text" name="adsoyad" placeholder="Adınız Soyadınız" required class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="email">E-Mail Adresiniz</label>
                        <input type="email" name="email" placeholder="E-Mail Adresiniz" required class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="email">İletişim Konusu</label>
                        <input type="text" name="baslik" placeholder="İletişim Konusu" required class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="email">İletişim Mesajınız</label>
                        <textarea class="form-control" name="mesaj" rows="5" id="comment"></textarea>
                    </div>
                    <div class="form-group">
                        <!-- Google receptcha - Localhost İçin Geçerli - Sitenize Ait Api Site Key Giriniz -->
                        <div class="g-recaptcha" data-sitekey="6LfdShIUAAAAAHCUlksoBIhnnpS79A_jAEdIaK8F"></div>
                    </div>
                    <button type="submit" name="iletisimkaydetF" style="width:100%;height:50px" class="btn btn-danger">Bizimle İletişime Geçin</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--#İletişim Alanı -->