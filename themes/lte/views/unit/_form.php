<?php
/* @var $this UnitController */
/* @var $model UnitCustom */
/* @var $form CActiveForm */

Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/assets/plugins/select2/select2.css');
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/assets/plugins/datepicker/datepicker3.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/plugins/select2/select2.full.min.js');
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/plugins/datepicker/bootstrap-datepicker.js');

Yii::app()->clientScript->registerScript("sadf", "
    $('.date').datepicker({
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
    $('#addr2').on('change',function(){
        var state = $('#state').val();
        var city = $('#city').val();
        var district = $('#district').val();
        var address2 = $(this).val();
        var url = '".Yii::app()->createUrl('unit/address')."?state='+state+'&city='+city+'&district='+district+'&address2='+address2;
        ".CHtml::ajax(array(
            'url'=>'js:url',
            'type'=>'POST',
            'dataType'=>'JSON',
            'success'=>"function(resp){
                var msg = 'Sudah terdapat unit pada alamat: '+resp.address_1+', '+resp.address_2+'. Mohon cek kembali';
                alert(msg);
                $('#addr2-msg').html(msg);
                $('#addr2').attr('class', 'form-control error');
            }"
        ))."
    });
", CClientScript::POS_END);

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
        <h4><i>Informasi Unit</i></h4>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'unit_no'); ?>
            <?php echo $form->textField($model, 'unit_no', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'unit_no'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'trainer'); ?>
            <?php echo $form->textField($model, 'trainer', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'trainer'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'consultant'); ?>
            <?php echo $form->textField($model, 'consultant', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'consultant'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'status'); ?>
            <?php echo $form->dropDownList($model, 'status', UnitStatus::getAllOptions(),
                array('class' => 'form-control', 'prompt' => 'Pilih Status')); ?>
            <?php echo $form->error($model, 'status'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'start_date'); ?>
            <?php echo $form->textField($model, 'start_date', array('class' => 'form-control date')); ?>
            <?php echo $form->error($model, 'start_date'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'expired_at'); ?>
            <?php echo $form->textField($model, 'expired_at', array('class' => 'form-control date')); ?>
            <?php echo $form->error($model, 'expired_at'); ?>
        </div>

        <h4><i>Pemilik Unit</i></h4>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'owner'); ?>
            <?php echo $form->textField($model, 'owner', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'owner'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'wa_number'); ?>
            <?php echo $form->textField($model, 'wa_number', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'wa_number'); ?>
        </div>
        <h4><i>Alamat Unit</i></h4>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'state'); ?>
            <?php echo $form->dropDownList($model, 'state', StateCustom::getAllOptions(),
                array('class' => 'form-control', 'prompt' => 'Pilih Provinsi', 'id' => 'state')); ?>
            <?php echo $form->error($model, 'state'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'city'); ?>
            <?php echo $form->dropDownList($model, 'city', CityCustom::getAllOptions(),
                array('class' => 'form-control', 'id' => 'city', 'prompt' => 'Pilih Kab/Kota')); ?>
            <?php echo $form->error($model, 'city'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'district'); ?>
            <?php echo $form->dropDownList($model, 'district', DistrictCustom::getAllOptions(),
                array('class' => 'form-control', 'id' => 'district', 'prompt' => 'Pilih Kecamatan')); ?>
            <?php echo $form->error($model, 'district'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'address_2'); ?>
            <?php echo $form->textField($model, 'address_2', array('class' => 'form-control', 'id'=>'addr2')); ?>
            <div class="errorMessage" id="addr2-msg"></div>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'address_1'); ?>
            <?php echo $form->textField($model, 'address_1', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'address_1'); ?>
        </div>

    </div><!-- /.box-body -->

    <div class="box-footer">
        <?php echo CHtml::submitButton('Simpan', array('class' => 'btn btn-primary')); ?>
        &nbsp;
        <?php echo CHtml::linkButton('Batal', array('class' => 'btn btn-danger', 'href' => array('unit/admin'))); ?>
    </div>
    <?php $this->endWidget(); ?>
</div>


