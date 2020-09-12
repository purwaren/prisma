<?php
/* @var $this ItemCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Item Category Customs',
);

$this->menu=array(
	array('label'=>'Create ItemCategoryCustom', 'url'=>array('create')),
	array('label'=>'Manage ItemCategoryCustom', 'url'=>array('admin')),
);
?>

<h1>Item Category Customs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
