<?php
/* @var $this TeacherController */
/* @var $model TeacherCustom */
$this->pageTitle = 'Tambah Guru';
$this->breadcrumbs = array(
    'Guru' => array('teacher/admin'),
    'Tambah'
);
?>
<!-- Main content -->
<section class="content">
    <?php $this->renderPartial('_form', array('model' => $model)) ?>
</section><!-- /.content -->