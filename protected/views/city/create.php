<?php
/* @var $this CityController */
/* @var $model CityCustom */

$this->breadcrumbs=array(
	'City Customs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CityCustom', 'url'=>array('index')),
	array('label'=>'Manage CityCustom', 'url'=>array('admin')),
);
?>

<h1>Create CityCustom</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>