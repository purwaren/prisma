<?php 
/**
 * @var $this SiteController
 * @var $event EventCustom
 */

$event = new EventCustom();
$news = new NewsCustom();

Yii::app()->clientScript->registerScript('landing',"
    $('.signup-form').submit(function(event){
        event.preventDefault();
        if (!confirm('Apakah data anda sudah benar?'))
            return false;
        var url = 'https://api.whatsapp.com/send?phone=6281327027605&text=Halo Admin, saya '+$('#name').val()+ ' tertarik untuk bergabung di CERMAT. Mohon informasi selanjutnya ke '+$('#phone').val();
        window.location.replace(url);
    });
    $('#register').click(function(){
        var url = 'https://api.whatsapp.com/send?phone=6281327027605&text=Halo Admin, saya tertarik untuk bergabung di CERMAT. Mohon informasi lebih lanjut.';
        window.location.replace(url);
    })
")

?>

<section class="promo-section section section-on-bg">
    <div class="hero-slider-wrapper">
        <div class="flexslider hero-slider">
            <ul class="slides">
                <li class="slide slide-1">
                    <div class="container">
                        <div class="slide-box">
                            <div class="slide-box-inner">
                                <div class="text">Belajar matematika lebih mudah dan cepat hanya dengan menggunakan jari
                                    tangan, tanpa alat tanpa rumus
                                </div>
                                <a href="#" class="play-trigger" data-toggle="modal" data-target="#modal-video"><img
                                            class="play-icon"
                                            src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/play-icon.svg"
                                            alt="">Tonton Video</a>
                            </div><!--//slide-box-inner-->
                        </div><!--//slide-box-->
                    </div>
                </li>
                <li class="slide slide-2">
                    <div class="container">
                        <div class="slide-box">
                            <div class="slide-box-inner">
                                <div class="text">Menghitung dengan metode PRISMA Kalkulator tangan menjadi hal yang menyenangkan. Anak-anak seperti
                                    sedang diajak bermain jari.
                                </div>
                                <a href="#" class="play-trigger" data-toggle="modal" data-target="#modal-video2"><img
                                            class="play-icon"
                                            src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/play-icon.svg"
                                            alt="">Tonton Video</a>
                            </div><!--//slide-box-inner-->
                        </div><!--//slide-box-->
                    </div><!--//container-->
                </li>
                <li class="slide slide-3">
                    <div class="container">
                        <div class="slide-box">
                            <div class="slide-box-inner">
                                <div class="text">
                                    Menghitung dengan metode PRISMA Kalkulator Tangan membuat anak-anak menjadi percaya diri.
                                    Ketika anak-anak percaya dengan dirinya, apapun akan bisa mereka raih.
                                </div>
                                <a href="#" class="play-trigger" data-toggle="modal" data-target="#modal-video3"><img
                                            class="play-icon"
                                            src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/play-icon.svg"
                                            alt="">Tonton Video</a>
                            </div><!--//slide-box-inner-->
                        </div><!--//slide-box-->
                    </div><!--//container-->
                </li>
                <li class="slide slide-4">
                    <div class="container">
                        <div class="slide-box">
                            <div class="slide-box-inner">
                                <div class="text">Anak cerdas adalah tabungan masa depan
                                </div>
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
                        <div class="item">Tel: <a href="tel:0800123456">081327027605</a></div>
                        <div class="item">Email: <a href="mailto:info@yourschoolsite.com">zaenalahmad62@gmail.com</a>
                        </div>
                    </div><!--//contact-info-->
                    <ul class="social-media list-inline float-right">
                        <li class="list-inline-item">
                            <a href="https://web.facebook.com/profile.php?id=100007456336047"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                        </li>
                    </ul>
                </div><!--//container-->
            </div><!--//overlay-upper-->
            <div class="overlay-lower">
                <div class="container">
                    <div class="links">
                        <div class="link"><a href="<?php echo Yii::app()->createUrl('site/about')?>" title="Tentang Prisma"><i class="fas fa-university link-icon"
                                                                                     aria-hidden="true"></i><span
                                        class="link-text">Tentang CERMAT</span></a></div>
                        <div class="link"><a href="<?php echo Yii::app()->createUrl('site/unit')?>" title="Data Unit"><i
                                        class="fas fa-graduation-cap link-icon" aria-hidden="true"></i><span
                                        class="link-text">Data Cabang/Unit</span></a></div>
                        <div class="link"><a href="#" title="News &amp; Events"><i
                                        class="fas fa-newspaper link-icon" aria-hidden="true"></i><span
                                        class="link-text">Berita & Kegiatan</span></a></div>
                        <div class="link"><a href="#" title="Key Info"><i class="fas fa-info-circle link-icon"
                                                                                  aria-hidden="true"></i><span
                                        class="link-text">Cara Bergabung</span></a></div>
                    </div>
                </div><!--//container-->
            </div><!--//overlay-lower-->
        </div>
    </div><!--//hero-overlay-->

    <div class="hero-badge">
        <div class="badge-content">
            <div class="script">Daftar Sekarang</div>
            <a href="#" class="link-mask" id="register"></a>
        </div><!--//bagde-content-->
    </div><!--//hero-badge-->


</section><!--//promo-section-->

<div class="home-cols-wrapper">
    <div class="container">
        <div class="row">
            <section class="col-main col-12 col-lg-8">
                <div class="welcome-block block">
                    <div class="content">
                        <h3 class="block-title">Metode Kalkulator Tangan</h3>
                        <div class="intro">
                            <p  class="text-justify">
                                PRISMA adalah singkatan dari ( Prestasi Sukses Mental Arimatika ) yang berdiri
                                pada Tahun 2002 di Kabupaten Wonosobo Jawa Tengah Oleh Zaenal Ahmad, S.Ag, lulusan
                                IAIN Sunan Kalijaga Jogjakarta Fakultas Ushuluddin Tahun 2001. Setelah lulus kuliah, awal
                                tahun 2002 Zaenal kembali ke Kota Kelahirannya di daerah pegunungan Dieng yaitu
                                Kabupaten Wonosobo Jawa Tengah. Berbekal ilmu yang dimiliki selama kuliah di Jogjakarta
                                dan pengalaman organisasi yang pernah dijalaninya maka pada pertengahan Tahun 2002
                                Zaenal mendirikan Lembaga Bimbingan Belajar PRISMA.
                            </p>
                            <div class="source">
                                <div class="name script">Zaenal Ahmad, S.Ag.</div>
                                <div class="title">Founder Prisma Kalkulator Tangan</div>
                            </div><!--//source-->
                        </div><!--//intro-->
                    </div><!--//content-->
                    <div class="figure">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/founder.jpg" alt="">
                    </div><!--//figure-->
                </div><!--//welcome-block-->
                <div class="news-block block">
                    <h3 class="block-title">Latest News</h3>
                    <?php $this->widget('zii.widgets.CListView', array(
                        'dataProvider'=>$news->search(),
                        'itemView'=>'_news',
                        'itemsCssClass'=>'news-items',
                        'template'=> '{items}'
                    )); ?>
                </div><!--//news-block-->
            </section><!--//col-main-->

            <aside class="col-side col-12 col-lg-4">
                <div class="shortcuts-block block">
                    <div class="item tbg-secondary">
                        <i class="fas fa-file-pdf" aria-hidden="true"></i>
                        <span class="text"><a target="_blank" href="<?php echo Yii::app()->theme->baseUrl?>/assets2/brosur-prisma.pdf">Brosur PRISMA</a></span>
                    </div><!--//item-->
                </div><!--//shortcuts-block-->
                <div class="events-block block">
                    <h3 class="block-title">Event Terbaru</h3>
                    <?php $this->widget('zii.widgets.CListView', array(
                        'dataProvider'=>$event->search(),
                        'itemView'=>'_event',
                        'itemsCssClass'=>'events-items',
                        'template'=> '{items}'
                    )); ?>
                </div><!--//block-->
            </aside><!--//col-side-->

        </div><!--//row-->
    </div><!--//container-->
</div><!--//home-cols-wrapper-->

<section class="awards-section">
    <div class="container">
        <div class="logos row">
            <div class="logo-item col-md-4 col-4">
                <a href="https://www.lensaindonesia.com/2016/12/19/wow-anak-jago-berhitung-dengan-metode-kalkulator-tangan.html"><img class="img-fluid"
                                 src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/awards/award1.png"
                                 alt=""></a>
            </div>
            <div class="logo-item col-md-4 col-4">
                <a href="https://suaraindonesia-news.com/metode-kalkulator-tangan-digemari-anak-bangsa/"><img class="img-fluid"
                                 src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/awards/award2.gif"
                                 alt=""></a>
            </div>
            <div class="logo-item col-md-4 col-4">
                <a href="http://rri.co.id/malang/post/berita/339752/ruang_publik/metode_kalkulator_tangan_cara_berhitung_cepat_dengan_jari.html"><img class="img-fluid"
                                 src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/awards/award3.jpg"
                                 alt=""></a>
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
                    <h3 class="review-title"><i class="fas fa-quote-left"></i>Bimbel Berkembang Pesat<i
                                class="fas fa-quote-right d-none d-md-inline"></i></h3>
                    <blockquote class="review mx-auto">
                        <p>Alhamdulillah dipertemukan prisma kalkulator tangan, metode yang luar biasa.
                            Dengan adanya prisma bimbel saya perkembangannya semakin pesat.
                            Orang tua puas dengan hasilnya, anak2 menyukai proses pembelajarannya.
                            Metode prisma hanya dengan 10 jari yang gak membebani anak dan sangat membantu anak dalam belajar.
                            Anak-anak di bimbel saya pada betah belajar prisma. Salam sukses prisma kalkulator tangan☺</p>
                    </blockquote><!--//review-->
                    <div class="source">
                        <div class="name">Liani Mesisotya (Owner)</div>
                        <div class="title">PRISMA Unit Mekarjaya, Kota Depok</div>
                    </div><!--//source-->
                </div><!--//item-->
                <div class="item carousel-item">
                    <h3 class="review-title"><i class="fas fa-quote-left"></i>Meningkatkan Level<i
                                class="fas fa-quote-right d-none d-md-inline"></i></h3>
                    <blockquote class="review mx-auto">
                        <p>Alhamdulillah terimakasih pak Zaenal sudah membimbing kami...
                        walaupun sempet oleng di perkalian tapi akhirnya selesai sampai pembagian.. 
                        next naik ke tingkat lebih tinggi ya..amin</p>
                    </blockquote><!--//review-->
                    <div class="source">
                        <div class="name">Rinah (Owner)</div>
                        <div class="title">Unit 221 Bogor</div>
                    </div><!--//source-->
                </div>
                <div class="item carousel-item">
                    <h3 class="review-title"><i class="fas fa-quote-left"></i>Mencerdaskan anak bangsa<i
                                class="fas fa-quote-right d-none d-md-inline"></i></h3>
                    <blockquote class="review mx-auto">
                        <p>Terimakasih kdatanganny pa Zainal Founder Prisma Kalkulator Pusat, Mdh2n Prisma smakin mlebarkan sayapny dmana pun tmpatny, smakin byk saudarany. Smakin brmanfaat ilmuny, Smakin sukses teman2 yg mngembangkn bimbelny aamiin yra 🤲🤲
Wah bsa mngadakan event lomba kcepatan berhitung Prisma dsubang nih, smakin meluas mncerdaskn ank2 bangsa indonesia</p>
                    </blockquote><!--//review-->
                    <div class="source">
                        <div class="name">Umi Riana (Owner)</div>
                        <div class="title">Unit Kalijati, Jakata Barat</div>
                    </div><!--//source-->
                </div>
            </div><!--//carousel-inner-->

            <!--//Indicators-->
            <ol class="carousel-indicators">
                <li class="active" data-target="#reviews-carousel" data-slide-to="0">
                    <img class="img-fluid"
                         src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/profiles/profile-1.jpg" alt="">
                </li>
                <li data-target="#reviews-carousel" data-slide-to="1" class="">
                    <img class="img-fluid"
                         src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/profiles/profile-2.jpg" alt="">
                </li>
                <li data-target="#reviews-carousel" data-slide-to="2" class="">
                    <img class="img-fluid"
                         src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/images/profiles/profile-3.jpg" alt="">
                </li>
            </ol><!--//carousel-indicators-->

        </div>

    </div><!--//container-->
</section><!--//reviews-section-->

<section class="cta-section">
    <div class="container text-center">
        <h3 class="section-title">Segera daftarkan unit Anda</h3>
        <div class="section-intro">Untuk informasi lebih lengkap, masukkan No HP anda di bawah ini agar kami bisa segera menghubungi anda.
        </div>
        <form class="signup-form mx-auto" method="POST">
            <div class="form-row">
                <div class="form-group col-md-5 col-12">
                    <label for="firstname" class="sr-only">Nama</label>
                    <input type="text" class="form-control" id="name" placeholder="Nama">
                </div><!--//form-group-->
                <div class="form-group col-md-5 col-12">
                    <label for="firstname" class="sr-only">Nomor HP</label>
                    <input type="number" class="form-control" id="phone"  placeholder="Nomor HP">
                </div><!--//form-group-->

                <div class="btn-wrapper col-md-2 col-12">
                    <button type="submit" class="btn btn-cta btn-ghost btn-block">Daftar  <i class="fas fa-angle-right"
                                                                                            aria-hidden="true"></i>
                    </button>
                </div>
            </div><!--//form-row-->

        </form>
    </div><!--//container-->
</section><!--//cta-section-->

<!-- Video Modal -->
<div class="modal modal-video" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 id="videoModalLabel" class="modal-title sr-only">Video Tour</h4>
            </div>
            <div class="modal-body">
                <div class="video-container embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/EF1FpEn5qHY?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div><!--//video-container-->
            </div><!--//modal-body-->
        </div><!--//modal-content-->
    </div><!--//modal-dialog-->
</div><!--//modal-->
<!-- Video Modal -->
<div class="modal modal-video" id="modal-video2" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel2"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 id="videoModalLabel2" class="modal-title sr-only">Video Tour</h4>
            </div>
            <div class="modal-body embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/OU6Cuf1P0MM?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div><!--//modal-body-->
        </div><!--//modal-content-->
    </div><!--//modal-dialog-->
</div><!--//modal-->
<!-- Video Modal -->
<div class="modal modal-video" id="modal-video3" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel3"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 id="videoModalLabel3" class="modal-title sr-only">Video Tour</h4>
            </div>
            <div class="modal-body embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/ed9uX_27R4c?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div><!--//modal-body-->
        </div><!--//modal-content-->
    </div><!--//modal-dialog-->
</div><!--//modal-->
