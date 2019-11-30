<?php
/* @var $this Controller */
$this->pageTitle = 'Tambah Unit';
$this->breadcrumbs = array(
    'Kategori' => array('unit/admin'),
    'Tambah'
);
?>
<!-- Main content -->
<section class="content">
    <?php $this->renderPartial('_form', array('model' => $model)) ?>
</section><!-- /.content -->