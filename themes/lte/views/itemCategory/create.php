<?php
/* @var $this ItemController */
/* @var $model ItemCustom */
$this->pageTitle = 'Tambah Kategori Barang';
$this->breadcrumbs = array(
    'Kategori Barang' => array('itemCategory/admin'),
    'Tambah'
);
?>
<!-- Main content -->
<section class="content">
    <?php $this->renderPartial('_form', array('model' => $model)) ?>
</section><!-- /.content -->