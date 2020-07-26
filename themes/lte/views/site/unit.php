<?php
/**
 * @var $this Controller
 * @var $model UnitCustom
 */

$this->pageTitle = 'Data Cabang/Unit PRISMA';
?>
<div class="main-cols-wrapper">
    <div class="container">
        <div class="row">
            <section class="col-12 col-lg-12" style="padding: 20px 0px 20px 0px">
                <div class="table-responsive" style="font-size: 0.9em !important">
                    <?php $this->widget('zii.widgets.grid.CGridView', array(
                        'id' => 'unit-grid',
                        'dataProvider' => $model->search(),
                        //'filter'=>$model,
                        'columns' => array(
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
            </section><!--//col-main-->
        </div><!--//row-->
    </div><!--//container-->
</div><!--//main-cols-wrapper-->
