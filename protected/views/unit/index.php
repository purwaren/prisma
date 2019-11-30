<?php
/* @var $this UnitController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Unit Customs',
);

$this->menu = array(
    array('label' => 'Create UnitCustom', 'url' => array('create')),
    array('label' => 'Manage UnitCustom', 'url' => array('admin')),
);
?>

<h1>Unit Customs</h1>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
)); ?>
