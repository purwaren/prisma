<?php
/* @var $this UnitController */
/* @var $model UnitCustom */

$this->breadcrumbs = array(
    'Unit Customs' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List UnitCustom', 'url' => array('index')),
    array('label' => 'Create UnitCustom', 'url' => array('create')),
    array('label' => 'Update UnitCustom', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete UnitCustom', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage UnitCustom', 'url' => array('admin')),
);
?>

<h1>View UnitCustom #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'unit_no',
        'owner',
        'address_id',
        'wa_number',
        'trainer',
        'consultant',
        'status',
        'start_date',
        'expired_at',
        'created_by',
        'created_at',
        'updated_by',
        'updated_at',
    ),
)); ?>
