<?php
/* @var $this CityController */
/* @var $model CityCustom */

$this->pageTitle = 'Daftar Kabupaten / Kota';
$this->breadcrumbs = array(
    'Kab/Kota');
?>
<!-- Main content -->
<section class="content">
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title"><a href="#search" data-widget="collapse" aria-controls="#search" aria-expanded="false" role="button">Advance Search</a></h3>
        </div>
        <?php $this->renderPartial('_search', array('model'=>$model))?>
    </div>
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><small>Daftar kabupatan atau kota yang tercatat di sistem</small></h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body table-responsive">
            <?php $this->widget('zii.widgets.grid.CGridView', array(
                'id'=>'state-grid',
                'dataProvider'=>$model->search(),
                //'filter'=>$model,
                'columns'=>array(
                    array(
                        'header'=>'No',
                        'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize+$row+1'
                    ),
                    'id',
                    'name',
                    array(
                        'name'=>'state_id',
                        'value'=>'$data->state->name'
                    ),
                    array(
                        'class'=>'CButtonColumn',
                        'template'=>'{view}',
                        'buttons'=>array(
                            'view'=>array(
                                'label'=>'<i class="fa fa-search"></i>',
                                'imageUrl'=>false,
                                'options'=>array('class'=>'btn btn-xs btn-primary','title'=>'Detail','data-toggle'=>'tooltip')
                            ),
                            'update'=>array(
                                'label'=>'<i class="fa fa-edit"></i>',
                                'imageUrl'=>false,
                                'options'=>array('class'=>'btn btn-xs btn-warning','title'=>'Ubah','data-toggle'=>'tooltip')
                            ),
                            'delete'=>array(
                                'label'=>'<i class="fa fa-trash"></i>',
                                'imageUrl'=>false,
                                'options'=>array('class'=>'btn btn-xs btn-danger','title'=>'Hapus','data-toggle'=>'tooltip'),
                            )
                        )
                    ),
                ),
                'itemsCssClass'=>'table table-striped table-bordered table-hover dataTable',
                'cssFile' => false,
                'summaryCssClass' => 'dataTables_info',
                'template'=>'{summary}{items}{pager}',
                'pagerCssClass'=>'dataTables_paginate paging_simple_numbers text-center',
                'pager'=>array(
                    'htmlOptions'=>array('class'=>'pagination'),
                    'internalPageCssClass'=>'paginate_button',
                    'selectedPageCssClass'=>'active',
                    'header'=>''
                ),
                'beforeAjaxUpdate'=>"function(){
                    $('#loading').show();
                }",
                'afterAjaxUpdate'=>"function(){
                    $('#loading').hide();
                }"
            )); ?>
        </div><!-- /.box-body -->
        <div class="overlay" id="loading" style="display: none">
            <i class="fa fa-refresh fa-spin"></i>
        </div>
    </div><!-- /.box -->
</section><!-- /.content -->