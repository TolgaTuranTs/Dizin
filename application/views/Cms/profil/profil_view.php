<?php defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır'); ?>
<div class="wrapper">
    <div class="container">
        <!-- Neredeyim Kısmı -->
        <div class="row">
            <div class="col-xs-12 m-t-20">
                <ol class="breadcrumb">
                    <li><a href="<?php echo site_url('Cms'); ?>">Anasayfa</a></li>
                    <li class="active">Kişisel Profilim</li>
                </ol>
            </div>
        </div>
        <!--#Neredeyim Kısmı -->
        <!-- Profil Formu -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30">Profil Bilgilerimi Düzenle</h4>
                    <div class="row">
                        <form action="" method="POST">
                            <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Kullanıcı Adınız</label>
                                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" value="<?php echo $bilgilerim->username; ?>">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Mail Adresiniz</label>
                                    <input type="text" name="admin_mail" class="form-control" id="exampleInputEmail1" value="<?php echo $bilgilerim->admin_mail; ?>">
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Adınız Soyadınız</label>
                                    <input type="text" name="admin_name" class="form-control" id="exampleInputEmail1" value="<?php echo $bilgilerim->admin_name; ?>">
                                </fieldset>
                            </div>
                            <button style="width:100%;height:45px" type="submit" name="profilF" class="btn btn-danger waves-effect waves-light">Bilgilerimi Güncelle</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--#Profil Formu -->
    </div>
</div>