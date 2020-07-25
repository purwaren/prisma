<?php
/**
 * @var $this Controller
 * @var $content string
 */
$this->beginContent('//layouts/landing');
?>
<div class="breadcrumb-container" style="margin-top: 140px">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><i class="fas fa-home" aria-hidden="true"></i> <a href="<?php echo Yii::app()->createUrl('site/index')?>">Beranda</a></li>
                <li class="breadcrumb-item active">Unit</li>
            </ol>
        </nav>
    </div><!--//container-->
</div><!--//breadcrumb-container-->
<?php echo $content; $this->endContent(); ?>
