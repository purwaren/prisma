<?php
/* @var $this StateController */
/* @var $model StateCustom */

$this->breadcrumbs = array(
    'State Customs' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List StateCustom', 'url' => array('index')),
    array('label' => 'Manage StateCustom', 'url' => array('admin')),
);
?>

    <h1>Create StateCustom</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>