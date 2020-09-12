<?php
/* @var $this ItemController */
/* @var $model ItemCustom */


$this->pageTitle = 'Ubah Data Barang';
$this->breadcrumbs = array(
    'Barang' => array('item/admin'),
    'Ubah'
);
?>
<!-- Main content -->
<section class="content">
    <?php $this->renderPartial('_form', array('model' => $model)) ?>
</section><!-- /.content -->