<?php
/* @var $this ItemCategoryController */
/* @var $model ItemCategoryCustom */


$this->pageTitle = 'Ubah Kategori Barang';
$this->breadcrumbs = array(
    'Kategori Barang' => array('itemCategory/admin'),
    'Ubah'
);
?>
<!-- Main content -->
<section class="content">
    <?php $this->renderPartial('_form', array('model' => $model)) ?>
</section><!-- /.content -->