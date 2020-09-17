<?php
/* @var $this OrderController */
/* @var $model OrderCustom */
$this->pageTitle = 'Ubah Order';
$this->breadcrumbs = array(
    'Order' => array('order/admin'),
    'Ubah'
);
?>
<!-- Main content -->
<section class="content">
    <?php $this->renderPartial('_form', array('model' => $model)) ?>
</section><!-- /.content -->