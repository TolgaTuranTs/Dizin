<?php defined('BASEPATH') OR exit('Buraya Giriş İzniniz Bulunamamaktadır'); ?>
<div class="wrapper">
    <div class="container">
        <!-- Neredeyim Kısmı -->
        <div class="row">
            <div class="col-xs-12 m-t-20">
                <ol class="breadcrumb">
                    <li><a href="<?php echo site_url('Cms'); ?>">Anasayfa</a></li>
                    <li class="active">Dizin Listesi</li>
                </ol>
            </div>
        </div>
        <!--#Neredeyim Kısmı -->
        <!-- Dizin Listeleme Alanı -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title"><b>Dizin Listesi</b></h4>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Dizin Başlığı</th>
                            <th>Ekleyen</th>
                            <th>Kategorisi</th>
                            <th>Tarih</th>
                            <th>Durum</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                                if(!empty($dizinler)){
                                foreach($dizinler as $dizin){
                            ?>
                            <tr>
                                <td><?php echo $dizin['dizin_baslik']; ?></td>
                                <td><?php echo $dizin['dizin_ekleyen']; ?></td>
                                <td><?php echo $dizin['dizin_kategori']; ?></td>
                                <td><?php echo $dizin['dizin_tarih']; ?></td>
                                <td><?php
                                    $durum = $dizin['dizin_durum'];
                                    if($durum == 0){
                                        echo 'Onaysız';
                                    }elseif($durum == 1){
                                        echo 'Onaylı';
                                    }
                                ?></td>
                                <td>
                                    <a href="<?php echo site_url('Cms/Dizin/duzenle/'.$dizin['dizin_id'].''); ?>" title="Dizini Düzenle">Düzenle</a>
                                    /
                                    <a href="<?php echo site_url('Cms/Dizin/sil/'.$dizin['dizin_id'].''); ?>" title="Dizini Sil">Sil</a>
                                    /
                                    <a href="<?php echo site_url('Cms/Dizin/detay/'.$dizin['dizin_id'].''); ?>" title="Dizin Detayı">Detay</a>
                                </td>
                            </tr>
                            <?php } } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--#Dizin Listeleme Alanı -->
    </div>
</div>
