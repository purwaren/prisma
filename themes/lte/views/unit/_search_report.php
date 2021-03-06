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
    <div class="row">
    <div class="form-group col-md-4">
        <?php echo $form->textField($model, 'start_date', array('class'=>'datepicker form-control', 'placeholder' => 'Tanggal Awal')); ?>
        <?php echo $form->error($model, 'start_date'); ?>
    </div>
    <div class="form-group col-md-4">
        <?php echo $form->textField($model, 'end_date', array('class'=>'datepicker form-control', 'placeholder' => 'Tanggal Akhir')); ?>
        <?php echo $form->error($model, 'end_date'); ?>     
    </div>
    <div class="form-group col-md-4">
        <?php echo $form->dropDownList($model, 'sort_type', array('DESC'=> 'Urutkan Tinggi >> Rendah', 'ASC' => 'Urutkan Rendah >> Tinggi'),
        array('class'=>'form-control',)); ?>
        <?php echo $form->error($model, 'sort_type'); ?>     
    </div>
    <div class="form-group col-xs-12">
        <?php echo CHtml::submitButton('Preview', array('class' => 'btn btn-primary search-button')); ?>
    </div>
    </div>
</div>

<?php $this->endWidget(); ?>
