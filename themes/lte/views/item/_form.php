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
            <?php echo $form->labelEx($model, 'cat_id'); ?>
            <?php echo $form->dropDownList($model, 'cat_id',ItemCategoryCustom::getAllOptions(), array('class' => 'form-control', 'prompt' => 'Pilih Kategori')); ?>
            <?php echo $form->error($model, 'cat_id'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'code'); ?>
            <?php echo $form->textField($model, 'code', array('class' => 'form-control', 'placeholder' => 'contoh: 001')); ?>
            <?php echo $form->error($model, 'code'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'name'); ?>
            <?php echo $form->textField($model, 'name', array('class' => 'form-control', 'placeholder' => 'contoh: Modul level 1')); ?>
            <?php echo $form->error($model, 'name'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'price'); ?>
            <?php echo $form->textField($model, 'price', array('class' => 'form-control', 'type'=>'number')); ?>
            <?php echo $form->error($model, 'price'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'stock'); ?>
            <?php echo $form->textField($model, 'stock', array('class' => 'form-control', 'type'=>'number')); ?>
            <?php echo $form->error($model, 'stock'); ?>
        </div>

    </div><!-- /.box-body -->

    <div class="box-footer">
        <?php echo CHtml::submitButton('Simpan', array('class' => 'btn btn-success')); ?>
        &nbsp;
        <?php echo CHtml::linkButton('Kembali', array('class' => 'btn btn-danger', 'href' => array('item/admin'))); ?>
    </div>
    <?php $this->endWidget(); ?>
</div>


