<?php
/* @var $this ItemCategoryController */
/* @var $model ItemCategoryCustom */
$this->pageTitle = 'Detil Kategori Barang';

$this->breadcrumbs = array(
    'Kategori Barang' => array('admin'),
    $model->name,
);

?>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">
                <small>Informasi lengkap tentang wilayah</small>
            </h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i
                            class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i
                            class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="col-md-12">
                <?php $this->widget('zii.widgets.CDetailView', array(
                    'data' => $model,
                    'attributes' => array(
                        'id',
                        'name',
                        'created_at',
                        'created_by',
                        'updated_at',
                        'updated_by'
                    ),
                    'htmlOptions' => array(
                        'class' => 'table table-hover table-striped table-detail-view'
                    ),
                )); ?>
            </div>
        </div><!-- /.box-body -->
        <div class="box-footer">
            <?php echo CHtml::link('Kembali', array('itemCategory/admin'), array('class' => 'btn btn-primary')) ?>
        </div><!-- /.box-footer-->
    </div><!-- /.box -->
</section><!-- /.content -->



