<?php
/* @var $this DistrictController */
/* @var $model DistrictCustom */

$this->breadcrumbs = array(
    'District Customs' => array('index'),
    $model->name => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List DistrictCustom', 'url' => array('index')),
    array('label' => 'Create DistrictCustom', 'url' => array('create')),
    array('label' => 'View DistrictCustom', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage DistrictCustom', 'url' => array('admin')),
);
?>

    <h1>Update DistrictCustom <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>