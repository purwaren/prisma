<?php
/* @var $this TeacherController */
/* @var $model TeacherCustom */

$this->breadcrumbs=array(
	'Teacher Customs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TeacherCustom', 'url'=>array('index')),
	array('label'=>'Create TeacherCustom', 'url'=>array('create')),
	array('label'=>'Update TeacherCustom', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TeacherCustom', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TeacherCustom', 'url'=>array('admin')),
);
?>

<h1>View TeacherCustom #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'unit_id',
		'name',
		'phone',
		'created_at',
		'created_by',
		'updated_at',
		'updated_by',
	),
)); ?>
