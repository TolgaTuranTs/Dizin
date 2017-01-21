<?php defined('BASEPATH') OR exit ('Bu Sayfaya Giriş İzniniz Bulunamamaktadır'); ?>
<!-- İçerik Alanı -->
<div class="col-lg-9">
    <div class="panel panel-primary">
        <div class="panel-heading">Dizin Kategorileri</div>
        <div class="panel-body">
            <div class="col-lg-12">
                <ul class="list-group kategori">
                    <?php foreach($kategoriler as $kategori){ ?>
                    <li class="list-group-item">
                        <i class="fa fa-folder-open-o" aria-hidden="true"></i>
                        <a href="<?php echo site_url('dizin/'.$kategori['kategori_seflink'].'') ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo $kategori['kategori_baslik']; ?>">
                            <?php echo $kategori['kategori_baslik']; ?>
                            (<?php
                            /**
                             * Kategori de Kaçtane Site Olduğunu Gösterir
                             */
                            $toplam = $this->tema->toplam_dizinler($kategori['kategori_seflink']);
                            echo $toplam;
                            ?>)
                        </a>
                    </li>
                   <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--#İçerik Alanı -->