<!DOCTYPE html>
<html lang="en">
<head>
    <title>Responsive website template for schools</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i|Source+Serif+Pro:400,600,700" rel="stylesheet">
    <!-- FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.8.0/js/all.js" integrity="sha384-ukiibbYjFS/1dhODSWD+PrZ6+CGCgf8VbyUH7bQQNUulL+2r59uGYToovytTf4Xm" crossorigin="anonymous"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/plugins/flexslider/flexslider.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/css/theme-1.css">

</head>

<body class="home-page has-hero">
<!-- ******HEADER****** -->
<header id="header" class="header">
    <div class="top-bar container-fluid">
        <nav class="main-nav navbar navbar-expand-md" role="navigation">

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                <span> </span>
                <span> </span>
                <span> </span>
            </button>

            <div id="navbar-collapse" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="news.html">News &amp; Events</a></li>
                    <li class="nav-item"><a class="nav-link" href="admissions.html">Admissions</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">More Pages <i class="fas fa-angle-down"></i></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="staff.html">School Staff</a>
                            <a class="dropdown-item" href="fees.html">School Fees</a>
                            <a class="dropdown-item" href="calendar.html">School Calendar</a>
                            <a class="dropdown-item" href="docs.html">School Docs</a>
                            <a class="dropdown-item" href="gallery.html">Gallery</a>
                            <a class="dropdown-item" href="gallery-single.html">Gallery Album</a>
                            <a class="dropdown-item" href="blog-single.html">Blog Single</a>
                            <a class="dropdown-item" href="jobs.html">Job Vacancies</a>
                            <a class="dropdown-item" href="job-single.html">Job Single</a>
                            <a class="dropdown-item" href="privacy.html">Privacy Policy</a>
                            <a class="dropdown-item" href="terms.html">Terms and Conditions</a>
                        </div>
                    </li><!--//dropdown-->
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul><!--//nav-->
            </div><!--//navabr-collapse-->
        </nav><!--//main-nav-->
    </div><!--//top-bar-->
    <div class="branding">
        <div class="container">
            <h1 class="logo">
                <a href="index.html"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/logo.png" alt=""></a>
            </h1><!--//logo-->
            <h2 class="tagline">Unlock potential and aim higher</h2>
        </div><!--//container-->
    </div><!--//branding-->
</header><!--//header-->

<section class="promo-section section section-on-bg">
    <div class="hero-slider-wrapper">
        <div class="flexslider hero-slider">
            <ul class="slides">
                <li class="slide slide-1">
                    <div class="container">
                        <div class="slide-box">
                            <div class="slide-box-inner">
                                <div class="text">"The object of education is to prepare the young to educate themselves throughout their lives."</div>
                                <a href="#" class="play-trigger" data-toggle="modal" data-target="#modal-video"><img class="play-icon" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/play-icon.svg" alt="">Watch School Video</a>
                            </div><!--//slide-box-inner-->
                        </div><!--//slide-box-->
                    </div>
                </li>
                <li class="slide slide-2">
                    <div class="container">
                        <div class="slide-box">
                            <div class="slide-box-inner">
                                <div class="text">2 Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </div>
                                <div class="more-link">Read More</div>
                            </div><!--//slide-box-inner-->
                        </div><!--//slide-box-->
                    </div><!--//container-->
                </li>
                <li class="slide slide-3">
                    <div class="container">
                        <div class="slide-box">
                            <div class="slide-box-inner">
                                <div class="text">3 Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</div>
                                <div class="more-link">Read More</div>
                            </div><!--//slide-box-inner-->
                        </div><!--//slide-box-->
                    </div><!--//container-->
                </li>
                <li class="slide slide-4">
                    <div class="container">
                        <div class="slide-box">
                            <div class="slide-box-inner">
                                <div class="text">4 Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
                                <div class="more-link">Read More</div>
                            </div><!--//slide-box-inner-->
                        </div><!--//slide-box-->
                    </div><!--//container-->
                </li>
            </ul>
        </div>
    </div><!--//hero-slider-wrapper-->

    <div class="hero-overlay">
        <div class="container-fluid">

            <div class="overlay-upper">
                <div class="container clearfix">
                    <div class="contact-info float-left">
                        <div class="item">Tel: <a href="tel:0800123456">0800 123 45678</a></div>
                        <div class="item">Email: <a href="mailto:info@yourschoolsite.com">info@yourschoolsite.com</a></div>
                    </div><!--//contact-info-->
                    <ul class="social-media list-inline float-right">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-flickr" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                    </ul>
                </div><!--//container-->
            </div><!--//overlay-upper-->
            <div class="overlay-lower">
                <div class="container">
                    <div class="links">
                        <div class="link"><a href="about.html" title="Our School"><i class="fas fa-university link-icon" aria-hidden="true"></i><span class="link-text">Our School</span></a></div>
                        <div class="link"><a href="admissions.html" title="Admissions"><i class="fas fa-graduation-cap link-icon" aria-hidden="true"></i><span class="link-text">Admissions</span></a></div>
                        <div class="link"><a href="news.html" title="News &amp; Events"><i class="fas fa-newspaper link-icon" aria-hidden="true"></i><span class="link-text">News &amp; Events</span></a></div>
                        <div class="link"><a href="docs.html" title="Key Info"><i class="fas fa-info-circle link-icon" aria-hidden="true"></i><span class="link-text">Key Info</span></a></div>
                    </div>
                </div><!--//container-->
            </div><!--//overlay-lower-->
        </div>
    </div><!--//hero-overlay-->

    <div class="hero-badge">
        <div class="badge-content">
            <div class="script">Open Day</div>
            <div>2020</div>
            <a href="admissions.html" class="link-mask"></a>
        </div><!--//bagde-content-->
    </div><!--//hero-badge-->





</section><!--//promo-section-->

<div class="home-cols-wrapper">
    <div class="container">
        <div class="row">
            <section class="col-main col-12 col-lg-8">
                <div class="welcome-block block">
                    <div class="content">
                        <h3 class="block-title">Welcome from the Head Master</h3>
                        <div class="intro">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pretium sollicitudin orci, ac aliquet felis elementum tristique. Etiam vel sodales nisl. Ut eu justo lacus. Mauris vitae consectetur tellus, eget consequat tellus. Nunc aliquet mollis scelerisque. Duis odio libero, hendrerit vel urna vitae, rhoncus porttitor turpis. In in felis id orci posuere egestas. In dapibus ac velit iaculis dapibus. Quisque rhoncus hendrerit nulla in luctus.</p>
                            <div class="source">
                                <div class="name script">Dr. David Walsh</div>
                                <div class="title">Head Master</div>
                            </div><!--//source-->
                        </div><!--//intro-->
                    </div><!--//content-->
                    <div class="figure">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/headmaster.jpg" alt="">
                    </div><!--//figure-->
                </div><!--//welcome-block-->
                <div class="news-block block">
                    <h3 class="block-title">Latest News</h3>
                    <div class="news-items">
                        <div class="item item-1">
                            <div class="thumb-holder">

                            </div><!--//thumb-holder-->
                            <div class="content-holder">
                                <h4 class="news-title"><a href="#" data-toggle="modal" data-target="#news-modal-1">School Concert</a></h4>
                                <div class="intro">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis...
                                </div><!--//intro-->
                                <a class="btn btn-ghost" href="#" data-toggle="modal" data-target="#news-modal-1">Read more<i class="fas fa-angle-right" aria-hidden="true"></i></a>
                            </div><!--//content-holder-->
                        </div><!--//item-->
                        <div class="item item-2">
                            <div class="thumb-holder">

                            </div><!--//thumb-holder-->
                            <div class="content-holder">
                                <h4 class="news-title"><a href="#" data-toggle="modal" data-target="#news-modal-2">Year 6 Sports Day</a></h4>
                                <div class="intro">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis...
                                </div><!--//intro-->
                                <a class="btn btn-ghost" href="#" data-toggle="modal" data-target="#news-modal-2">Read more<i class="fas fa-angle-right" aria-hidden="true"></i></a>
                            </div><!--//content-holder-->
                        </div><!--//item-->
                        <div class="item item-3">
                            <div class="thumb-holder">

                            </div><!--//thumb-holder-->
                            <div class="content-holder">
                                <h4 class="news-title"><a href="#" data-toggle="modal" data-target="#news-modal-3">ICT Week</a></h4>
                                <div class="intro">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis...
                                </div><!--//intro-->
                                <a class="btn btn-ghost" href="#" data-toggle="modal" data-target="#news-modal-3">Read more<i class="fas fa-angle-right" aria-hidden="true"></i></a>
                            </div><!--//content-holder-->
                        </div><!--//item-->
                    </div><!--//news-items-->
                </div><!--//news-block-->
            </section><!--//col-main-->

            <aside class="col-side col-12 col-lg-4">
                <div class="shortcuts-block block">
                    <div class="item tbg-accent">
                        <i class="fas fa-download" aria-hidden="true"></i>
                        <span class="text"><a href="#">Download Prospectus</a></span>
                    </div><!--//item-->
                    <div class="item tbg-dark">
                        <i class="fas fa-eye" aria-hidden="true"></i>
                        <span class="text"><a href="#">Open Day 2017</a></span>
                    </div><!--//item-->
                    <div class="item tbg-primary">
                        <i class="fas fa-binoculars" aria-hidden="true"></i>
                        <span class="text"><a href="#">Virtual Tour</a></span>
                    </div><!--//item-->
                    <div class="item tbg-secondary">
                        <i class="fas fa-images" aria-hidden="true"></i>
                        <span class="text"><a href="#">Photo Gallery</a></span>
                    </div><!--//item-->
                </div><!--//shortcuts-block-->
                <div class="events-block block">
                    <h3 class="block-title">Upcoming Events</h3>
                    <div class="events-items">
                        <div class="item">
                            <div class="time">
                                <div class="time-inner">
                                    <div class="date">26</div>
                                    <div class="month">Jan</div>
                                </div>
                            </div><!--//time-->
                            <div class="details">
                                <h4 class="event-title">Open Evening</h4>
                                <div class="intro">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor...
                                </div><!--//intro-->
                            </div><!--//details-->
                        </div><!--//item-->
                        <div class="item">
                            <div class="time">
                                <div class="time-inner">
                                    <div class="date">07</div>
                                    <div class="month">Dec</div>
                                </div>
                            </div><!--//time-->
                            <div class="details">
                                <h4 class="event-title">Drama Workshop</h4>
                                <div class="intro">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor...
                                </div><!--//intro-->
                            </div><!--//details-->
                        </div><!--//item-->
                        <div class="item">
                            <div class="time">
                                <div class="time-inner">
                                    <div class="date">20</div>
                                    <div class="month">Nov</div>
                                </div>
                            </div><!--//time-->
                            <div class="details">
                                <h4 class="event-title">Science Day</a></h4>
                                <div class="intro">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor...
                                </div><!--//intro-->
                            </div><!--//details-->
                        </div><!--//item-->
                        <div class="action text-center">
                            <a class="btn btn-ghost-alt" href="calendar.html">View Calendar<i class="fas fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div><!--//events-items-->
                </div><!--//block-->
            </aside><!--//col-side-->

        </div><!--//row-->
    </div><!--//container-->
</div><!--//home-cols-wrapper-->

<section class="awards-section">
    <div class="container">
        <div class="logos row">
            <div class="logo-item col-md-2 col-4">
                <a href="#"><img class="img-fluid" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/awards/award1.jpg" alt=""></a>
            </div>
            <div class="logo-item col-md-2 col-4">
                <a href="#"><img class="img-fluid" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/awards/award2.jpg" alt=""></a>
            </div>
            <div class="logo-item col-md-2 col-4">
                <a href="#"><img class="img-fluid" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/awards/award3.jpg" alt=""></a>
            </div>
            <div class="logo-item col-md-2 col-4">
                <a href="#"><img class="img-fluid" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/awards/award4.jpg" alt=""></a>
            </div>
            <div class="logo-item col-md-2 col-4">
                <a href="#"><img class="img-fluid" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/awards/award5.jpg" alt=""></a>
            </div>
            <div class="logo-item col-md-2 col-4">
                <a href="#"><img class="img-fluid" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/awards/award6.jpg" alt=""></a>
            </div>
        </div><!--//logos-->
    </div>
</section><!--//awards-section-->

<section class="reviews-section">
    <div class="container text-center">
        <div id="reviews-carousel" class="reviews-carousel carousel slide" data-ride="carousel">
            <!--//wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item carousel-item active">
                    <h3 class="review-title"><i class="fas fa-quote-left"></i>I really enjoy my day at Academy!<i class="fas fa-quote-right d-none d-md-inline"></i></h3>
                    <blockquote class="review mx-auto">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rhoncus porta libero, id maximus eros maximus quis. Etiam imperdiet fringilla massa eget efficitur.</p>
                    </blockquote><!--//review-->
                    <div class="source">
                        <div class="name">Emily Sandoval</div>
                        <div class="title">Year 7 Student</div>
                    </div><!--//source-->
                </div><!--//item-->
                <div class="item carousel-item">
                    <h3 class="review-title"><i class="fas fa-quote-left"></i>My teachers are great!<i class="fas fa-quote-right d-none d-md-inline"></i></h3>
                    <blockquote class="review mx-auto">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rhoncus porta libero, id maximus eros maximus quis. Etiam imperdiet fringilla massa eget efficitur.</p>
                    </blockquote><!--//review-->
                    <div class="source">
                        <div class="name">Jack Sanders</div>
                        <div class="title">Year 5 Student</div>
                    </div><!--//source-->
                </div><!--//item-->
                <div class="item carousel-item">
                    <h3 class="review-title"><i class="fas fa-quote-left"></i>The lessons are very interesting<i class="fas fa-quote-right d-none d-md-inline"></i></h3>
                    <blockquote class="review mx-auto">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rhoncus porta libero, id maximus eros maximus quis. Etiam imperdiet fringilla massa eget efficitur.</p>
                    </blockquote><!--//review-->
                    <div class="source">
                        <div class="name">Martha Simmons</div>
                        <div class="title">Year 6 Student</div>
                    </div><!--//source-->
                </div><!--//item-->
                <div class="item carousel-item">
                    <h3 class="review-title"><i class="fas fa-quote-left"></i>I love the after school clubs<i class="fas fa-quote-right d-none d-md-inline"></i></h3>
                    <blockquote class="review mx-auto">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rhoncus porta libero, id maximus eros maximus quis. Etiam imperdiet fringilla massa eget efficitur.</p>
                    </blockquote><!--//review-->
                    <div class="source">
                        <div class="name">Ling Wang</div>
                        <div class="title">Year 7 Student</div>
                    </div><!--//source-->
                </div><!--//item-->
                <div class="item carousel-item">
                    <h3 class="review-title"><i class="fas fa-quote-left"></i>I love studying at Academy<i class="fas fa-quote-right d-none d-md-inline"></i></h3>
                    <blockquote class="review mx-auto">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rhoncus porta libero, id maximus eros maximus quis. Etiam imperdiet fringilla massa eget efficitur.</p>
                    </blockquote><!--//review-->
                    <div class="source">
                        <div class="name">Nathan Brooks</div>
                        <div class="title">Year 7 Student</div>
                    </div><!--//source-->
                </div><!--//item-->

            </div><!--//carousel-inner-->

            <!--//Indicators-->
            <ol class="carousel-indicators">
                <li class="active" data-target="#reviews-carousel" data-slide-to="0">
                    <img class="img-fluid" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/profiles/profile-1.png" alt="">
                </li>
                <li data-target="#reviews-carousel" data-slide-to="1" class="">
                    <img class="img-fluid" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/profiles/profile-2.png" alt="">
                </li>
                <li data-target="#reviews-carousel" data-slide-to="2" class="">
                    <img class="img-fluid" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/profiles/profile-3.png" alt="">
                </li>
                <li data-target="#reviews-carousel" data-slide-to="3" class="">
                    <img class="img-fluid" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/profiles/profile-4.png" alt="">
                </li>
                <li data-target="#reviews-carousel" data-slide-to="4" class="">
                    <img class="img-fluid" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/profiles/profile-5.png" alt="">
                </li>
            </ol><!--//carousel-indicators-->

        </div>

    </div><!--//container-->
</section><!--//reviews-section-->

<section class="cta-section">
    <div class="container text-center">
        <h3 class="section-title">Sign up to our school newsletter</h3>
        <div class="section-intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes</div>
        <form class="signup-form mx-auto">
            <div class="form-row">
                <div class="form-group col-md-5 col-12">
                    <label for="firstname" class="sr-only">Name</label>
                    <input type="text" class="form-control" id="sname" name="sname" placeholder="Name">
                </div><!--//form-group-->
                <div class="form-group col-md-5 col-12">
                    <label for="firstname" class="sr-only">Email Address</label>
                    <input type="email" class="form-control" id="semail" name="semail" placeholder="Email Address">
                </div><!--//form-group-->

                <div class="btn-wrapper col-md-2 col-12">
                    <button type="submit" class="btn btn-cta btn-ghost btn-block">Sign Up<i class="fas fa-angle-right" aria-hidden="true"></i></button>
                </div>
            </div><!--//form-row-->

        </form>
    </div><!--//container-->
</section><!--//cta-section-->

<!-- ******FOOTER****** -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col col-12 col-lg-4">
                <div class="logo-holder">
                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/logo.png" alt="">
                </div><!--//logo-holder-->
                <div class="contact-details">
                    <div class="address">
                        Academy Grammar School<br>56 Kingston Road, London, KT2 6PY
                    </div><!--//address-->
                    <div class="contact">
                        <div class="item">T: <a href="#">0800 123 4567</a></div>
                        <div class="item">E: <a href="#">info@yourschool.com</a></div>
                    </div><!--//contact-->
                </div>
            </div><!--//footer-col-->
            <div class="footer-col col-12 col-lg-8">
                <div class="footer-links row">
                    <div class="sub-col col-12 col-md-4">
                        <h4 class="col-title">About Us</h4>
                        <ul class="footer-links list-unstyled">
                            <li class="link-item"><a href="#">The School</a></li>
                            <li class="link-item"><a href="#">Governors</a></li>
                            <li class="link-item"><a href="#">Teachers</a></li>
                            <li class="link-item"><a href="#">Admissions</a></li>
                        </ul>
                    </div><!--//sub-col-->
                    <div class="sub-col col-12 col-md-4">
                        <h4 class="col-title">School Life</h4>
                        <ul class="footer-links list-unstyled">
                            <li class="link-item"><a href="#">e-Portal</a></li>
                            <li class="link-item"><a href="#">OFSTED Reports</a></li>
                            <li class="link-item"><a href="#">School Policies</a></li>
                            <li class="link-item"><a href="#">Vacancies</a></li>
                        </ul>
                    </div><!--//sub-col-->
                    <div class="sub-col col-12 col-md-4">
                        <h4 class="col-title">Useful Links</h4>
                        <ul class="footer-links list-unstyled">
                            <li class="link-item"><a href="#">Contact</a></li>
                            <li class="link-item"><a href="#">FAQs</a></li>
                            <li class="link-item"><a href="#">Privacy Policy</a></li>
                            <li class="link-item"><a href="#">Terms and Conditions</a></li>
                        </ul>
                    </div><!--//sub-col-->
                </div><!--//row-->
                <div class="divider"></div>
                <ul class="social-media list-inline">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-vimeo" aria-hidden="true"></i></a></li>
                </ul>
            </div><!--//footer-col-->
        </div><!--//row-->

        <small class="copyright">Template Copyright @ <a href="http://themes.3rdwavemedia.com/" target="_blank">3rd Wave Media</a></small>
    </div>
    </div><!--//container-->
</footer><!--//footer-->

<!-- Video Modal -->
<div class="modal modal-video" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 id="videoModalLabel" class="modal-title sr-only">Video Tour</h4>
            </div>
            <div class="modal-body">
                <div class="video-container embed-responsive embed-responsive-16by9">
                    <iframe id="vimeo-video" src="//player.vimeo.com/video/135878017?color=ffffff&amp;wmode=transparent" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div><!--//video-container-->
            </div><!--//modal-body-->
        </div><!--//modal-content-->
    </div><!--//modal-dialog-->
</div><!--//modal-->

<!-- News Modal 1-->
<div id="news-modal-1" class="news-modal modal modal-fullscreen" tabindex="-1" role="dialog" aria-labelledby="newsModal1Label">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="newsModal1Label">School Concert</h4>

            </div><!--//modal-header-->
            <div class="modal-body">
                <div class="meta text-center">Thursday, 16th August 2017</div>
                <div class="post">
                    <p><img class="img-fluid" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/news/news-1.jpg" alt="" /></p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                    <p>Maecenas ac turpis sit amet leo semper ultricies lobortis sed purus. Integer erat felis, maximus in placerat vel, fermentum a libero. Ut quis mollis est. Pellentesque semper nibh ut scelerisque tincidunt. Nullam commodo quam eu lectus ullamcorper, quis sagittis ligula sagittis. Fusce id pellentesque risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                </div>
            </div><!--//modal-body-->
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-primary mx-auto" data-dismiss="modal">Close</button>
            </div>
        </div><!--//modal-content-->
    </div>
</div><!--//modal-->

<!-- News Modal 2-->
<div id="news-modal-2" class="news-modal modal modal-fullscreen" tabindex="-1" role="dialog" aria-labelledby="newsModal2Label">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="newsModal2Label">Year 6 Sports Day</h4>
            </div><!--//modal-header-->
            <div class="modal-body">
                <div class="meta text-center">Friday, 8th June 2017</div>
                <div class="post">
                    <p><img class="img-fluid" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/news/news-2.jpg" alt="" /></p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                    <p>Maecenas ac turpis sit amet leo semper ultricies lobortis sed purus. Integer erat felis, maximus in placerat vel, fermentum a libero. Ut quis mollis est. Pellentesque semper nibh ut scelerisque tincidunt. Nullam commodo quam eu lectus ullamcorper, quis sagittis ligula sagittis. Fusce id pellentesque risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                    <p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
                </div>
            </div><!--//modal-body-->
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-primary mx-auto" data-dismiss="modal">Close</button>
            </div>
        </div><!--//modal-content-->
    </div>
</div><!--//modal-->

<!-- News Modal 3-->
<div id="news-modal-3" class="news-modal modal modal-fullscreen" tabindex="-1" role="dialog" aria-labelledby="newsModal3Label">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="newsModal3Label">ICT Week</h4>
            </div><!--//modal-header-->
            <div class="modal-body">
                <div class="meta text-center">Tuesday, 24th May 2017</div>
                <div class="post">
                    <p><img class="img-fluid" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/news/news-3.jpg" alt="" /></p>
                    <p>Suspendisse et accumsan velit, non sollicitudin nisl. Donec dapibus augue eu viverra eleifend. Etiam finibus eu arcu nec tempus. Sed luctus metus leo, non pellentesque tortor tempor aliquam. Sed sit amet egestas est. Sed varius, urna ac bibendum porta, nunc risus suscipit turpis, sed condimentum neque metus non purus. Quisque volutpat nulla dignissim diam malesuada, id tincidunt orci scelerisque. Phasellus est orci, varius sit amet imperdiet ac, faucibus id urna. Mauris varius odio et nisl finibus, sed fringilla ligula eleifend.</p>
                    <p>Curabitur volutpat bibendum mi sed hendrerit. Etiam commodo molestie facilisis. Nulla sed lectus eu metus consequat vehicula eu ac justo. Phasellus posuere vehicula rhoncus. Praesent a molestie tortor. Phasellus ornare imperdiet vehicula. Vivamus nec odio vitae ligula semper facilisis quis id odio.</p>
                </div>
            </div><!--//modal-body-->
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-primary mx-auto" data-dismiss="modal">Close</button>
            </div>
        </div><!--//modal-content-->
    </div>
</div><!--//modal-->

<!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** -->
<div id="config-panel" class="config-panel d-none d-md-block">
    <div class="panel-inner">
        <a id="config-trigger" class="config-trigger config-panel-hide" href="#"><i class="fas fa-cog mx-auto"></i></a>
        <h5 class="panel-title">Choose Colour</h5>
        <ul id="color-options" class="list-unstyled list-inline">
            <li class="list-inline-item theme-1 active"><a data-style="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/css/theme-1.css" href="#"></a></li>
            <li class="list-inline-item theme-2"><a data-style="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/css/theme-2.css" href="#"></a></li>
            <li class="list-inline-item theme-3"><a data-style="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/css/theme-3.css" href="#"></a></li>
            <li class="list-inline-item theme-4"><a data-style="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/css/theme-4.css" href="#"></a></li>
        </ul>
        <a id="config-close" class="close" href="#"><i class="fas fa-times-circle"></i></a>
    </div><!--//panel-inner-->
</div><!--//configure-panel-->

<!-- Javascript -->
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/plugins/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/plugins/popper.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/plugins/back-to-top.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/js/main.js"></script>


<!--//Page Specific JS -->
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/js/home.js"></script>

<!-- Modal Video -->
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/js/modal-video.js"></script>

<!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/js/demo/style-switcher.js"></script>

</body>
</html> 

