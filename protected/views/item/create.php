<?php
/* @var $this ItemController */
/* @var $model ItemCustom */

$this->breadcrumbs=array(
	'Item Customs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ItemCustom', 'url'=>array('index')),
	array('label'=>'Manage ItemCustom', 'url'=>array('admin')),
);
?>

<h1>Create ItemCustom</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>