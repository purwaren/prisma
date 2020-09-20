<?php
/**
 * @var $this Controller
 * @var $content string
 */
$this->beginContent('//layouts/landing');
?>
<section class="page-hero" style="background-image: url(<?php echo $this->pageBanner?>) !important">
    <div class="hero-page-title container">
        <h1><?php echo $this->pageTitle ?></h1>
    </div>
    <div class="mask"></div>
</section><!--//page-hero-->

<div class="breadcrumb-container">
    <div class="container">
        <nav aria-label="breadcrumb">
        <?php if(isset($this->breadcrumbs)) {
            $this->widget('ext.EBreadcrumbs', array(
                'breadcrumbLabel'=>'Anda berada di',
                'links'=>$this->breadcrumbs,
                'htmlOptions'=>array('class'=>'breadcrumb'),
                'tagName'=>'ol',
                'encodeLabel'=>false

            )); 
        } ?>
        </nav>
    </div><!--//container-->
</div><!--//breadcrumb-container-->
<?php echo $content; $this->endContent(); ?>
