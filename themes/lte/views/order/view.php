<?php
/* @var $this OrderController */
/* @var $model OrderCustom */
$this->pageTitle = 'Detil Order';

$this->breadcrumbs = array(
    'Order' => array('admin'),
    $model->order_number,
);

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
                        'unit_id',
                        'created_at',
                        'created_by',
                    ),
                    'htmlOptions' => array(
                        'class' => 'table table-hover table-striped'
                    ),
                )); ?>
            </div>
        </div><!-- /.box-body -->
        <div class="box-footer">
            <?php echo CHtml::link('Kembali', array('order/admin'), array('class' => 'btn btn-primary')) ?>
        </div><!-- /.box-footer-->
    </div><!-- /.box -->
</section><!-- /.content -->



