<?php 
/**
 * @var $this SiteController
 * @var $data NewsCustom
 */
$item = 'news-'.$index;
Yii::app()->clientScript->registerCss($item, "
    .home-cols-wrapper .news-block .".$item." .thumb-holder {
        background: url(".$data->banner.") no-repeat center center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
");

?>
<div class="item <?php echo $item?>">
    <div class="thumb-holder">

    </div><!--//thumb-holder-->
    <div class="content-holder">
        <h4 class="news-title"><a href="#"><?php echo $data->title ?></a></h4>
        <div class="intro">
            <?php echo $data->summary ?>
        </div><!--//intro-->
        <a class="btn btn-ghost" href="<?php echo Yii::app()->createUrl('site/news', array('id'=>$data->permalink))?>" >Selengkapnya<i class="fas fa-angle-right" aria-hidden="true"></i></a>
    </div><!--//content-holder-->
</div><!--//item-->