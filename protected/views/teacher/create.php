<?php
/* @var $this TeacherController */
/* @var $model TeacherCustom */

$this->breadcrumbs=array(
	'Teacher Customs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TeacherCustom', 'url'=>array('index')),
	array('label'=>'Manage TeacherCustom', 'url'=>array('admin')),
);
?>

<h1>Create TeacherCustom</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>