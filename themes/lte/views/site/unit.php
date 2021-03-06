<?php
/**
 * @var $this Controller
 * @var $model UnitCustom
 */

$this->pageTitle = 'Data Cabang/Unit PRISMA';

Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/assets/plugins/select2/select2.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/plugins/select2/select2.full.min.js');

Yii::app()->clientScript->registerScript('sdfs', "
    $('#search-unit').submit(function(event){
        $('#unit-grid').yiiGridView('update', {
            data: $(this).serialize()
        });
        return false;
    })
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

Yii::app()->clientScript->registerCss('csdfs',"
    .select2-container .select2-selection--single {
        height: 45px !important;
    }
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        line-height: 45px !important;
    }
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 50;
        background: rgba(255,255,255,0.7);
        border-radius: 3px;
        padding-top: 30%;
    }
");

?>
<div class="main-cols-wrapper">
    <div class="container">
        <div class="row">
            <section class="col-12 col-lg-12" style="padding: 20px 0px 20px 0px">
            <?php $form = $this->beginWidget('CActiveForm', array(
                'action' => Yii::app()->createUrl($this->route),
                'method' => 'get',
                'htmlOptions'=>array('id'=> 'search-unit')
            ));
            ?>
                <div class="contact-form-inner">
                    <div class="form-row">                                                                                       
                        <div class="col-2 col-xs-6 form-group">
                            <?php echo $form->textField($model, 'unit_no', array('class' => 'form-control', 'placeholder' => 'No. Unit')); ?>
                        </div> 
                        <div class="col-2 col-xs-6 form-group">
                            <?php echo $form->dropDownList($model, 'state', StateCustom::getAllOptions(),
                            array('prompt'=>'Provinsi','class'=>'select2 form-control', 'id'=>'state'))?>
                        </div> 
                        <div class="col-2 col-xs-6 form-group">
                        <?php echo $form->dropDownList($model, 'city', array(),
                            array('prompt'=>'Kab / Kota','class'=>'form-control','id'=>'city'))?>
                        </div>                     
                        <div class="col-2 col-xs-6 form-group">
                        <?php echo $form->dropDownList($model, 'district', array(),
                            array('prompt'=>'Kecamatan','class'=>'form-control', 'id'=>'district'))?>
                        </div> 
                        <div class="col-2 col-xs-6 form-group">
                            <?php echo $form->textField($model, 'address_2', array('class' => 'form-control', 'placeholder' => 'Kelurahan')); ?>
                        </div> 
                        <div class="col-2 col-xs-6 form-group">
                            <button type="submit" class="btn btn-block btn-cta btn-primary">Search</button>
                        </div>                           
                    </div><!--//row-->
                </div>
            <?php $this->endWidget(); ?>
                <div class="table-responsive" style="font-size: 0.9em !important">
                    <?php $this->widget('zii.widgets.grid.CGridView', array(
                        'id' => 'unit-grid',
                        'dataProvider' => $model->search(),
                        //'filter'=>$model,
                        'columns' => array(
                            array(
                                'header' => 'No',
                                'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize+$row+1'
                            ),
                            array(
                                'header'=>'No. Unit',
                                'name'=>'unit_no',
                                'type'=>'raw',
                                'value'=>'CHtml::link($data->unit_no,array("/site/unit","id"=>$data->id))'
                            ),
                            'owner',
                            array(
                                'name' => 'status',
                                'value' => '$data->getStatus()'
                            ),
                            'address.address_2',
                            array(
                                'name' => 'address.district',
                                'value' => '!empty($data->address)?$data->address->getDistrict():null'
                            ),
                            array(
                                'name' => 'address.city',
                                'value' => '!empty($data->address)?$data->address->getCity():null'
                            ),
                            array(
                                'name' => 'address.state',
                                'value' => '!empty($data->address)?$data->address->getState():null'
                            ),
                            /*
                            array(
                                'class' => 'CButtonColumn',
                                'template' => '{view}',
                                'buttons' => array(
                                    'view' => array(
                                        'label' => '<i class="fa fa-search"></i>',
                                        'imageUrl' => false,
                                        'options' => array('class' => 'btn btn-xs btn-primary', 'title' => 'Detail')
                                    )
                                )
                            ),
                            */
                        ),
                        'itemsCssClass' => 'table table-striped table-bordered table-hover dataTable',
                        'cssFile' => false,
                        'summaryCssClass' => 'dataTables_info',
                        'template' => '{summary}{items}{pager}',
                        'pagerCssClass' => 'pagination-container text-center',
                        'pager' => array(
                            'htmlOptions' => array('class' => 'pagination'),
                            'internalPageCssClass' => 'page-item',
                            'selectedPageCssClass' => 'active',
                            'header' => '',
                            'firstPageCssClass' => 'page-item',
                            'firstPageLabel'=> '<<',
                            'previousPageCssClass' => 'page-item',
                            'prevPageLabel' => '<',
                            'nextPageCssClass'=>'page-item',
                            'nextPageLabel' => '>',
                            'lastPageCssClass' => 'page-item',
                            'lastPageLabel' => '>>'
                        ),
                        'beforeAjaxUpdate' => "function(){
                            $('#loading').show();
                        }",
                        'afterAjaxUpdate' => "function(){
                            $('#loading').hide();
                        }"
                    )); ?>
                </div>
                <div class="overlay text-center" id="loading" style="display: none">
                    <i class="fas fa-2x fa-sync fa-spin"></i>
                </div>
            </section><!--//col-main-->
        </div><!--//row-->
    </div><!--//container-->
</div><!--//main-cols-wrapper-->
