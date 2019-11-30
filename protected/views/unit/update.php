<?php
/* @var $this UnitController */
/* @var $model UnitCustom */

$this->breadcrumbs = array(
    'Unit Customs' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List UnitCustom', 'url' => array('index')),
    array('label' => 'Create UnitCustom', 'url' => array('create')),
    array('label' => 'View UnitCustom', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage UnitCustom', 'url' => array('admin')),
);
?>

    <h1>Update UnitCustom <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>