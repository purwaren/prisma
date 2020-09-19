<?php
/* @var $this EventController */
/* @var $model EventCustom */

$this->breadcrumbs=array(
	'Event Customs'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List EventCustom', 'url'=>array('index')),
	array('label'=>'Create EventCustom', 'url'=>array('create')),
	array('label'=>'Update EventCustom', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EventCustom', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EventCustom', 'url'=>array('admin')),
);
?>

<h1>View EventCustom #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description',
		'start_time',
		'end_time',
		'banner_url',
		'created_at',
		'created_by',
		'updated_at',
		'updated_by',
	),
)); ?>
