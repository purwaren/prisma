<?php
/* @var $this UnitController */
/* @var $model UnitCustom */
/* @var $teacher TeacherCustom */

$this->pageTitle = 'Detil Unit';

$this->breadcrumbs = array(
    'Unit' => array('admin'),
    $model->unit_no,
);

?>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">
                <small>Informasi Unit</small>
            </h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i
                            class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i
                            class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <h4><i>Informasi Umum</i></h4>
            <?php $this->widget('zii.widgets.CDetailView', array(
                'data' => $model,
                'attributes' => array(
                    'unit_no',
                    'trainer',
                    'consultant',
                    array(
                        'label'=>'Status',
                        'value'=>$model->getStatus()
                    ),
                    'start_date',
                    'expired_at'
                ),
                'htmlOptions' => array(
                    'class' => 'table table-hover table-striped table-detail-view'
                ),
            )); ?>
            <h4><i>Pemilik Unit</i></h4>
            <?php $this->widget('zii.widgets.CDetailView', array(
                'data' => $model,
                'attributes' => array(
                    'owner',
                    'wa_number'
                ),
                'htmlOptions' => array(
                    'class' => 'table table-hover table-striped table-detail-view'
                ),
            )); ?>
            <h4><i>Alamat Unit</i></h4>
            <?php $this->widget('zii.widgets.CDetailView', array(
                'data' => $model,
                'attributes' => array(
                    'address.address_1',
                    'address.address_2',
                    array(
                        'name' => 'address.district',
                        'value' => $model->address->getDistrict()
                    ),
                    array(
                        'name' => 'address.city',
                        'value' => $model->address->getCity()
                    ),
                    array(
                        'name' => 'address.state',
                        'value' => $model->address->getState()
                    )
                ),
                'htmlOptions' => array(
                    'class' => 'table table-hover table-striped table-detail-view'
                ),
            )); ?>
            <h4><i>Guru Pendamping</i></h4>
            <?php $this->widget('zii.widgets.grid.CGridView', array(
                'id' => 'users-grid',
                'dataProvider' => $teacher->search(),
                //'filter'=>$model,
                'columns' => array(
                    array(
                        'header' => 'No',
                        'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize+$row+1'
                    ),
                    'name',
                    'phone',
                    array(
                        'class' => 'CButtonColumn',
                        'template' => '{view}',
                        'buttons' => array(
                            'view' => array(
                                'label' => '<i class="fa fa-search"></i>',
                                'imageUrl' => false,
                                'options' => array('class' => 'btn btn-xs btn-primary', 'title' => 'Detail', 'data-toggle' => 'tooltip')
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
            <?php echo CHtml::link('Kembali', array('unit/admin'), array('class' => 'btn btn-primary')) ?>
        </div><!-- /.box-footer-->
    </div><!-- /.box -->
</section><!-- /.content -->



