<?php
/* @var $this TeacherController */
/* @var $model TeacherCustom */

$this->breadcrumbs=array(
	'Teacher Customs'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TeacherCustom', 'url'=>array('index')),
	array('label'=>'Create TeacherCustom', 'url'=>array('create')),
	array('label'=>'View TeacherCustom', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TeacherCustom', 'url'=>array('admin')),
);
?>

<h1>Update TeacherCustom <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>