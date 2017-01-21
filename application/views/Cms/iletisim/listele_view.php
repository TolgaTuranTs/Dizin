<?php defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır'); ?>

<div class="wrapper">

    <div class="container">

        <!-- Neredeyim Kısmı -->

        <div class="row">

            <div class="col-xs-12 m-t-20">

                <ol class="breadcrumb">

                    <li><a href="<?php echo site_url('Cms'); ?>">Anasayfa</a></li>

                    <li class="active">İletişim Listesi</li>

                </ol>

            </div>

        </div>

        <!--#Neredeyim Kısmı -->

        <!-- Listeleme İşlemleri -->

        <div class="row">

            <div class="col-sm-12">

                <div class="card-box">

                    <h4 class="header-title m-t-0 m-b-30">İletişim Listesi</h4>

                    <div class="row">

                        <table class="table table-hover">

                            <thead>

                            <tr>

                                <th>Gönderen</th>

                                <th>Konu</th>

                                <th>Tarih</th>

                                <th>İşlemler</th>

                            </tr>

                            </thead>

                            <tbody>

                                <?php

                                if(!empty($iletisimler)){

                                    foreach($iletisimler as $iletisim){

                                ?>

                                <tr>

                                    <td><?php echo $iletisim['adsoyad']; ?></td>

                                    <td><?php echo $iletisim['baslik']; ?></td>

                                    <td><?php echo $iletisim['tarih']; ?></td>

                                    <td>

                                        <a href="<?php echo site_url('Cms/Contact/oku/'.$iletisim['iletisim_id'].''); ?>" title="Mesajı Oku">Oku</a>

                                        /

                                        <a href="<?php echo site_url('Cms/Contact/sil/'.$iletisim['iletisim_id'].''); ?>" title="Mesajı Sil">Sil</a>

                                    </td>

                                </tr>

                                <?php } } ?>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

        <!--#Listeleme İşlemleri -->

    </div>

</div>

