<?php
/* @var $this OrderController */
/* @var $model OrderCustom */

$this->breadcrumbs=array(
	'Order Customs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrderCustom', 'url'=>array('index')),
	array('label'=>'Create OrderCustom', 'url'=>array('create')),
	array('label'=>'View OrderCustom', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage OrderCustom', 'url'=>array('admin')),
);
?>

<h1>Update OrderCustom <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>