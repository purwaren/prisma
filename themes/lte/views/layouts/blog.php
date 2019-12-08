<?php
/**
 * @var $this Controller
 * @var $content string
 */
$this->beginContent('//layouts/landing');
?>
<section class="page-hero" style="background: url(<?php echo $this->pageBanner?>) !important">
    <div class="hero-page-title container">
        <h1><?php echo $this->pageTitle ?></h1>
    </div>
    <div class="mask"></div>
</section><!--//page-hero-->

<div class="breadcrumb-container">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><i class="fas fa-home" aria-hidden="true"></i> <a href="<?php echo Yii::app()->createUrl('site/index')?>">Beranda</a></li>
                <li class="breadcrumb-item active">Kontak</li>
            </ol>
        </nav>
    </div><!--//container-->
</div><!--//breadcrumb-container-->
<?php echo $content; $this->endContent(); ?>
