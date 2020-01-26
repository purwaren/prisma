<?php
/* @var $this OrderController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Order Customs',
);

$this->menu=array(
	array('label'=>'Create OrderCustom', 'url'=>array('create')),
	array('label'=>'Manage OrderCustom', 'url'=>array('admin')),
);
?>

<h1>Order Customs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
