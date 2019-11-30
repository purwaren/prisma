<?php
/* @var $this DistrictController */
/* @var $model DistrictCustom */

$this->breadcrumbs = array(
    'District Customs' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List DistrictCustom', 'url' => array('index')),
    array('label' => 'Manage DistrictCustom', 'url' => array('admin')),
);
?>

    <h1>Create DistrictCustom</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>