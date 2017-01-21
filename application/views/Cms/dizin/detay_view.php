<?php defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır'); ?>
<div class="wrapper">
    <div class="container">
        <!-- Neredeyim Kısmı -->
        <div class="row">
            <div class="col-xs-12 m-t-20">
                <ol class="breadcrumb">
                    <li><a href="<?php echo site_url('Cms'); ?>">Anasayfa</a></li>
                    <li><a href="<?php echo site_url('Cms/Dizin'); ?>">Dizin İşlemleri</a></li>
                    <li class="active">Dizin Detayı</li>
                </ol>
            </div>
        </div>
        <!--#Neredeyim Kısmı -->
        <!-- Dizin Detay Formu -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-12">
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Site Başlığı</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $detay->dizin_baslik; ?>">
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Site Adresi</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $detay->dizin_url; ?>">
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Dizin Kategorisi</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $detay->dizin_kategori; ?>">
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Açıklama</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $detay->dizin_aciklama; ?>">
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Etiketler</label>
                                <input type="text" data-role="tagsinput" class="form-control" id="exampleInputEmail1" value="<?php echo $detay->dizin_etiket; ?>">
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Ekleyen Ad Soyad</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $detay->dizin_ekleyen; ?>">
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Ekleyen E-Mail Adresi</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $detay->dizin_ekleyen_mail; ?>">
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Eklenme Tarihi</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $detay->dizin_tarih; ?>">
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Ekleyen İp Adresi</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $detay->dizin_ekleyen_ip; ?>">
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Onay Durumu</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php
                                    $durum = $detay->dizin_durum;
                                    if($durum == 0){
                                        echo 'Onaysız';
                                    }elseif($durum == 1){
                                        echo 'Onaylı';
                                    }
                                 ?>">
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--#Dizin Detay Formu -->
    </div>
</div>