<?php defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır'); ?>
<!-- Site Ekleme Alanı -->
<div class="col-lg-9">
    <div class="panel panel-primary">
        <div class="panel-heading">Sitenizi Dizine Ekleyin</div>
        <div class="panel-body">
            <div class="col-lg-12" style="padding:10px 10px 10px 10px">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="email">Site Başlığı</label>
                        <input type="text" name="dizin_baslik" placeholder="Lütfen Site Başlığını Giriniz" required class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="email">Site Adresi</label>
                        <input type="url" name="dizin_url" placeholder="Örnek : http://google.com.tr" required class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label>Dizin Kategorisi Seçiniz</label>
                        <select class="form-control" name="dizin_kategori">
                            <?php foreach($kategoriler as $kategori){ ?>
                            <option value="<?php echo $kategori['kategori_seflink']; ?>"><?php echo $kategori['kategori_baslik']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Kısa Bir Açıklama</label>
                        <input type="text" name="dizin_aciklama" placeholder="70 Karakterli Site Açıklaması" required class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="email">Anahtar Kelime</label><br />
                        <input type="text" name="dizin_etiket" data-role="tagsinput" placeholder="20 Karakterli Site Anahtar Kelimesi" required class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="email">Adınız Soyadınız</label>
                        <input type="text" name="dizin_ekleyen" placeholder="Lütfen Adınızı ve Soyadınızı Giriniz" required class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="email">E-Mail Adresiniz</label>
                        <input type="email" name="dizin_ekleyen_email" placeholder="Lütfen E-Mail Adresinizi Giriniz" required class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <!-- Google receptcha - Localhost İçin Geçerli - Sitenize Ait Api Site Key Giriniz -->
                        <div class="g-recaptcha" data-sitekey="6LfdShIUAAAAAHCUlksoBIhnnpS79A_jAEdIaK8F"></div>
                    </div>
                    <button type="submit" name="siteekleF" style="width:100%;height:50px" class="btn btn-danger">Siteyi Ekle</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--#Site Ekleme Alanı -->
