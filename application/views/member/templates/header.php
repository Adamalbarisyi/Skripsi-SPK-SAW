<?php
$hal = $this->uri->segment(1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SPK || Pembelian Tanah Kavling di Yogyakarta</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('assets/frondend/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/frondend/vendor/animate.css/animate.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/frondend/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/frondend/vendor/ionicons/css/ionicons.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/frondend/vendor/venobox/venobox.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/frondend/vendor/owl.carousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/frondend/vendor/slick/slick.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/frondend/vendor/slick/slick-theme.css') ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('assets/frondend/css/style.css') ?>" rel="stylesheet">

</head>
<!-- ======= Header ======= -->
<header id="header">

    <div id="topbar">
        <div class="container">
            <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="logo float-left">
            <!-- Uncomment below if you prefer to use an image logo -->
            <h1 class="text-light"><a href="#intro" class="scrollto"><span>KPTI</span></a></h1>
            <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
        </div>

        <nav class="main-nav float-right d-none d-lg-block">
            <ul>
                <li class="<?=($hal=='beranda')?'active':'';?>"><a href="<?php echo base_url('beranda') ?>">Beranda</a></li>
                <li class="<?=($hal=='produk')?'active':'';?>"><a href="<?php echo base_url('produk') ?>">Produk</a></li>
                <li class="<?=($hal=='artikel')?'active':'';?>"><a href="<?php echo base_url('artikel') ?>">Artikel</a></li>
                <li class="drop-down"><a href="#">Tentang Kami</a>
                    <ul>
                        <li><a href="#">Info Sistem</a></li>
                        <li><a href="#">Info Metode</a></li>
                        <li><a href="#">Tentang Perusahaan</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url('login') ?>" class="btn btn-sm btn-danger mr-2">LOGIN</a></li>
                <li><a href="<?php echo base_url('register') ?>" class="btn btn-sm btn-danger">Register</a></li>


            </ul>
        </nav><!-- .main-nav -->

    </div>
</header><!-- #header -->


