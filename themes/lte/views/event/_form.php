<?php
/* @var $this EventController */
/* @var $model EventForm */
/* @var $form CActiveForm */
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/plugins/bootstrap-fileinput/fileinput.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/assets/plugins/bootstrap-fileinput/css/fileinput.min.css');

// Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/assets/plugins/datepicker/datepicker3.css');
// Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/plugins/datepicker/bootstrap-datepicker.js');

Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/assets/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/bower_components/moment/min/moment-with-locales.min.js');
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js');

if (empty($model->banner_url))
    Yii::app()->clientScript->registerScript('upload', "
		$('#uploadFile').fileinput({
			showCaption: false,
			uploadUrl: '" . Yii::app()->createUrl('news/upload', array('type' => 'banner')) . "',
			uploadAsync: true,
			maxFileCount: 1
		});
	");
else
    Yii::app()->clientScript->registerScript('upload', "
		$('#uploadFile').fileinput({
			showCaption: false,
			uploadUrl: '" . Yii::app()->createUrl('news/upload', array('type' => 'banner')) . "',
			initialPreview: ['" . CHtml::image($model->banner_url, $model->title, array('class' => 'file-preview-image')) . "'],
			uploadAsync: true,
			maxFileCount: 1
		});
	");
Yii::app()->clientScript->registerScript('uploaded', "
	$('#uploadFile').on('fileuploaded', function(event, data, previewId, index) {
		var form = data.form, files = data.files, extra = data.extra,
			response = data.response, reader = data.reader;
		$('#banner').val(response.imageUrl);
    });
    $('.date').datetimepicker({
        format: 'YYYY-MM-DD H:mm:ss'
    });
");
?>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">
            <small>Isian bertanda * tidak boleh dikosongkan</small>
        </h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'news-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
        'htmlOptions' => array('role' => 'form')
    )); ?>

    <div class="box-body">
        <div class="form-group">
            <?php echo $form->labelEx($model, 'title'); ?>
            <?php echo $form->textField($model, 'title', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'title'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'start_time'); ?>
            <?php echo $form->textField($model, 'start_time', array('class' => 'form-control date')); ?>
            <?php echo $form->error($model, 'start_time'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'end_time'); ?>
            <?php echo $form->textField($model, 'end_time', array('class' => 'form-control date')); ?>
            <?php echo $form->error($model, 'end_time'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'banner_url'); ?>
            <div class="input-group input-group-sm">
                <?php echo $form->hiddenField($model, 'banner_url', array('class' => 'form-control', 'placeholder' => 'Banner ', 'id' => 'banner')); ?>
                <span class="input-group-btn">
<!--						<button class="btn btn-info btn-flat" type="button" id="uploadButton">Upload</button>-->
						<input type="file" multiple class="file-loading" id="uploadFile"/>
					</span>
            </div>
            <?php echo $form->error($model, 'banner_url'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'description'); ?>
            <?php $this->widget('ext.redactor.ERedactorWidget', array(
                'model' => $model,
                'attribute' => 'description',
                'options' => array(
                    'lang' => 'id',
                    'imageUpload' => Yii::app()->createUrl('event/upload', array('type' => 'image'))
                )
            )) ?>
            <?php echo $form->error($model, 'description'); ?>
        </div>

    </div><!-- /.box-body -->

    <div class="box-footer">
        <?php echo CHtml::submitButton('Simpan', array('class' => 'btn btn-success')); ?>
        &nbsp;
        <?php echo CHtml::linkButton('Kembali', array('class' => 'btn btn-danger', 'href' => array('news/admin'))); ?>
    </div>
    <?php $this->endWidget(); ?>
</div>


