<?php
/* @var $this Controller */
$this->pageTitle = 'Data Guru';
$this->breadcrumbs = array(
    'Guru');
?>
<!-- Main content -->
<section class="content">
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title"><a href="#search" data-widget="collapse" aria-controls="#search" aria-expanded="false"
                                    role="button">Advance Search</a></h3>
        </div>
        <?php $this->renderPartial('_search', array('model' => $model)) ?>
    </div>
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">
                <small>Daftar kategori artikel yang tersedia</small>
            </h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i
                            class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i
                            class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <?php $this->widget('zii.widgets.grid.CGridView', array(
                'id' => 'teachers-grid',
                'dataProvider' => $model->search(),
                //'filter'=>$model,
                'columns' => array(
                    array(
                        'header' => 'No',
                        'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize+$row+1'
                    ),
                    array(
                        'header'=> 'Unit',
                        'value'=> '$data->unit->unit_no." - ".$data->unit->owner'
                    ),
                    'name',
                    'phone',
                    array(
                        'header'=>'Kab / Kota',
                        'value' => '$data->unit->address->getCity()'
                    ),
                    array(
                        'class' => 'CButtonColumn',
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
        <div class="overlay" id="loading" style="display: none">
            <i class="fa fa-refresh fa-spin"></i>
        </div>
        <div class="box-footer">
            <?php echo CHtml::link('Tambah Guru', array('teacher/create'), array('class' => 'btn btn-primary')) ?>
        </div><!-- /.box-footer-->
    </div><!-- /.box -->
</section><!-- /.content -->