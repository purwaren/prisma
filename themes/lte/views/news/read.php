<?php
/**
 * @var $this NewsController
 * @var $model NewsCustom
 */

$this->pageTitle = $model->title;
$this->pageBanner = $model->banner;
?>
<div class="main-cols-wrapper">
    <div class="container">
        <div class="row">
            <section class="col-main blog-post col-12 col-lg-8">
                <div class="post-single">
                    <h3 class="post-single-title"><?php echo $model->title ?></h3>
                    <div class="meta"><?php echo $model->created_at ?> / Ditulis oleh <a href="#"><?php echo $model->created_by ?></a></div>
                    <div class="content text-justify">
                        <?php echo $model->content ?>
                    </div>
                </div><!--//post-single-->
            </section><!--//blog-list-section-->
            <aside class="col-side blog-side  col-xs-12 col-md-4">
                <div class="col-side-inner">
                    <div class="tags-block block">
                        <h3 class="block-title">Tags</h3>
                        <div class="blog-tags">
                            <a href="#">PUSAT</a>
                            <a href="#">BERITA</a>
                        </div>
                    </div><!--//block-->
                </div><!--//col-side-inner-->
            </aside><!--//col-side-->
        </div><!--//row-->
    </div><!--//container-->
</div><!--//main-cols-wrapper-->