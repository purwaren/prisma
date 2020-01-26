<?php
/* @var $this OrderController */
/* @var $model OrderCustom */

$this->breadcrumbs=array(
	'Order Customs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List OrderCustom', 'url'=>array('index')),
	array('label'=>'Create OrderCustom', 'url'=>array('create')),
	array('label'=>'Update OrderCustom', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete OrderCustom', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrderCustom', 'url'=>array('admin')),
);
?>

<h1>View OrderCustom #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'order_number',
		'unit_id',
		'status',
		'delivery_date',
		'delivery_provider',
		'delivery_receipt_no',
		'created_at',
		'created_by',
		'updated_at',
		'updated_by',
	),
)); ?>
