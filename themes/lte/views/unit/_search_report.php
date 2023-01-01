<?php
/**
 * @var $form CActiveForm
 * @var $model ReportDailySearch
 */
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/assets/plugins/datepicker/datepicker3.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/plugins/datepicker/bootstrap-datepicker.js');
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/assets/plugins/select2/select2.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/plugins/select2/select2.full.min.js');

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
    $('#state').select2();
    $('#state').on('change', function(){
        var state = $(this).val();
        var url = '" . Yii::app()->createUrl('site/city') . "?state_id='+state;
        " . CHtml::ajax(array(
        'url' => 'js:url',
        'type' => 'POST',
        'dataType' => 'JSON',
        'success' => "function(response){
                $('#city').html('');
                $('#city').select2({
                    data: response
                });
            }"
    )) . "
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
    </div>
    <div class="row">
        <div class="form-group col-md-4">
            <?php echo $form->dropDownList($model, 'state', StateCustom::getAllOptions(),
                array('class' => 'form-control', 'prompt' => 'Pilih Provinsi', 'id' => 'state')); ?>    
            <?php echo $form->error($model, 'state'); ?>     
        </div>
        <div class="form-group col-md-4">
            <?php echo $form->dropDownList($model, 'city', CityCustom::getAllOptions(),
                array('class' => 'form-control', 'id' => 'city', 'prompt' => 'Pilih Kab/Kota')); ?>  
            <?php echo $form->error($model, 'city'); ?>     
        </div>
    </div>
    <div class="row">
        <div class="form-group col-xs-12">
            <?php echo CHtml::submitButton('Preview', array('class' => 'btn btn-primary search-button')); ?>
        </div>
    </div>
</div>

<?php $this->endWidget(); ?>
