<?php
/* @var $this ItemCategoryController */
/* @var $model ItemCategoryCustom */

$this->breadcrumbs=array(
	'Item Category Customs'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ItemCategoryCustom', 'url'=>array('index')),
	array('label'=>'Create ItemCategoryCustom', 'url'=>array('create')),
	array('label'=>'View ItemCategoryCustom', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ItemCategoryCustom', 'url'=>array('admin')),
);
?>

<h1>Update ItemCategoryCustom <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>