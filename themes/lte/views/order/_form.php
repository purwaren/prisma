<?php
/* @var $this OrderController */
/* @var $model OrderForm */
/* @var $form CActiveForm */

Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/assets/plugins/select2/select2.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/plugins/select2/select2.full.min.js');
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/assets/plugins/datepicker/datepicker3.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/plugins/datepicker/bootstrap-datepicker.js');
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/plugins/bootstrap-typeahead/js/bootstrap-typeahead.min.js');
Yii::app()->clientScript->registerScript('asd1f',"
    $('#unit').select2();
    $('#order_date').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
    });
    $('form').submit(function(event){
        var item = $('.dataTable tbody tr').length;
        if (item < 1) {
            event.preventDefault();
            alert('Anda harus input setidaknya 1 barang')
        }
    });
    var items = [];
    $('#barcode').typeahead({
        onSelect: function(item) {
            console.log(item);
            var url = '".Yii::app()->createUrl('item')."/'+item.value
            ".CHtml::ajax(array(
                'url' =>'js:url',
                'dataType'=>'JSON',
                'success' => "function(data){
                    appendRow(data);
                    $('#barcode').val('');
                }"
            ))."
        },
        ajax: {
            url: '".Yii::app()->createUrl('item/search')."'
            
        }
    });
    function appendRow(data) {
        var i = $('.dataTable tbody tr').length + 1
        $('.dataTable tbody').append('<tr></tr>');
        $('.dataTable tbody tr:last-child').append('<td>'+i+'</td>');
        $('.dataTable tbody tr:last-child').append('<td>'+data.name+'<input type=\"hidden\" value=\"'+data.id+'\" name=\"OrderForm[item_id][]\"/></td>');
        $('.dataTable tbody tr:last-child').append('<td class=\"text-right\">'+data.price+'</td>');
        $('.dataTable tbody tr:last-child').append('<td><input name=\"OrderForm[qty][]\" type=\"number\" value=\"1\" class=\"item-qty\"/></td>');
        $('.dataTable tbody tr:last-child').append('<td class=\"text-right\">'+data.price+'</td>');
        $('.item-qty').change(function(){
            sumTotal();
        })
        sumTotal();
    }
    function sumTotal() {
        var count = $('.dataTable tbody tr').length;
        var total = 0;
        if (count > 0) {
            for (var i=1; i<=count; i++) {
                var price = $('.dataTable tbody tr:nth-child('+i+') td:nth-child(3)').html();
                
                var qty = $('.dataTable tbody tr:nth-child('+i+') td:nth-child(4) input').val();
                
                total += parseInt(price) * parseInt(qty);
            }
        }
        $('#total').val(total);
    }
",CClientScript::POS_END);

$model->order_date = date('Y-m-d');

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
            <?php echo $form->labelEx($model, 'order_date'); ?>
            <?php echo $form->textField($model, 'order_date', array('class' => 'form-control', 'id'=>'order_date')); ?>
            <?php echo $form->error($model, 'order_date'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'unit_id'); ?>
            <?php echo $form->dropDownList($model, 'unit_id', UnitCustom::getAllOptions(), array('class' => 'form-control', 'prompt' => 'Pilih Unit','id'=>'unit')); ?>
            <?php echo $form->error($model, 'unit_id'); ?>
        </div>
        <div class="form-group text-center">
            <input type="text" id="barcode" autocomplete="off" />
        </div>
        <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover dataTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Barang</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        </div>
        <div class="form-group text-right">
            <input class="text-right" type="number" id="total" readonly/>
        </div>
    </div><!-- /.box-body -->

    <div class="box-footer">
        <?php echo CHtml::submitButton('Simpan', array('class' => 'btn btn-success')); ?>
        &nbsp;
        <?php echo CHtml::link('Kembali',array('order/admin'), array('class'=>'btn btn-danger')); ?>
    </div>
    <?php $this->endWidget(); ?>
</div>


