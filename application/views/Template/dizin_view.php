<?php defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır'); ?>

<!-- İçerik Alanı -->
<div class="col-lg-9">
    <div class="panel panel-primary">
        <div class="panel-heading"><?php echo $kategori_sef; ?> Kategorisine Eklenen Siteler</div>
        <div class="panel-body">
            <div class="col-lg-12">
                <ul class="list-group link">
                    <?php
                        if(!empty($dizinler)){
                        foreach($dizinler as $dizin){
                    ?>
                    <li class="list-group-item">
                        <i class="fa fa-share" aria-hidden="true"></i>
                        <a href="<?php echo $dizin['dizin_url']; ?>" target="_blank" data-toggle="tooltip" data-placement="bottom" title="<?php echo $dizin['dizin_etiket']; ?>"> <?php echo $dizin['dizin_baslik']; ?></a>
                        , <?php echo $dizin['dizin_aciklama']; ?>
                    </li>
                    <?php } }else{
                        // Dizine Site Eklenmemişse
                        echo '<h3 style="color:blue;margin-top:30px">Bu Kategoriye Site Eklenmemiş , İlk Ekleyen Olmak İstemezmisiniz ?</h3>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--#İçerik Alanı -->
