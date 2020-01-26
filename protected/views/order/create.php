<?php
/* @var $this OrderController */
/* @var $model OrderCustom */

$this->breadcrumbs=array(
	'Order Customs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OrderCustom', 'url'=>array('index')),
	array('label'=>'Manage OrderCustom', 'url'=>array('admin')),
);
?>

<h1>Create OrderCustom</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>