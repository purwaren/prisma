<?php
/* @var $this ItemController */
/* @var $model ItemCustom */

$this->breadcrumbs=array(
	'Item Customs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ItemCustom', 'url'=>array('index')),
	array('label'=>'Create ItemCustom', 'url'=>array('create')),
	array('label'=>'Update ItemCustom', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ItemCustom', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ItemCustom', 'url'=>array('admin')),
);
?>

<h1>View ItemCustom #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'code',
		'name',
		'stock',
		'acq_price',
		'price',
		'created_by',
		'created_at',
		'updated_by',
		'updated_at',
	),
)); ?>
