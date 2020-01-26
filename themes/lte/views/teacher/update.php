<?php
/* @var $this Controller */
$this->pageTitle = 'Ubah Data Guru';
$this->breadcrumbs = array(
    'Guru' => array('teacher/admin'),
    'Ubah'
);
?>
<!-- Main content -->
<section class="content">
    <?php $this->renderPartial('_form', array('model' => $model)) ?>
</section><!-- /.content -->