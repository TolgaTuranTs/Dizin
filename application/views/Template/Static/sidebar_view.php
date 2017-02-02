<?php defined('BASEPATH') OR exit ('Bu Sayfaya Giriş İzniniz Bulunamamaktadır'); ?>
<!-- İçerik Alanı -->
<div class="container">

    <!-- Sidebar Alanı -->
    <div class="col-lg-3">
        <div class="panel-group">

            <!-- Son Eklenenler -->
            <div class="panel panel-primary" style="margin-bottom:20px">
                <div class="panel-heading">En Son Eklenen Siteler</div>
                <ul class="list-group son-eklenenler">
                    <?php 
						if(!empty($enson)){
						foreach($enson as $listele){ 
					?>
                    <li class="list-group-item">
                        <a href="<?php echo $listele['dizin_url']; ?>" target="_blank" data-toggle="tooltip" data-placement="bottom" title="<?php echo $listele['dizin_aciklama']; ?>">
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            <?php echo $listele['dizin_baslik']; ?>
                        </a>
                    </li>
					<?php }} ?>
                </ul>
            </div>
            <!--#Son Eklenenler -->

            <!-- Menüler -->
            <div class="panel panel-primary">
                <div class="panel-heading">Sayfalar</div>
                <ul class="list-group son-eklenenler">
                    <li class="list-group-item">
                        <a href="<?php echo site_url('site-ekle'); ?>" data-toggle="tooltip" data-placement="bottom" title="Deneme">
                            <i class="fa fa-arrow-right" aria-hidden="true"></i> Sitenizi Ekleyin
                        </a>
                    </li>
                    <?php foreach($sayfalar as $sayfa){ ?>
                    <li class="list-group-item">
                    <a href="<?php echo site_url('sayfa/'.$sayfa['sayfa_seflink'].''); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo $sayfa['sayfa_baslik']; ?>">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i> <?php echo $sayfa['sayfa_baslik']; ?>
                    </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <!--#Menüler -->

            <!-- Sponsor Reklam -->
            <div class="panel panel-primary" style="margin-top:20px;width:100%">
                <div class="panel-heading">Sponsor Reklam</div>
                <div>
                    <?php echo $ayarlar->site_reklam; ?>
                </div>

            </div>
            <!--#Sponsor Reklam -->

        </div>
    </div>
    <!--#Sidebar Alanı -->
