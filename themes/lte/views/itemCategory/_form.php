<?php
/* @var $this TeacherController */
/* @var $model TeacherCustom */
/* @var $form CActiveForm */
?>


<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">
            <small>Isian bertanda * tidak boleh dikosongkan</small>
        </h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'page-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
        'htmlOptions' => array('role' => 'form')
    )); ?>
    <div class="box-body">

        <div class="form-group">
            <?php echo $form->labelEx($model, 'name'); ?>
            <?php echo $form->textField($model, 'name', array('class' => 'form-control', 'placeholder' => 'contoh: Buku Modul, Kaos')); ?>
            <?php echo $form->error($model, 'name'); ?>
        </div>

    </div><!-- /.box-body -->

    <div class="box-footer">
        <?php echo CHtml::submitButton('Simpan', array('class' => 'btn btn-success')); ?>
        &nbsp;
        <?php echo CHtml::linkButton('Kembali', array('class' => 'btn btn-danger', 'href' => array('itemCategory/admin'))); ?>
    </div>
    <?php $this->endWidget(); ?>
</div>


