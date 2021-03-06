<?php
/**
 * @var $form CActiveForm
 * @var $model ReportDailySearch
 */
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/assets/plugins/select2/select2.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/plugins/select2/select2.full.min.js');
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/assets/plugins/datepicker/datepicker3.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/plugins/datepicker/bootstrap-datepicker.js');

Yii::app()->clientScript->registerScript('search', "
    $('#search').collapse('hide');
    $('#unit').select2();
    $('.search-form').submit(function(){
        $('#unit-grid').yiiGridView('update', {
            data: $(this).serialize()
        });
        return false;
    });
    $('.datepicker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
    });
");

$form = $this->beginWidget('CActiveForm', array(
    'action' => Yii::app()->createUrl($this->route),
    'method' => 'POST',
    'htmlOptions' => array('role' => 'form', 'class' => 'search-form')
));
?>
<div class="box-body" id="search">
    <!--
    <div class="form-group">
        <?php echo $form->dropDownList($model, 'type', ReportType::getAllOptions(), array(
            'class'=>'form-control',
            'prompt'=>'Pilih Tipe Laporan'
        )) ?>
    </div>
    -->
    <div class="row">
    <div class="form-group col-md-6 col-xs-12">
    <?php echo $form->dropDownList($model, 'unit_id', UnitCustom::getAllOptions(), array('class' => 'form-control', 'prompt' => 'Pilih Unit','id'=>'unit')); ?>
    </div>
    <div class="form-group col-md-3 col-xs-12">
        <?php echo $form->textField($model, 'start_date', array('class'=>'datepicker form-control', 'placeholder' => 'Tanggal Awal')); ?>
        <?php echo $form->error($model, 'start_date'); ?>
    </div>
    <div class="form-group col-md-3 col-xs-12">
        <?php echo $form->textField($model, 'end_date', array('class'=>'datepicker form-control', 'placeholder' => 'Tanggal Akhir')); ?>
        <?php echo $form->error($model, 'end_date'); ?>     
    </div>
    <div class="form-group col-xs-12">
        <?php echo CHtml::submitButton('Preview', array('class' => 'btn btn-primary search-button')); ?>
    </div>
    </div>
</div>

<?php $this->endWidget(); ?>
