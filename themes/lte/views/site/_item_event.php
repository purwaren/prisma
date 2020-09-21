<?php
/**
 * @var $this SiteController
 * @var $data EventCustom
 */
$date = explode('-', $data->start_time);
?>
<div class="item col-12 col-md-4">
    <div class="item-inner">
        <div class="time">
            <div class="time-inner">
                <div class="date"><?php echo $date[0] ?></div>
                <div class="month"><?php echo $date[1] ?></div>
            </div>
        </div><!--//time-->
        <div class="details">
            <h4 class="event-title"><?php echo $data->title ?></h4>
            <div class="meta">
                <ul class="list-inline meta-list">
                    <li class="list-inline-item"><i class="far fa-clock" aria-hidden="true"></i><?php echo $data->start_hour ?> WIB</li>
                    <li class="list-inline-item"><i class="fas fa-map-marker-alt" aria-hidden="true"></i>Indonesia</li>
                </ul>
            </div><!--//meta-->
            <div class="details">
                <?php echo $data->description ?>
            </div><!--//details-->
            <div class="meta">
            </div><!--//meta-->
        </div><!--//details-->
    </div><!--//item-inner-->
</div><!--//item-->