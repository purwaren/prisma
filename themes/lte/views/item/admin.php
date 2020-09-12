<?php
/* @var $this ItemController */
/* @var $model ItemCustom */

$this->pageTitle = 'Stok Item';
$this->breadcrumbs = array(
    'Item');
?>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">
                <small>Stok item yang ada di dalam sistem</small>
            </h3>
        </div>
        <div class="box-body table-responsive">
            <?php $this->widget('zii.widgets.grid.CGridView', array(
                'id' => 'city-grid',
                'dataProvider' => $model->search(),
                //'filter'=>$model,
                'columns' => array(
                    array(
                        'header' => 'No',
                        'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize+$row+1'
                    ),
                    'code',
                    'name',
                    'stock',
                    'price',
                    array(
                        'class' => 'CButtonColumn',
                        'template' => '{view} {update} {delete}',
                        'buttons' => array(
                            'view' => array(
                                'label' => '<i class="fa fa-search"></i>',
                                'imageUrl' => false,
                                'options' => array('class' => 'btn btn-xs btn-primary', 'title' => 'Detail', 'data-toggle' => 'tooltip')
                            ),
                            'update' => array(
                                'label' => '<i class="fa fa-edit"></i>',
                                'imageUrl' => false,
                                'options' => array('class' => 'btn btn-xs btn-warning', 'title' => 'Ubah', 'data-toggle' => 'tooltip')
                            ),
                            'delete' => array(
                                'label' => '<i class="fa fa-trash"></i>',
                                'imageUrl' => false,
                                'options' => array('class' => 'btn btn-xs btn-danger', 'title' => 'Hapus', 'data-toggle' => 'tooltip'),
                            )
                        )
                    ),
                ),
                'itemsCssClass' => 'table table-striped table-bordered table-hover dataTable',
                'cssFile' => false,
                'summaryCssClass' => 'dataTables_info',
                'template' => '{summary}{items}{pager}',
                'pagerCssClass' => 'dataTables_paginate paging_simple_numbers text-center',
                'pager' => array(
                    'htmlOptions' => array('class' => 'pagination'),
                    'internalPageCssClass' => 'paginate_button',
                    'selectedPageCssClass' => 'active',
                    'header' => ''
                ),
                'beforeAjaxUpdate' => "function(){
                    $('#loading').show();
                }",
                'afterAjaxUpdate' => "function(){
                    $('#loading').hide();
                }"
            )); ?>
        </div><!-- /.box-body -->
        <div class="box-footer">
            <?php echo CHtml::link('Tambah Item', array('item/create'), array('class' => 'btn btn-primary')) ?>
        </div>
        <div class="overlay" id="loading" style="display: none">
            <i class="fa fa-refresh fa-spin"></i>
        </div>
    </div><!-- /.box -->
</section><!-- /.content -->