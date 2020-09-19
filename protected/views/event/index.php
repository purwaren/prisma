<?php
/* @var $this EventController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Event Customs',
);

$this->menu=array(
	array('label'=>'Create EventCustom', 'url'=>array('create')),
	array('label'=>'Manage EventCustom', 'url'=>array('admin')),
);
?>

<h1>Event Customs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
