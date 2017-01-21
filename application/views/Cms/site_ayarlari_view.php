<?php defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır'); ?>
<div class="wrapper">
    <div class="container">
        <!-- Neredeyim Kısmı -->
        <div class="row">
            <div class="col-xs-12 m-t-20">
                <ol class="breadcrumb">
                    <li><a href="<?php echo site_url('Cms'); ?>">Anasayfa</a></li>
                    <li class="active">Site Ayarları</li>
                </ol>
            </div>
        </div>
        <!--#Neredeyim Kısmı -->
        <!-- Ayar Formu -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30">Site Ayar Formu</h4>
                    <div class="row">
                        <form action="" method="POST">
                            <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Site Başlığı</label>
                                    <input type="text" name="site_baslik" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarlar->site_baslik; ?>">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Site Etiketleri</label>
                                    <input type="text"  name="site_key" data-role="tagsinput" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarlar->site_key; ?>">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Site Seo Açıklaması</label>
                                    <textarea class="form-control" name="site_desc" id="exampleTextarea" rows="3"><?php echo $ayarlar->site_desc; ?></textarea>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Facebook Adresi</label>
                                    <input type="text" name="site_facebook"  class="form-control" id="exampleInputEmail1" value="<?php echo $ayarlar->site_facebook; ?>">
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Footer (Alt) İletişim Yazısı</label>
                                    <input type="text" name="site_iletisim" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarlar->site_iletisim; ?>">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Footer (Alt) Copyright Yazısı</label>
                                    <input type="text" name="site_copyright" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarlar->site_copyright; ?>">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Reklam Kodu</label>
                                    <textarea class="form-control" name="site_reklam" id="exampleTextarea" rows="3"><?php echo $ayarlar->site_reklam; ?></textarea>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Twitter Adresi</label>
                                    <input type="text" name="site_twitter" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarlar->site_twitter; ?>">
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-12">
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Site Logosu ( Yazı Olarak )</label>
                                    <input type="text" name="site_logo" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarlar->site_logo; ?>">
                                </fieldset>
                            </div>
                            <button style="width:100%;height:45px" type="submit" name="siteayarF" class="btn btn-danger waves-effect waves-light">Site Ayarlarını Kaydet</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--#Ayar Formu -->
    </div>
</div>