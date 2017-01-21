<?php defined('BASEPATH') OR exit ('Bu Sayfaya Giriş İzniniz Bulunamamaktadır'); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <title><?php  echo $ayarlar->site_baslik.' '.$title.' ' ?></title>
    <meta charset="utf-8">
    <meta name="description" content="<?php echo $ayarlar->site_desc; ?>"/>
    <meta name="keywords" content="<?php echo $ayarlar->site_key; ?>"/>
    <meta name="author" content="Tolga TURAN"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('public/template/'); ?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('public/template/'); ?>font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('public/template/'); ?>css/style.css">
    <!-- Tag İnput Css -->
    <link rel="stylesheet" href="<?php echo base_url('public/template/'); ?>css/bootstrap-tagsinput.css">
</head>
<body>

<!-- Header Alanı -->
<nav class="navbar navbar-inverse menu-alan">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url(); ?>" title="<?php echo $ayarlar->site_baslik; ?>"><?php echo $ayarlar->site_logo; ?></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="<?=(current_url()==base_url('')) ? 'active':''?>">
                    <a href="<?php echo site_url(); ?>" title="">Anasaysa</a>
                </li>
                <li class="<?=(current_url()==base_url('site-ekle')) ? 'active':''?>">
                    <a href="<?php echo site_url('site-ekle'); ?>" title="Dizine Site Ekle">Site Ekle</a>
                </li>
                <li class="<?=(current_url()==base_url('iletisim')) ? 'active':''?>">
                    <a href="<?php echo site_url('iletisim'); ?>" title="Bizimle İletişime Geçin">İletişim</a>
                </li>
            </ul>
            <div class="nav navbar-nav navbar-right">
                <form class="navbar-form navbar-left" action="<?php echo site_url('ara'); ?>" method="POST">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Aramak İstediğiniz Kelime">
                        <div class="input-group-btn">
                            <button name="searchF" class="btn btn-default" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</nav>
<!--#Header Alanı --> 