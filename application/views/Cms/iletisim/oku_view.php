<?php defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır'); ?>

<div class="wrapper">

    <div class="container">

        <!-- Neredeyim Kısmı -->

        <div class="row">

            <div class="col-xs-12 m-t-20">

                <ol class="breadcrumb">

                    <li><a href="<?php echo site_url('Cms'); ?>">Anasayfa</a></li>

                    <li><a href="<?php echo site_url('Cms/iletisim'); ?>">İletişim Listesi</a></li>

                    <li class="active">Oku</li>

                </ol>

            </div>

        </div>

        <!--#Neredeyim Kısmı -->

        <!-- İletişim Okuma Alanı -->

        <div class="row">

            <div class="col-xs-12">

                <div class="card-box">

                    <div class="panel-body">

                        <div class="row">

                            <div class="col-xs-12">

                                <div class="pull-xs-left m-t-30">

                                    <address>

                                        Gönderen :<strong> <?php echo $iletisim->adsoyad; ?></strong><br>

                                        E-Mail :<strong> <?php echo $iletisim->email; ?></strong><br>

                                        İP : <strong><?php echo $iletisim->ip_adres; ?></strong><br>

                                    </address>

                                </div>

                                <div class="pull-xs-right m-t-30">

                                    <p><strong>Tarih : </strong> <span class="label label-danger"><?php echo $iletisim->tarih; ?></span></p>

                                </div>

                            </div>

                        </div>

                        <div class="m-h-50"></div>

                        <div class="row">

                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="clearfix">

                                    <h5 class="small text-inverse" style="color:red;font-size:14px"><b><?php echo $iletisim->baslik; ?></b></h5>

                                    <small style="font-size:14px;line-height:33px"><?php echo $iletisim->mesaj; ?></small>

                                </div>

                            </div>

                        </div>

                        <hr>

                        <div class="hidden-print">

                            <div class="pull-xs-right">

                                <a href="<?php echo site_url('Cms/Contact/sil/'.$iletisim->iletisim_id.''); ?>" title="Sil" class="btn btn-primary waves-effect waves-light">Mesajı Sil</a>

                            </div>

                            <div class="clearfix"></div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!--#İletişim Okuma Alanı -->

    </div>

</div>

