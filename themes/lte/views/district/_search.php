<?php
/**
 * @var $form CActiveForm
 * @var $model UnitCustom
 */
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/assets/plugins/select2/select2.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/plugins/select2/select2.full.min.js');

Yii::app()->clientScript->registerScript('search', "
    $('#search').collapse('hide');
    $('.search-form').submit(function(){
        $('#state-grid').yiiGridView('update', {
            data: $(this).serialize()
        });
        return false;
    });
");

$form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions'=>array('role'=>'form','class'=>'search-form')
));
?>
<div class="box-body" id="search">
	<div class="form-group">
		<?php echo $form->textField($model,'name',array('class'=>'form-control','placeholder'=>'Nama Wilayah')); ?>
	</div>
	<div class="form-group">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-primary search-button')); ?>
	</div>
</div>

<?php $this->endWidget(); ?>
