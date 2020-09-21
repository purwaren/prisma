<?php 
/**
 * @var $this SiteController
 * @var $model NewsCustom
 */
$this->pageTitle = 'Berita & Kegiatan';

$this->breadcrumbs = array(
    'News' => array('site/news'),
);

$event = new EventCustom();
$news = new NewsCustom();

?>
<div class="main-cols-wrapper">
    <section class="events-section">
        <div class="container">
            <h2 class="section-title">Events</h2>
            <?php $this->widget('zii.widgets.CListView', array(
                'dataProvider'=>$event->search(),
                'itemView'=>'_item_event',
                'itemsCssClass'=>'row',
                'template'=> '{items}'
            )); ?>
            <div class="action text-center">
                    <a class="btn btn-ghost-alt" href="#">Lihat Semua<i class="fas fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div><!--//container-->
    </section><!--//events-section-->

    <section id="news-section" class="news-section section">
        <div class="container">
            <h2 class="section-title">News</h2>
            <?php $this->widget('zii.widgets.CListView', array(
                'dataProvider'=>$news->search(),
                'itemView'=>'_item_news',
                'itemsCssClass'=>'row',
                'template'=> '{items}'
            )); ?>
            <div class="action text-center">
                    <a class="btn btn-ghost" href="#">Load More<i class="fas fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div><!--//container-->
    </section><!--//section-->
</div><!--//main-cols-wrapper-->