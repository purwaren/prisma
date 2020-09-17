<?php
/* @var $this OrderController */
/* @var $model OrderCustom */
$this->pageTitle = 'Detil Order';

$this->breadcrumbs = array(
    'Order' => array('admin'),
    $model->order_number,
);

$order_detail = new OrderDetailCustom('search');
$order_detail->order_id = $model->id;

Yii::app()->clientScript->registerScript('sdaf',"
    $('.btn-process').click(function(event){
        event.preventDefault();
        var url = $(this).attr('href');
        if (!confirm('Anda yakin akan meproses order ini?')) {
            return false;
        }
        ".CHtml::ajax(array(
            'url'=>'js:url',
            'type'=>'POST',
            'success'=>"function(data){
                if (data==1) {
                    document.location.reload()
                }
            }"
        ))."
    });
    $('.btn-finish').click(function(event){
        event.preventDefault();
        var url = $(this).attr('href');
        if (!confirm('Anda yakin akan menyelesaikan order ini?')) {
            return false;
        }
        ".CHtml::ajax(array(
            'url'=>'js:url',
            'type'=>'POST',
            'success'=>"function(data){
                if (data==1) {
                    document.location.reload()
                }
            }"
        ))."
    });
");

?>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">
                <small>Detail Order</small>
            </h3>
        </div>
        <div class="box-body">
            <div class="col-md-12">
                <?php $this->widget('zii.widgets.CDetailView', array(
                    'data' => $model,
                    'attributes' => array(
                        'order_number',
                        'order_date',
                        array(
                            'label'=> 'Unit',
                            'value'=> $model->unit->unit_no.' - '.$model->unit->owner
                        ),
                        array(
                            'label'=>'Status',
                            'value'=>OrderStatus::getValue($model->status)
                        ),
                        array(
                            'label'=>'Tanggal Kirim',
                            'value'=>$model->delivery_date,
                            'visible'=>$model->status == OrderStatus::STATUS_DELIVER || $model->status == OrderStatus::STATUS_FINISH
                        ),
                        array(
                            'label'=>'Nama Ekspedisi',
                            'value'=>$model->provider->name,
                            'visible'=>$model->status == OrderStatus::STATUS_DELIVER || $model->status == OrderStatus::STATUS_FINISH
                        ),
                        array(
                            'label'=>'No. Resi',
                            'value'=>$model->delivery_receipt_no,
                            'visible'=>$model->status == OrderStatus::STATUS_DELIVER || $model->status == OrderStatus::STATUS_FINISH
                        ),
                        'created_at',
                        'created_by',
                    ),
                    'htmlOptions' => array(
                        'class' => 'table table-hover table-striped'
                    ),
                )); ?>
            </div>
            <div class="col-md-12">
            <?php $this->widget('zii.widgets.grid.CGridView', array(
                'id' => 'unit-grid',
                'dataProvider' => $order_detail->search(),
                //'filter'=>$model,
                'columns' => array(
                    array(
                        'header' => 'No',
                        'headerHtmlOptions'=>array('class'=>'text-center'),
                        'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize+$row+1'
                    ),
                    array(
                        'name'=>'item_id',
                        'headerHtmlOptions'=>array('class'=>'text-center'),
                        'value'=>'$data->item->name'
                    ),
                    array(
                        'header'=>'Harga (Rp)',
                        'headerHtmlOptions'=>array('class'=>'text-center'),
                        'value'=>'$data->item->price',
                        'type'=>'number',
                        'footer'=>'TOTAL',
                        'footerHtmlOptions'=>array('class'=>'text-right')
                    ),
                    array(
                        'name'=>'qty',
                        'headerHtmlOptions'=>array('class'=>'text-center'),
                        'htmlOptions'=>array('class'=>'text-right'),
                        'footer'=>$order_detail->getTotalQty(),
                        'footerHtmlOptions'=>array('class'=>'text-right'),
                        'type'=>'number'
                    ),
                    array(
                        'header'=>'Subtotal',
                        'headerHtmlOptions'=>array('class'=>'text-center'),
                        'htmlOptions'=>array('class'=>'text-right'),
                        'value'=>'$data->qty*$data->item->price',
                        'footer'=>$order_detail->getTotal(),
                        'footerHtmlOptions'=>array('class'=>'text-right'),
                        'type'=>'number'
                    )
                ),
                'itemsCssClass' => 'table table-striped table-bordered table-hover dataTable',
                'cssFile' => false,
                'summaryCssClass' => 'dataTables_info',
                'template' => '{items}{pager}',
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
            </div>
        </div><!-- /.box-body -->
        <div class="box-footer">
            <?php echo CHtml::link('Kembali', array('order/admin'), array('class' => 'btn btn-default')) ?>
            <?php echo $model->status==OrderStatus::STATUS_DRAFT ? CHtml::link('Proses', array('order/process','id'=>$model->id), array('class' => 'btn btn-primary btn-process')) : '' ?>
            <?php echo $model->status < OrderStatus::STATUS_DELIVER ? CHtml::link('Pengiriman', array('order/delivery','id'=>$model->id), array('class' => 'btn btn-warning btn-delivery')): '' ?>
            <?php echo $model->status < OrderStatus::STATUS_DELIVER ? CHtml::link('Batal', array('order/cancel','id'=>$model->id), array('class' => 'btn btn-danger btn-cancel')): '' ?>
            <?php echo $model->status==OrderStatus::STATUS_DELIVER ? CHtml::link('Lacak', $model->provider->url_tracking.$model->delivery_receipt_no, array('class' => 'btn btn-warning','target'=>'_new')) : '' ?>
            <?php echo $model->status==OrderStatus::STATUS_DELIVER ? CHtml::link('Selesai', array('order/finish','id'=>$model->id), array('class' => 'btn btn-danger btn-finish')) : '' ?>
        </div><!-- /.box-footer-->
    </div><!-- /.box -->
</section><!-- /.content -->



