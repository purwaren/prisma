<?php
/**
 * @var $this Controller
 */

$this->pageTitle = 'Kontak';
?>
<div class="main-cols-wrapper">
    <div class="container">
        <div id="contact-block" class="block contact-block">
            <div class="info-items">
                <div class="row">
                    <div class="info-item col-12 col-md-6">
                        <div class="item-inner">
                            <h3 class="item-title">Informasi Umum</h3>
                            <div class="cat">
                                <h4 class="cat-title">Pembukaan Unit</h4>
                                <ul class="list-unstyled">
                                    <li>0800 123 4567</li>
                                    <li><a href="#">info@yourschool.com</a></li>
                                </ul>
                            </div>
                            <div class="cat">
                                <h4 class="cat-title">Pemesanan Modul</h4>
                                <ul class="list-unstyled">
                                    <li>0800 123 4568</li>
                                    <li><a href="#">info@schooladmissions.com</a></li>
                                </ul>
                            </div>
                        </div><!--//item-inner-->
                    </div><!--//info-item-->

                    <div class="info-item col-12 col-md-6">
                        <div class="item-inner">
                            <h3 class="item-title">Lokasi</h3>
                            <div class="cat">
                                <h4 class="cat-title">Kantor Pusat</h4>
                                <div class="address">
                                    56 Kingston Road<br>
                                    London<br>
                                    KT2 6PY<br>
                                </div>
                            </div>
                            <div class="cat">
                                <h4 class="cat-title">Unit</h4>
                                <div class="address">
                                    Tersebar di seluruh wilayah provinsi. Detil bisa cek di <a href="#">DATA UNIT</a>
                                </div>
                            </div>
                        </div><!--//item-inner-->
                    </div><!--//info-item-->
                </div><!--//row-->
            </div><!--//info-items-->

            <div class="form-box">
                <h3 class="text-center form-title">Contact Form</h3>
                <form id="contact-form" class="contact-form form" method="post" action="#">
                    <div class="row text-center">
                        <div class="contact-form-inner">
                            <div class="form-row">
                                <div class="col-md-6 col-12 form-group">
                                    <label class="sr-only" for="cname">Your name</label>
                                    <input type="text" class="form-control" id="cname" name="name" placeholder="Your name" minlength="2" required>
                                </div>
                                <div class="col-md-6 col-12 form-group">
                                    <label class="sr-only" for="cemail">Email address</label>
                                    <input type="email" class="form-control" id="cemail" name="email" placeholder="Your email address" required>
                                </div>
                                <div class="col-12 form-group">
                                    <label class="sr-only" for="cmessage">Your message</label>
                                    <textarea class="form-control" id="cmessage" name="message" placeholder="Enter your message" rows="12" required></textarea>
                                </div>
                                <div class="col-12 form-group">
                                    <button type="submit" class="btn btn-block btn-cta btn-primary">Send Message</button>
                                </div>
                            </div><!--//row-->
                        </div>
                    </div><!--//row-->
                </form><!--//contact-form-->
            </div><!--//form-box-->

            <div class="map-box">
                <h3 class="map-title text-center">How to find us</h3>
                <div class="gmap-wrapper">
                    <!--//You need to embed your own google map below-->
                    <!--//Ref: https://support.google.com/maps/answer/144361?co=GENIE.Platform%3DDesktop&hl=en -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.985798395094!2d-2.6051732483185885!3d51.458417179527075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48718ddbdfd292fb%3A0x2f0b60f89b4b6d56!2sUniversity+of+Bristol!5e0!3m2!1sen!2suk!4v1469704137699" width="600" height="360" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div><!--//gmap-wrapper-->
            </div><!--//map-->

        </div><!--//block-->
    </div><!--//container-->
</div><!--//main-cols-wrapper-->