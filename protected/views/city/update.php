<?php
/* @var $this CityController */
/* @var $model CityCustom */

$this->breadcrumbs=array(
	'City Customs'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CityCustom', 'url'=>array('index')),
	array('label'=>'Create CityCustom', 'url'=>array('create')),
	array('label'=>'View CityCustom', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CityCustom', 'url'=>array('admin')),
);
?>

<h1>Update CityCustom <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>