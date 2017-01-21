<?php defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır'); ?>
<div class="wrapper">
    <div class="container">
        <!-- Neredeyim Kısmı -->
        <div class="row">
            <div class="col-xs-12 m-t-20">
                <ol class="breadcrumb">
                    <li><a href="<?php echo site_url('Cms'); ?>">Anasayfa</a></li>
                    <li><a href="<?php echo site_url('Cms/Kategori'); ?>">Kategori Listesi</a></li>
                    <li class="active">Kategori Ekle</li>
                </ol>
            </div>
        </div>
        <!--#Neredeyim Kısmı -->
        <!-- Kategori Ekleme Formu -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30">Kategori Ekleme Formu</h4>
                    <div class="row">
                        <form action="" method="POST">
                            <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-12">
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Kategori Başlığı</label>
                                    <input type="text" name="kategori_baslik" class="form-control" id="exampleInputEmail1">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Kategori Etiketleri</label>
                                    <input type="text"  name="kategori_key" data-role="tagsinput" class="form-control" id="exampleInputEmail1">
                                </fieldset>

                            </div>
                            <button style="width:100%;height:45px" type="submit" name="kategoriekleF" class="btn btn-danger waves-effect waves-light">Kategoriyi Kaydet</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--#Kategori Ekleme Formu -->
    </div>
</div>