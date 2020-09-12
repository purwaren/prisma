<?php
/* @var $this ItemCategoryController */
/* @var $model ItemCategoryCustom */

$this->breadcrumbs=array(
	'Item Category Customs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ItemCategoryCustom', 'url'=>array('index')),
	array('label'=>'Manage ItemCategoryCustom', 'url'=>array('admin')),
);
?>

<h1>Create ItemCategoryCustom</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>