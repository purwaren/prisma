<?php
/* @var $this StateController */
/* @var $model StateCustom */

$this->breadcrumbs = array(
    'State Customs' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => 'List StateCustom', 'url' => array('index')),
    array('label' => 'Create StateCustom', 'url' => array('create')),
    array('label' => 'Update StateCustom', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete StateCustom', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage StateCustom', 'url' => array('admin')),
);
?>

<h1>View StateCustom #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'name',
    ),
)); ?>
