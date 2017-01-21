<?php defined('BASEPATH') OR exit('Buraya Giriş İzniniz Bulunamamaktadır'); ?>
<div class="wrapper">
    <div class="container">

        <!-- Neredeyim Kısmı -->
        <div class="row">
            <div class="col-xs-12 m-t-20">
                <ol class="breadcrumb">
                    <li><a href="<?php echo site_url('Cms'); ?>">Anasayfa</a></li>
                    <li><a href="<?php echo site_url('Cms/Kategori/ekle'); ?>">Kategori Ekle</a></li>
                    <li class="active">Kategori Listesi</li>
                </ol>
            </div>
        </div>
        <!--#Neredeyim Kısmı -->

        <!-- Kategori Listeleme Alanı -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title"><b>Kategori Listesi</b></h4>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Kategori Adı</th>
                            <th>Kategori Seflinki</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                                if(!empty($kategoriler)){
                                foreach($kategoriler as $kategori){
                            ?>
                            <tr>
                                <td><?php echo $kategori['kategori_id']; ?></td>
                                <td><?php echo $kategori['kategori_baslik']; ?></td>
                                <td><?php echo $kategori['kategori_seflink']; ?></td>
                                <td>
                                    <a href="<?php echo site_url('Cms/Kategori/duzenle/'.$kategori['kategori_id'].'') ?>" title="Kategori Düzenle">Düzenle</a>
                                    /
                                    <a href="<?php echo site_url('Cms/Kategori/sil/'.$kategori['kategori_id'].'') ?>" title="Kategori Sil">Sil</a>
                                </td>
                            </tr>
                            <?php }} ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--#Kategori Listeleme Alanı -->

    </div>
</div>
