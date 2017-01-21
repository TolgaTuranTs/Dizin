<?php defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır'); ?>
<div class="wrapper">
    <div class="container">
        <!-- Neredeyim Kısmı -->
        <div class="row">
            <div class="col-xs-12 m-t-20">
                <ol class="breadcrumb">
                    <li><a href="<?php echo site_url('Cms'); ?>">Anasayfa</a></li>
                    <li class="active">Şifremi Güncelle</li>
                </ol>
            </div>
        </div>
        <!--#Neredeyim Kısmı -->
        <!-- Şifre Formu -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30">Şifremi Güncelle</h4>
                    <div class="row">
                        <form action="" method="POST">
                            <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-12">
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Kullanıcı Şifreniz</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputEmail1" value="<?php echo $bilgilerim->password; ?>">
                                </fieldset>
                            </div>
                            <button style="width:100%;height:45px" type="submit" name="sifreF" class="btn btn-danger waves-effect waves-light">Şifremi Güncelle</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--#Şifre Formu -->
    </div>
</div>