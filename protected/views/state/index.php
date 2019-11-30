<?php
/* @var $this StateController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'State Customs',
);

$this->menu = array(
    array('label' => 'Create StateCustom', 'url' => array('create')),
    array('label' => 'Manage StateCustom', 'url' => array('admin')),
);
?>

<h1>State Customs</h1>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
)); ?>
