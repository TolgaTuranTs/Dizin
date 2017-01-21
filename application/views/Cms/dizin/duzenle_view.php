<?php defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır'); ?>
<div class="wrapper">
    <div class="container">
        <!-- Neredeyim Kısmı -->
        <div class="row">
            <div class="col-xs-12 m-t-20">
                <ol class="breadcrumb">
                    <li><a href="<?php echo site_url('Cms'); ?>">Anasayfa</a></li>
                    <li><a href="<?php echo site_url('Cms/Dizin'); ?>">Dizin İşlemleri</a></li>
                    <li class="active">Dizin Düzenle</li>
                </ol>
            </div>
        </div>
        <!--#Neredeyim Kısmı -->
        <!-- Dizin Düzenleme Formu -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row">
                        <form action="" method="POST">
                            <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-12">
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Site Başlığı</label>
                                    <input type="text" class="form-control" name="dizin_baslik" id="exampleInputEmail1" value="<?php echo $detay->dizin_baslik; ?>">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Site Adresi</label>
                                    <input type="text" class="form-control" name="dizin_url" id="exampleInputEmail1" value="<?php echo $detay->dizin_url; ?>">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Dizin Kategorisi</label>
                                    <select class="form-control" name="dizin_kategori" id="exampleSelect1">
                                        <option value="<?php echo $detay->dizin_kategori; ?>" selected><?php echo $detay->dizin_kategori; ?></option>
                                        <?php foreach($kategoriler as $kategori){ ?>
                                        <option value="<?php echo $kategori['kategori_seflink']; ?>" ><?php echo $kategori['kategori_baslik']; ?></option>
                                        <?php } ?>
                                    </select>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Açıklama</label>
                                    <input type="text" class="form-control" name="dizin_aciklama" id="exampleInputEmail1" value="<?php echo $detay->dizin_aciklama; ?>">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Etiketler</label>
                                    <input type="text" data-role="tagsinput" name="dizin_etiket" class="form-control" id="exampleInputEmail1" value="<?php echo $detay->dizin_etiket; ?>">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Ekleyen Ad Soyad</label>
                                    <input type="text" class="form-control" name="dizin_ekleyen" id="exampleInputEmail1" value="<?php echo $detay->dizin_ekleyen; ?>">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Ekleyen E-Mail Adresi</label>
                                    <input type="text" class="form-control" name="dizin_ekleyen_mail" id="exampleInputEmail1" value="<?php echo $detay->dizin_ekleyen_mail; ?>">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Onay Durumu</label>
                                    <select class="form-control" name="dizin_durum" id="exampleSelect1">
                                        <?php
                                            $durum = $detay->dizin_durum;
                                            if($durum == 0){
                                         ?>
                                            <option value="0" selected >Onaysız</option>
                                            <option value="1">Onayla</option>
                                         <?php }elseif($durum == 1){ ?>
                                            <option value="1" selected>Onaylı<option>
                                            <option value="0">Onaydan Çıkar</option>
                                          <?php } ?>
                                    </select>
                                </fieldset>
                            </div>
                            <button style="width:100%;height:45px" type="submit" name="dizinduzenleF" class="btn btn-danger waves-effect waves-light">Dizin Bilgilerini Güncelle</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--#Dizin Düzenleme Formu -->
    </div>
</div>