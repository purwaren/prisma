<?php
/* @var $this EventController */
/* @var $model EventCustom */

$this->breadcrumbs=array(
	'Event Customs'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EventCustom', 'url'=>array('index')),
	array('label'=>'Create EventCustom', 'url'=>array('create')),
	array('label'=>'View EventCustom', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EventCustom', 'url'=>array('admin')),
);
?>

<h1>Update EventCustom <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>