<?php defined('BASEPATH') OR exit ('Bu Sayfaya Giriş İzniniz Bulunamamaktadır'); ?>

</div>
<!--#İçerik Alanı -->

<!-- Footer Alanı -->
<div class="container-fluid footer">
    <div class="container">
        <div class="col-lg-12">
            <div class="footer_container">
                <div class="col-lg-3 col-sm-12 col-md-12">
                    <div id="kutu">
                        <b>Kısa Yollar</b>
                        <ul>
                            <li><a href="<?php echo site_url(); ?>" title="">Ana Sayfa</a></li>
                            <li><a href="<?php echo site_url('site-ekle'); ?>" title="Sitenizi Dizine Ekleyin">Site Ekle</li>
                            <li><a href="<?php echo site_url('iletisim'); ?>" title="Bizimle İrtibata Geçin">İletişim</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-12">
                    <div id="kutu">
                        <b>İletişim</b>
                        <ul>
                            <li><?php echo $ayarlar->site_iletisim; ?></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-12">
                    <div id="kutu">
                        <b>Copyright</b>
                        <ul>
                            <li><?php echo $ayarlar->site_copyright; ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-12">
                    <div id="kutu">
                        <b>Sosyal Medya</b>
                        <ul>
                            <li><a href="<?php echo $ayarlar->site_twitter; ?>" target="_blank" title=""><i class="fa fa-twitter-square"  aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo $ayarlar->site_facebook; ?>" target="_blank" title=""><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--#Footer Alanı -->




    <script src="<?php echo base_url('public/template/'); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url('public/template/'); ?>bootstrap/js/bootstrap.min.js"></script>
    <!-- Tag İnput JS -->
    <script src="<?php echo base_url('public/template/'); ?>js/bootstrap-tagsinput.min.js"></script>
    <!-- Google Recaptcha Api - Sadece Localhost İçin Geçerli -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

</body>
</html>
