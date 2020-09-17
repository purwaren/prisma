<?php
/* @var $this OrderController */
/* @var $model OrderDeliveryForm */
/* @var $form CActiveForm */


Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/assets/plugins/datepicker/datepicker3.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/plugins/datepicker/bootstrap-datepicker.js');
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/assets/plugins/select2/select2.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/plugins/select2/select2.full.min.js');

Yii::app()->clientScript->registerScript('asd1f',"
    $('#unit').select2();
    $('#delivery_date').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
    });
",CClientScript::POS_END);
$model->delivery_date = date('Y-m-d');

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
            <?php echo $form->labelEx($model, 'delivery_date'); ?>
            <?php echo $form->textField($model, 'delivery_date', array('class' => 'form-control', 'id'=>'delivery_date')); ?>
            <?php echo $form->error($model, 'delivery_date'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'delivery_provider'); ?>
            <?php echo $form->dropDownList($model, 'delivery_provider', DeliveryProviderCustom::getAllOptions(), array('class' => 'form-control', 'prompt' => 'Pilih Pengiriman','id'=>'unit')); ?>
            <?php echo $form->error($model, 'delivery_provider'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'delivery_receipt_no'); ?>
            <?php echo $form->textField($model, 'delivery_receipt_no', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'delivery_receipt_no'); ?>
        </div>
    </div><!-- /.box-body -->

    <div class="box-footer">
        <?php echo CHtml::submitButton('Simpan', array('class' => 'btn btn-success')); ?>
        &nbsp;
        <?php echo CHtml::link('Kembali',array('order/admin'), array('class'=>'btn btn-danger')); ?>
    </div>
    <?php $this->endWidget(); ?>
</div>


