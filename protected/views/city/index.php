<?php
/* @var $this CityController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'City Customs',
);

$this->menu = array(
    array('label' => 'Create CityCustom', 'url' => array('create')),
    array('label' => 'Manage CityCustom', 'url' => array('admin')),
);
?>

<h1>City Customs</h1>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
)); ?>
