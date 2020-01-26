<?php
/* @var $this TeacherController */
/* @var $model TeacherCustom */
/* @var $form CActiveForm */

Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/assets/plugins/select2/select2.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/plugins/select2/select2.full.min.js');
Yii::app()->clientScript->registerScript('asd1f',"
    $('#unit').select2();
",CClientScript::POS_END);
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
            <?php echo $form->labelEx($model, 'unit_id'); ?>
            <?php echo $form->dropDownList($model, 'unit_id', UnitCustom::getAllOptions(), array('class' => 'form-control', 'prompt' => 'Pilih Unit','id'=>'unit')); ?>
            <?php echo $form->error($model, 'unit_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'name'); ?>
            <?php echo $form->textField($model, 'name', array('class' => 'form-control', 'placeholder' => 'Nama Guru')); ?>
            <?php echo $form->error($model, 'name'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'phone'); ?>
            <?php echo $form->textField($model, 'phone', array('class' => 'form-control', 'placeholder' => 'No Telp')); ?>
            <?php echo $form->error($model, 'phone'); ?>
        </div>

    </div><!-- /.box-body -->

    <div class="box-footer">
        <?php echo CHtml::submitButton('Simpan', array('class' => 'btn btn-success')); ?>
        &nbsp;
        <?php echo CHtml::linkButton('Kembali', array('class' => 'btn btn-danger', 'href' => array('teacher/admin'))); ?>
    </div>
    <?php $this->endWidget(); ?>
</div>


