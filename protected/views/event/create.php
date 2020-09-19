<?php
/* @var $this EventController */
/* @var $model EventCustom */

$this->breadcrumbs=array(
	'Event Customs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EventCustom', 'url'=>array('index')),
	array('label'=>'Manage EventCustom', 'url'=>array('admin')),
);
?>

<h1>Create EventCustom</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>