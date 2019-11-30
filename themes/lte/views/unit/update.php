<?php
/* @var $this UnitController */
/* @var $model UnitCustom */

$this->pageTitle = 'Ubah Unit';
$this->breadcrumbs = array(
    'Unit' => array('unit/admin'),
    'Ubah'
);
?>
<!-- Main content -->
<section class="content">
    <?php $this->renderPartial('_form', array('model' => $model)) ?>
</section><!-- /.content -->