<?php
/* @var $this Controller */
$this->pageTitle = 'Tambah Event';
$this->breadcrumbs = array(
    'Event' => array('event/admin'),
    'Tambah'
);
?>
<!-- Main content -->
<section class="content">
    <?php $this->renderPartial('_form', array('model' => $model)) ?>
</section><!-- /.content -->