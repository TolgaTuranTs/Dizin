<?php defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır'); ?>
<div class="wrapper">
    <div class="container">
        <!-- Neredeyim Kısmı -->
        <div class="row">
            <div class="col-xs-12 m-t-20">
                <ol class="breadcrumb">
                    <li><a href="<?php echo site_url('Cms'); ?>">Anasayfa</a></li>
                    <li><a href="<?php echo site_url('Cms/Sayfa'); ?>">Sayfa Listesi</a></li>
                    <li class="active">Sayfa Düzenle</li>
                </ol>
            </div>
        </div>
        <!--#Neredeyim Kısmı -->
        <!-- Sayfa Düzenleme Formu -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30">Sayfa Düzenleme Formu</h4>
                    <div class="row">
                        <form action="" method="POST">
                            <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-12">
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Sayfa Başlığı</label>
                                    <input type="text" name="sayfa_baslik" class="form-control" id="exampleInputEmail1" value="<?php echo $sayfalar->sayfa_baslik; ?>">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Sayfa Etiketleri</label>
                                    <input type="text"  name="sayfa_key" data-role="tagsinput" class="form-control" id="exampleInputEmail1" value="<?php echo $sayfalar->sayfa_key; ?>">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Sayfa İçeriği</label>
                                    <textarea name="sayfa_text" class="ckeditor"><?php echo $sayfalar->sayfa_text; ?></textarea>
                                </fieldset>
                            </div>
                            <button style="width:100%;height:45px" type="submit" name="sayfaduzenleF" class="btn btn-danger waves-effect waves-light">Sayfayı Güncelle</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--#Sayfa Düzenleme Formu -->
    </div>
</div>