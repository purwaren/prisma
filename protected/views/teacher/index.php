<?php
/* @var $this TeacherController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Teacher Customs',
);

$this->menu=array(
	array('label'=>'Create TeacherCustom', 'url'=>array('create')),
	array('label'=>'Manage TeacherCustom', 'url'=>array('admin')),
);
?>

<h1>Teacher Customs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
