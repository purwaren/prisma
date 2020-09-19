<?php
/* @var $this Controller */
$this->pageTitle = 'Ubah Event';
$this->breadcrumbs = array(
    'Event' => array('event/admin'),
    'Ubah'
);
?>
<!-- Main content -->
<section class="content">
    <?php $this->renderPartial('_form', array('model' => $model)) ?>
</section><!-- /.content -->