<?php
/* @var $this ItemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Item Customs',
);

$this->menu=array(
	array('label'=>'Create ItemCustom', 'url'=>array('create')),
	array('label'=>'Manage ItemCustom', 'url'=>array('admin')),
);
?>

<h1>Item Customs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
