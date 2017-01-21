<?php defined('BASEPATH') OR exit('Bu Sayfay Giriş İzniniz Bulunmamaktadır'); ?>
<!-- Sayfa Okuma Alanı -->
<div class="col-lg-9">
    <div class="panel panel-primary">
        <div class="panel-heading"><?php echo $sayfa->sayfa_baslik; ?> Sayfa</div>
        <div class="panel-body">
            <div class="col-lg-12" style="padding:10px 10px 10px 10px">
                <p style="line-height:33px">
                    <?php echo $sayfa->sayfa_text; ?>
                </p>
            </div>
        </div>
    </div>
</div>
<!--#Sayfa Okuma Alanı -->