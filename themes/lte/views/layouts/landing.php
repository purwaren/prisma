<?php
/**
 * @var $this Controller
 * @var $content string
 * @var
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRISMA Kalkulator Tangan</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PRISMA Kalkulator Tangan adalah metode belajar matematika menggunakan 10 jari tangan">
    <meta name="author" content="purwaren">
    <meta name="keywords" content="prisma,sepuluh jari, jaritmatika,matematika,les,bimbel">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i|Source+Serif+Pro:400,600,700"
          rel="stylesheet">
    <!-- FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.8.0/js/all.js"
            integrity="sha384-ukiibbYjFS/1dhODSWD+PrZ6+CGCgf8VbyUH7bQQNUulL+2r59uGYToovytTf4Xm"
            crossorigin="anonymous"></script>
    <!-- Global CSS -->
    <link rel="stylesheet"
          href="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/plugins/flexslider/flexslider.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/css/theme-3.css">
    <link id="theme-style" rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/css/custom.css">

</head>

<body class="home-page has-hero">
<!-- ******HEADER****** -->
<header id="header" class="header">
    <div class="top-bar container-fluid">
        <nav class="main-nav navbar navbar-expand-md" role="navigation">

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbar-collapse">
                <span> </span>
                <span> </span>
                <span> </span>
            </button>
            <div id="navbar-collapse" class="navbar-collapse collapse">
                <?php $this->widget('zii.widgets.CMenu', array(
                    'items' => array(
                        array(
                            'label'=>'Beranda',
                            'url' => array('/site/index'),
                            'linkOptions'=>array('class'=>'nav-link')
                        ),
                        array(
                            'label'=>'Tentang PRISMA',
                            'url' => array('/site/about'),
                            'linkOptions'=>array('class'=>'nav-link')
                        ),
                        array(
                            'label'=>'PRISMA Cabang/Unit',
                            'url' => array('/site/unit'),
                            'linkOptions'=>array('class'=>'nav-link')
                        ),
                        array(
                            'label'=>'ABAMA Cabang/Unit',
                            'url' => 'https://abama.prismakalkulatortangan.id/index.php/site/unit',
                            'linkOptions'=>array('class'=>'nav-link')
                        ),
                        array(
                            'label'=>'CERMAT Cabang/Unit',
                            'url' => 'https://cermat.prismakalkulatortangan.id/index.php/site/unit',
                            'linkOptions'=>array('class'=>'nav-link')
                        ),
                        array(
                            'label'=>'Berita & Kegiatan',
                            'url' => array('#'),
                            'linkOptions'=>array('class'=>'nav-link')
                        ),
                        array(
                            'label'=>'Kontak',
                            'url' => array('/site/contact'),
                            'linkOptions'=>array('class'=>'nav-link')
                        ),
                        array(
                            'label'=>'Login',
                            'url' => array('/site/login'),
                            'linkOptions'=>array('class'=>'nav-link'),
                            'visible'=>Yii::app()->user->isGuest
                        ),
                        array(
                            'label'=>'Dashboard',
                            'url' => array('/site/dashboard'),
                            'linkOptions'=>array('class'=>'nav-link'),
                            'visible'=>!Yii::app()->user->isGuest
                        ),
                    ),
                    'encodeLabel' => false,
                    'htmlOptions' => array('class' => 'nav navbar-nav'),
                    'itemCssClass'=> 'nav-item',
                    'linkLabelWrapper' => null,
                )); ?>
            </div><!--//navabr-collapse-->
        </nav><!--//main-nav-->
    </div><!--//top-bar-->
    <div class="branding">
        <div class="container">
            <h1 class="tagline" style="padding-top: 0px !important">
                <img style="max-height: 60px" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/logo-prisma-grayscale.png"
                     alt="" class="img-responsive"></a>
                <img style="max-height: 60px"
                     src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/logo-prisma-white.png" alt=""
                     class="img-responsive">
            </h1>
        </div><!--//container-->
    </div><!--//branding-->
</header><!--//header-->

<?php echo $content ?>

<!-- ******FOOTER****** -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col col-12 col-lg-4">
                <div class="logo-holder">
                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/logo.png" alt="">
                </div><!--//logo-holder-->
                <div class="contact-details">
                    <div class="address">
                        Perum Argopeni Indah Blok A.1, Wonosobo, Jawa Tengah
                    </div><!--//address-->
                    <div class="contact">
                        <div class="item">T: <a href="#">(0286) 3326222</a></div>
                        <div class="item">M: <a href="#">081327027605</a></div>
                        <div class="item">E: <a href="#">zaenalahmad62@gmail.com</a></div>
                    </div><!--//contact-->
                </div>
            </div><!--//footer-col-->
            <div class="footer-col col-12 col-lg-8">
                <div class="footer-links row">
                    <div class="sub-col col-12 col-md-4">
                        <h4 class="col-title">Tentang PRISMA</h4>
                        <ul class="footer-links list-unstyled">
                            <li class="link-item"><a href="<?php echo Yii::app()->createUrl('site/about')?>">Tentang PRISMA</a></li>
                            <li class="link-item"><a href="<?php echo Yii::app()->createUrl('site/unit')?>">Cabang & Unit</a></li>
                            <li class="link-item"><a href="#">Cara Bergabung</a></li>
                        </ul>
                    </div><!--//sub-col-->
                    <div class="sub-col col-12 col-md-4">
                        <h4 class="col-title">Informasi Lain</h4>
                        <ul class="footer-links list-unstyled">
                            <li class="link-item"><a href="<?php echo Yii::app()->createUrl('site/login') ?>">Web Admin</a></li>
                            <li class="link-item"><a href="<?php echo Yii::app()->createUrl('site/news')?>">Berita</a></li>
                            <li class="link-item"><a href="<?php echo Yii::app()->createUrl('site/news')?>">Event</a></li>
                        </ul>
                    </div><!--//sub-col-->
                </div><!--//row-->
                <div class="divider"></div>
                <ul class="social-media list-inline">
                    <li class="list-inline-item"><a href="https://web.facebook.com/profile.php?id=100007456336047"><i
                                    class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                </ul>
            </div><!--//footer-col-->
        </div><!--//row-->

        <small class="copyright">Copyright &copy; <?php echo date('Y') ?> - PRISMA Kalkulator Tangan</small>
    </div>
    </div><!--//container-->
</footer><!--//footer-->

<!-- Javascript -->
<script type="text/javascript"
        src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/plugins/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/plugins/popper.min.js"></script>
<script type="text/javascript"
        src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/plugins/back-to-top.js"></script>
<script type="text/javascript"
        src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/js/main.js"></script>


<!--//Page Specific JS -->
<script type="text/javascript"
        src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/js/home.js"></script>

<!-- Modal Video -->
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/js/modal-video.js"></script>

</body>
</html> 

