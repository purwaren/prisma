<?php
/* @var $this DistrictController */
/* @var $model DistrictCustom */

$this->breadcrumbs=array(
	'District Customs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List DistrictCustom', 'url'=>array('index')),
	array('label'=>'Create DistrictCustom', 'url'=>array('create')),
	array('label'=>'Update DistrictCustom', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DistrictCustom', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DistrictCustom', 'url'=>array('admin')),
);
?>

<h1>View DistrictCustom #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'city_id',
		'name',
	),
)); ?>
