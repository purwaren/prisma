<?php
/* @var $this ItemController */
/* @var $model ItemCustom */
$this->pageTitle = 'Tambah Item';
$this->breadcrumbs = array(
    'Item' => array('item/admin'),
    'Tambah'
);
?>
<!-- Main content -->
<section class="content">
    <?php $this->renderPartial('_form', array('model' => $model)) ?>
</section><!-- /.content -->