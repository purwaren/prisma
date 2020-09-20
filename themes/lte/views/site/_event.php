<?php 
/**
 * @var $data EventCustom
 */
$date = explode('-', $data->start_time);

?>
<div class="item">
    <div class="time">
        <div class="time-inner">
            <div class="date"><?php echo $date[0] ?></div>
            <div class="month"><?php echo $date[1] ?></div>
        </div>
    </div><!--//time-->
    <div class="details">
        <h4 class="event-title"><?php echo $data->title ?></h4>
        <div class="intro">
            <?php echo $data->description ?>
        </div><!--//intro-->
    </div><!--//details-->
</div><!--//item-->
<?php if ($index == $widget->dataProvider->itemCount-1) { ?>
<div class="action text-center">
    <a class="btn btn-ghost-alt" href="calendar.html">
        View Calendar<i class="fas fa-angle-right"aria-hidden="true"></i>
    </a>
</div>
<?php } ?>