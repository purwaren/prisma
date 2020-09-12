<?php
/* @var $this ItemCategoryController */
/* @var $model ItemCategoryCustom */

$this->breadcrumbs=array(
	'Item Category Customs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ItemCategoryCustom', 'url'=>array('index')),
	array('label'=>'Create ItemCategoryCustom', 'url'=>array('create')),
	array('label'=>'Update ItemCategoryCustom', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ItemCategoryCustom', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ItemCategoryCustom', 'url'=>array('admin')),
);
?>

<h1>View ItemCategoryCustom #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'created_by',
		'created_at',
		'updated_by',
		'updated_at',
	),
)); ?>
