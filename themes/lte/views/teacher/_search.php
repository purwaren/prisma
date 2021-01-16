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
        $('#teachers-grid').yiiGridView('update', {
            data: $(this).serialize()
        });
        return false;
    });
    $('.select2').select2();
");

$form = $this->beginWidget('CActiveForm', array(
    'action' => Yii::app()->createUrl($this->route),
    'method' => 'get',
    'htmlOptions' => array('role' => 'form', 'class' => 'search-form')
));
?>
<div class="box-body" id="search">
    <div class="form-group">
        <?php echo $form->dropDownList($model, 'unit_id', UnitCustom::getAllOptions(),array('prompt' => 'Pilih Unit/Cabang','class'=>'form-control select2')); ?>
    </div>
    <div class="form-group">
        <?php echo CHtml::submitButton('Search', array('class' => 'btn btn-primary search-button')); ?>
    </div>
</div>

<?php $this->endWidget(); ?>
