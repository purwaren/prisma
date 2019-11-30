<?php
/* @var $this DistrictController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'District Customs',
);

$this->menu = array(
    array('label' => 'Create DistrictCustom', 'url' => array('create')),
    array('label' => 'Manage DistrictCustom', 'url' => array('admin')),
);
?>

<h1>District Customs</h1>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
)); ?>
