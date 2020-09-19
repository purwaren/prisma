<?php
/* @var $this NewsController */
/* @var $model NewsCustom */

$this->pageTitle = 'Artikel';
$this->breadcrumbs = array(
    'Artikel'
);
Yii::app()->clientScript->registerScript('img', "
    $('.content img').attr('class','img-responsive');
    $('.btn-approve').click(function(){
        event.preventDefault();
        if(confirm('Anda yakin akan menyetujui artikel ini. Artikel yang disetujui secara otomatis akan terpublikasi di website.')) {
            " . CHtml::ajax(array(
        'type' => 'POST',
        'dataType' => 'JSON',
        'url' => "js:$(this).attr('href')",
        'success' => "function(data){
                    alert(data.message);   
                    window.location.reload();
                }"
    )) . "
        }
    });
    $('.btn-delete').click(function(){
        event.preventDefault();
        if(confirm('Anda yakin akan menghapus event ini ?')) {
             " . CHtml::ajax(array(
        'type' => 'POST',
        'dataType' => 'JSON',
        'url' => "js:$(this).attr('href')",
        'success' => "function(data){
                    alert(data.message);   
                    window.location.reload();
                }"
    )) . "
        }
    });
");
?>
<!-- Main content -->
<section class="content">
    <div class="box box-primary">
        <div class="box-body">
            <?php echo CHtml::link('Tambah Event', array('event/create'), array('class' => 'btn btn-success')) ?>
        </div>
    </div>
    <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider' => $model->search(),
        'itemView' => '_view',
        'template' => '{items}{pager}',
        'afterAjaxUpdate' => "function(id, data){
            $('.btn-delete').click(function(){
                event.preventDefault();
                if(confirm('Anda yakin akan menghapus event ini ?')) {
                     " . CHtml::ajax(array(
                'type' => 'POST',
                'dataType' => 'JSON',
                'url' => "js:$(this).attr('href')",
                'success' => "function(data){
                            alert(data.message);   
                            window.location.reload();
                        }"
            )) . "
                }
            });
        }",
    )); ?>
</section><!-- /.content -->