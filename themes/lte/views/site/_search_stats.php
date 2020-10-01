<?php
/**
 * @var $form CActiveForm
 * @var $model UnitCustom
 */
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
    $('#city').on('change', function(){
        var city = $(this).val();
        var url = '" . Yii::app()->createUrl('site/district') . "?city_id='+city;
        " . CHtml::ajax(array(
        'url' => 'js:url',
        'type' => 'POST',
        'dataType' => 'JSON',
        'success' => "function(response){
                $('#district').html('');
                $('#district').select2({
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
    <div class="form-group">
        <?php echo $form->dropDownList($model, 'state', StateCustom::getAllOptions(),
            array('class' => 'form-control', 'prompt' => 'Pilih Provinsi', 'id' => 'state')); ?>
    </div>
    <!--
    <div class="form-group">
        <?php echo $form->dropDownList($model, 'city', CityCustom::getAllOptions(),
            array('class' => 'form-control', 'id' => 'city', 'prompt' => 'Pilih Kab/Kota')); ?>
    </div>
    -->
    <div class="form-group">
        <?php echo CHtml::submitButton('Search', array('class' => 'btn btn-primary search-button')); ?>
    </div>
</div>

<?php $this->endWidget(); ?>
