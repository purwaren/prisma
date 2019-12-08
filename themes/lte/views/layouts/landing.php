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
    <meta name="description" content="">
    <meta name="author" content="">
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
                            'label'=>'Data Unit',
                            'url' => array('#'),
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
                            <li class="link-item"><a href="#">Profile PRISMA</a></li>
                            <li class="link-item"><a href="#">Pendiri</a></li>
                            <li class="link-item"><a href="#">Unit</a></li>
                            <li class="link-item"><a href="#">Cara Bergabung</a></li>
                        </ul>
                    </div><!--//sub-col-->
                    <div class="sub-col col-12 col-md-4">
                        <h4 class="col-title">Informasi Lain</h4>
                        <ul class="footer-links list-unstyled">
                            <li class="link-item"><a href="<?php echo Yii::app()->createUrl('site/login') ?>">Web Admin</a></li>
                            <li class="link-item"><a href="#">Berita</a></li>
                            <li class="link-item"><a href="#">Event</a></li>
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

<!-- News Modal 1-->
<div id="news-modal-1" class="news-modal modal modal-fullscreen" tabindex="-1" role="dialog"
     aria-labelledby="newsModal1Label">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title text-center" id="newsModal1Label">School Concert</h4>

            </div><!--//modal-header-->
            <div class="modal-body">
                <div class="meta text-center">Thursday, 16th August 2017</div>
                <div class="post">
                    <p><img class="img-fluid"
                            src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/news/news-1.jpg" alt=""/></p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                        mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                        quis enim.</p>
                    <p>Maecenas ac turpis sit amet leo semper ultricies lobortis sed purus. Integer erat felis, maximus
                        in placerat vel, fermentum a libero. Ut quis mollis est. Pellentesque semper nibh ut scelerisque
                        tincidunt. Nullam commodo quam eu lectus ullamcorper, quis sagittis ligula sagittis. Fusce id
                        pellentesque risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                        cubilia Curae.</p>
                </div>
            </div><!--//modal-body-->
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-primary mx-auto" data-dismiss="modal">Close</button>
            </div>
        </div><!--//modal-content-->
    </div>
</div><!--//modal-->

<!-- News Modal 2-->
<div id="news-modal-2" class="news-modal modal modal-fullscreen" tabindex="-1" role="dialog"
     aria-labelledby="newsModal2Label">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title text-center" id="newsModal2Label">Year 6 Sports Day</h4>
            </div><!--//modal-header-->
            <div class="modal-body">
                <div class="meta text-center">Friday, 8th June 2017</div>
                <div class="post">
                    <p><img class="img-fluid"
                            src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/news/news-2.jpg" alt=""/></p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                        mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                        quis enim.</p>
                    <p>Maecenas ac turpis sit amet leo semper ultricies lobortis sed purus. Integer erat felis, maximus
                        in placerat vel, fermentum a libero. Ut quis mollis est. Pellentesque semper nibh ut scelerisque
                        tincidunt. Nullam commodo quam eu lectus ullamcorper, quis sagittis ligula sagittis. Fusce id
                        pellentesque risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                        cubilia Curae.</p>
                    <p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                        consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,
                        tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam
                        ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.
                        Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing
                        sem neque sed ipsum.</p>
                </div>
            </div><!--//modal-body-->
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-primary mx-auto" data-dismiss="modal">Close</button>
            </div>
        </div><!--//modal-content-->
    </div>
</div><!--//modal-->

<!-- News Modal 3-->
<div id="news-modal-3" class="news-modal modal modal-fullscreen" tabindex="-1" role="dialog"
     aria-labelledby="newsModal3Label">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title text-center" id="newsModal3Label">ICT Week</h4>
            </div><!--//modal-header-->
            <div class="modal-body">
                <div class="meta text-center">Tuesday, 24th May 2017</div>
                <div class="post">
                    <p><img class="img-fluid"
                            src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/news/news-3.jpg" alt=""/></p>
                    <p>Suspendisse et accumsan velit, non sollicitudin nisl. Donec dapibus augue eu viverra eleifend.
                        Etiam finibus eu arcu nec tempus. Sed luctus metus leo, non pellentesque tortor tempor aliquam.
                        Sed sit amet egestas est. Sed varius, urna ac bibendum porta, nunc risus suscipit turpis, sed
                        condimentum neque metus non purus. Quisque volutpat nulla dignissim diam malesuada, id tincidunt
                        orci scelerisque. Phasellus est orci, varius sit amet imperdiet ac, faucibus id urna. Mauris
                        varius odio et nisl finibus, sed fringilla ligula eleifend.</p>
                    <p>Curabitur volutpat bibendum mi sed hendrerit. Etiam commodo molestie facilisis. Nulla sed lectus
                        eu metus consequat vehicula eu ac justo. Phasellus posuere vehicula rhoncus. Praesent a molestie
                        tortor. Phasellus ornare imperdiet vehicula. Vivamus nec odio vitae ligula semper facilisis quis
                        id odio.</p>
                </div>
            </div><!--//modal-body-->
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-primary mx-auto" data-dismiss="modal">Close</button>
            </div>
        </div><!--//modal-content-->
    </div>
</div><!--//modal-->

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

