<?php
/* @var $this UnitController */
/* @var $model UnitCustom */

$this->breadcrumbs=array(
	'Unit Customs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UnitCustom', 'url'=>array('index')),
	array('label'=>'Manage UnitCustom', 'url'=>array('admin')),
);
?>

<h1>Create UnitCustom</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>