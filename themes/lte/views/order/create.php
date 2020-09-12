<?php
/* @var $this OrderController */
/* @var $model OrderCustom */
$this->pageTitle = 'Buat Order';
$this->breadcrumbs = array(
    'Order' => array('order/admin'),
    'Tambah'
);
?>
<!-- Main content -->
<section class="content">
    <?php $this->renderPartial('_form', array('model' => $model)) ?>
</section><!-- /.content -->