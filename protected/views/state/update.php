<?php
/* @var $this StateController */
/* @var $model StateCustom */

$this->breadcrumbs=array(
	'State Customs'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StateCustom', 'url'=>array('index')),
	array('label'=>'Create StateCustom', 'url'=>array('create')),
	array('label'=>'View StateCustom', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage StateCustom', 'url'=>array('admin')),
);
?>

<h1>Update StateCustom <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>