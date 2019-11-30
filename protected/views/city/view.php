<?php
/* @var $this CityController */
/* @var $model CityCustom */

$this->breadcrumbs=array(
	'City Customs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List CityCustom', 'url'=>array('index')),
	array('label'=>'Create CityCustom', 'url'=>array('create')),
	array('label'=>'Update CityCustom', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CityCustom', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CityCustom', 'url'=>array('admin')),
);
?>

<h1>View CityCustom #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'state_id',
		'name',
	),
)); ?>
