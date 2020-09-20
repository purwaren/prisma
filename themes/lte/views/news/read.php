<?php 
/**
 * @var $this SiteController
 * @var $model NewsCustom
 */
$this->pageTitle = $model->title;
Yii::app()->clientScript->registerCss('sadf', "
    .blog-post .post-single .content img {
        width: 95%;
    }
");
$this->breadcrumbs = array(
    'News' => array('/news'),
    $model->permalink
);

$this->pageBanner = $model->banner;

?>
<div class="main-cols-wrapper">
    <div class="container">
        <div class="row">
            <section class="col-main blog-post col-12 col-lg-8">
                <div class="post-single">
                    <h3 class="post-single-title"><?php echo $model->title ?></h3>
                    <div class="meta"><?php echo $model->created_at ?> / Ditulis oleh <a href="#"><?php echo $model->created_by ?></a></div>
                    <div class="content">
                        <?php echo $model->content ?>                           
                    </div>
                </div><!--//post-single-->
                
                
            </section><!--//blog-list-section-->
            <aside class="col-side blog-side  col-xs-12 col-md-4">
                <div class="col-side-inner">
                    
                    <div class="posts-block block">
                        <h3 class="block-title">Berita Lainnya</h3>
                        
                        <div class="item">
                            <div class="post-thumb">
                                <img class="img-fluid" src="assets/images/blog/post-thumb-3.jpg" alt="">
                            </div><!--//post-thumb-->
                            <div class="post-intro">
                                <h4 class="post-title"><a href="#">Etiam Rhoncus Maecenas Nullam Quis</a></h4>
                                <div class="meta">Dec 14, 2016</div>
                            </div>
                        </div><!--//item-->
                        
                        <div class="item">
                            <div class="post-thumb">
                                <img class="img-fluid" src="assets/images/blog/post-thumb-4.jpg" alt="">
                            </div><!--//post-thumb-->
                            <div class="post-intro">
                                <h4 class="post-title"><a href="#">Faucibus Tincidunt Sodales</a></h4>
                                <div class="meta">Nov 7, 2016</div>
                            </div>
                        </div><!--//item-->
                        
                    </div><!--//posts-block-->
                    <div class="tags-block block">
                        <h3 class="block-title">Tags</h3>
                        <div class="blog-tags">
                            <?php
                                $tags = explode(',', $model->tag);
                                foreach($tags as $tag) {
                                    if (!empty($tag))
                                        echo '<a href="#">'.$tag.'</a>';
                                }
                            ?>
                        </div>
                    </div><!--//block-->
                </div><!--//col-side-inner-->
            </aside><!--//col-side-->
        </div><!--//row-->
    </div><!--//container-->
</div><!--//main-cols-wrapper-->