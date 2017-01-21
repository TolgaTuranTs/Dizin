<?php defined('BASEPATH') OR exit ('Bu Sayfaya Giriş İzniniz Bulunamamaktadır'); ?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">

    <meta name="author" content="Coderthemes">

    <!-- App Favicon -->

    <link rel="shortcut icon" href="<?php echo base_url('public/admin/'); ?>images/favicon.ico">

    <!-- App title -->

    <title><?php echo $title; ?></title>

    <!--Morris Chart CSS -->

    <link rel="stylesheet" href="<?php echo base_url('public/admin/'); ?>plugins/morris/morris.css">

    <!-- Switchery css -->

    <link href="<?php echo base_url('public/admin/'); ?>plugins/switchery/switchery.min.css" rel="stylesheet" />

    <!-- Etiket -->

    <link href="<?php echo base_url('public/admin/'); ?>plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />

    <!-- Data Table -->

    <link href="<?php echo base_url('public/admin/'); ?>plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- App CSS -->

    <link href="<?php echo base_url('public/admin/'); ?>css/style.css" rel="stylesheet" type="text/css" />

    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

    <![endif]-->

    <!-- Modernizr js -->

    <script src="<?php echo base_url('public/admin/'); ?>js/modernizr.min.js"></script>

</head>

<body>



<!-- Header Alanı -->

<header id="topnav">



    <!-- Üst Alan -->

    <div class="topbar-main">

        <div class="container">



            <!-- Logo Alanı -->

            <div class="topbar-left">

                <a href="<?php echo site_url('Cms'); ?>" class="logo">

                    <i class="zmdi zmdi-group-work icon-c-logo"></i>
                    <span>Yönetim Paneli</span>

                </a>

            </div>

            <!-- Logo Alanı -->



            <!-- Head Menüleri -->

            <div class="menu-extras">

                <ul class="nav navbar-nav pull-right">

                    <!-- Mobil Menü -->

                    <li class="nav-item">

                        <a class="navbar-toggle">

                            <div class="lines">

                                <span></span>

                                <span></span>

                                <span></span>

                            </div>

                        </a>

                    </li>

                    <!--#Mobil Menü -->



                    <!-- İletişim Alanı -->

                    <li class="nav-item dropdown notification-list">

                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"

                           aria-haspopup="false" aria-expanded="false">

                            <i class="zmdi zmdi-email noti-icon"></i>

                            <span class="noti-icon-badge"></span>

                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg" aria-labelledby="Preview">

                            <div class="dropdown-item noti-title bg-success">

                                <h5><small><span class="label label-danger pull-xs-right"><?php echo $toplam; ?></span>Gelen İletişim Mesajı</small></h5>

                            </div>

                            <?php

                                if(!empty($iletisim)){

                                    foreach($iletisim as $row){

                            ?>

                            <a href="<?php echo site_url('Cms/Contact/oku/'.$row['iletisim_id'].''); ?>" class="dropdown-item notify-item">

                                <div class="notify-icon bg-faded">

                                    <img src="<?php echo base_url('public/admin/'); ?>images/no-avatar.png" alt="img" class="img-circle img-fluid">

                                </div>

                                <p class="notify-details">

                                    <b><?php echo $row['adsoyad']; ?></b>

                                    <span><?php echo $row['baslik']; ?></span>

                                    <small class="text-muted"><?php echo $row['tarih']; ?></small>

                                </p>

                            </a>

                            <?php }} ?>

                            <a href="<?php echo site_url('Cms/Contact'); ?>" class="dropdown-item notify-item notify-all">

                                Tümünü Görüntüle

                            </a>

                        </div>

                    </li>

                    <!--#İletişim Alanı -->



                    <!-- Profil Alanı -->

                    <li class="nav-item dropdown notification-list">

                        <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"

                           aria-haspopup="false" aria-expanded="false">

                            <img src="<?php echo base_url('public/admin/'); ?>images/no-avatar.png" alt="user" class="img-circle">

                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow profile-dropdown " aria-labelledby="Preview">

                            <!-- item-->

                            <div class="dropdown-item noti-title">

                                <h5 class="text-overflow"><small>Hoşgeldiniz</small> </h5>

                            </div>

                            <a href="<?php echo site_url('Cms/profil'); ?>" class="dropdown-item notify-item">

                                <i class="ion-android-social-user"></i> <span>Kişisel Profilim</span>

                            </a>

                            <a href="<?php echo site_url('Cms/sifre'); ?>" class="dropdown-item notify-item">

                                <i class="zmdi zmdi-lock-open"></i> <span>Şifremi Değiştir</span>

                            </a>

                            <a href="<?php echo site_url('Cms/cikis'); ?>" class="dropdown-item notify-item">

                                <i class="zmdi zmdi-power"></i> <span>Oturumu Sonlandır</span>

                            </a>

                        </div>

                    </li>

                    <!--#Profil Alanı -->

                </ul>

            </div>

            <div class="clearfix"></div>

            <!--#Head Menüleri -->

        </div>

    </div>

    <!--#Üst Alan -->



    <!-- Menü Alanı -->

    <div class="navbar-custom">

        <div class="container">

            <div id="navigation">

                <ul class="navigation-menu">

                    <li>

                        <a href="<?php echo site_url('Cms'); ?>" title="Anasayfa">

                            <i class="ion-home"></i>

                            <span> Anasayfa </span>

                        </a>

                    </li>

                    <li>

                        <a href="<?php echo site_url('Cms/Ayarlar'); ?>" title="Site Ayarları">

                            <i class="ion-settings"></i>

                            <span> Site Ayarları </span>

                        </a>

                    </li>

                    <li class="has-submenu">

                        <a href="<?php echo site_url('Cms/Kategori'); ?>">

                            <i class="ion-folder"></i>

                            <span> Kategoriler Paneli </span>

                        </a>

                        <ul class="submenu megamenu">

                            <li>

                                <ul>

                                    <li>

                                        <a href="<?php echo site_url('Cms/Kategori/Ekle'); ?>">Kategori Ekle</a>

                                    </li>

                                    <li>

                                        <a href="<?php echo site_url('Cms/Kategori'); ?>">Kategori İşlemleri</a>

                                    </li>

                                </ul>

                            </li>

                        </ul>

                    </li>

                    <li class="has-submenu">

                        <a href="<?php echo site_url('Cms/Sayfa'); ?>">

                            <i class="ion-document"></i>

                            <span> Sayfa Paneli </span>

                        </a>

                        <ul class="submenu megamenu">

                            <li>

                                <ul>

                                    <li>

                                        <a href="<?php echo site_url('Cms/Sayfa/Ekle'); ?>">Sayfa Ekle</a>

                                    </li>

                                    <li>

                                        <a href="<?php echo site_url('Cms/Sayfa'); ?>">Sayfa İşlemleri</a>

                                    </li>

                                </ul>

                            </li>

                        </ul>

                    </li>

                    <li>

                        <a href="<?php echo site_url('Cms/Dizin'); ?>">

                            <i class="ion-document-text"></i>

                            <span> Dizin İşlemleri </span>

                        </a>

                    </li>

                </ul>

            </div>

        </div>

    </div>

    <!--$Menü Alanı -->



</header>

<!--#Header Alanı -->

