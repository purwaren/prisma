<?php
/* @var $this ItemController */
/* @var $model ItemCustom */

$this->breadcrumbs=array(
	'Item Customs'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ItemCustom', 'url'=>array('index')),
	array('label'=>'Create ItemCustom', 'url'=>array('create')),
	array('label'=>'View ItemCustom', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ItemCustom', 'url'=>array('admin')),
);
?>

<h1>Update ItemCustom <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>