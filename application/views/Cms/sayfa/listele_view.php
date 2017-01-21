<?php defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır'); ?>
<div class="wrapper">
    <div class="container">
        <!-- Neredeyim Kısmı -->
        <div class="row">
            <div class="col-xs-12 m-t-20">
                <ol class="breadcrumb">
                    <li><a href="<?php echo site_url('Cms'); ?>">Anasayfa</a></li>
                    <li><a href="<?php echo site_url('Cms/Sayfa/ekle'); ?>">Sayfa Ekle</a></li>
                    <li class="active">Sayfa Listesi</li>
                </ol>
            </div>
        </div>
        <!--#Neredeyim Kısmı -->
        <!-- Listeleme İşlemleri -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30">Sayfa Listesi</h4>
                    <div class="row">
                        <table class="table table-bordered m-b-0">
                            <thead>
                                <tr>
                                    <th>Sayfa Başlığı</th>
                                    <th>Sayfa Seflinki</th>
                                    <th>İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if(!empty($sayfalar)){
                                    foreach($sayfalar as $sayfa){
                                ?>
                                <tr>
                                    <td><?php echo $sayfa['sayfa_baslik']; ?></td>
                                    <td><?php echo $sayfa['sayfa_seflink']; ?></td>
                                    <td>
                                        <a href="<?php echo site_url('Cms/sayfa/duzenle/'.$sayfa['sayfa_id'].'') ?>" title="">Düzenle</a>
                                        /
                                        <a href="<?php echo site_url('Cms/sayfa/sil/'.$sayfa['sayfa_id'].'') ?>" title="">Sil</a>
                                    </td>
                                </tr>
                                <?php }} ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--#Listeleme İşlemleri -->
    </div>
</div>
