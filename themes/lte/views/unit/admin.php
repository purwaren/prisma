<?php
/* @var $this UnitController */
/* @var $model UnitCustom*/

$this->pageTitle = 'Kelola Unit';
$this->breadcrumbs = array(
    'Unit');
?>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><small>Daftar unit yang tercatat di sistem</small></h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <?php $this->widget('zii.widgets.grid.CGridView', array(
                'id'=>'unit-grid',
                'dataProvider'=>$model->search(),
                //'filter'=>$model,
                'columns'=>array(
                    array(
                        'header'=>'No',
                        'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize+$row+1'
                    ),
                    'unit_no',
                    'owner',
                    array(
                        'name'=>'status',
                        'value'=>'$data->getStatus()'
                    ),
                    'address.address_1',
                    array(
                        'name'=>'address.district',
                        'value'=>'$data->address->getDistrict()'
                    ),
                    array(
                        'name'=>'address.city',
                        'value'=>'$data->address->getCity()'
                    ),
                    array(
                        'name'=>'address.state',
                        'value'=>'$data->address->getState()'
                    ),
                    array(
                        'class'=>'CButtonColumn',
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
                )
            )); ?>
        </div><!-- /.box-body -->
        <div class="box-footer">
            <?php echo CHtml::link('Tambah Kategori',array('category/create'),array('class'=>'btn btn-primary'))?>
        </div><!-- /.box-footer-->
    </div><!-- /.box -->
</section><!-- /.content -->