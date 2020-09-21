<?php
/**
 * @var $this SiteController
 * @var $data NewsCustom
 */
?>

<div class="item col-12 col-md-4">
    <div class="item-inner">
        <div class="thumb-holder">
            <img class="img-fluid" src="<?php echo $data->banner ?>" alt="">
        </div><!--//thumb-holder-->
        <div class="content-holder">
            <h4 class="news-title"><a href="<?php echo Yii::app()->createUrl('news/view', array('id'=>$data->permalink)) ?>"><?php echo $data->title ?></a></h4>
            <div class="intro">
                <?php echo $data->summary ?>
            </div><!--//intro-->
        </div><!--//content-holder-->
    </div><!--//item-inner-->
</div><!--//item-->