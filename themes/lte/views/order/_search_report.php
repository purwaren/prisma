<?php
/**
 * @var $form CActiveForm
 * @var $model ReportDailySearch
 */
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/assets/plugins/datepicker/datepicker3.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/plugins/datepicker/bootstrap-datepicker.js');

Yii::app()->clientScript->registerScript('search', "
    $('#search').collapse('hide');
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
    <div class="form-group">
        <?php echo $form->dropDownList($model, 'type', ReportType::getAllOptions(), array(
            'class'=>'form-control',
            'prompt'=>'Pilih Tipe Laporan'
        )) ?>
    </div>
    <div class="form-group">
        <?php echo $form->textField($model, 'start_date', array('class'=>'datepicker form-control', 'placeholder' => 'Tanggal Awal')); ?>
    </div>
    <div class="form-group">
        <?php echo $form->textField($model, 'end_date', array('class'=>'datepicker form-control', 'placeholder' => 'Tanggal Akhir')); ?>
    </div>
    <div class="form-group">
        <?php echo CHtml::submitButton('Preview', array('class' => 'btn btn-primary search-button')); ?>
    </div>
</div>

<?php $this->endWidget(); ?>
