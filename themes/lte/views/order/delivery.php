<?php
/* @var $this OrderController */
/* @var $model OrderCustom */
$this->pageTitle = 'Pengiriman Order';
$this->breadcrumbs = array(
    'Order' => array('order/admin'),
    'Pengiriman'
);
?>
<!-- Main content -->
<section class="content">
    <?php $this->renderPartial('_delivery', array('model' => $model)) ?>
</section><!-- /.content -->