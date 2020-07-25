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
                <div class="table-responsive">
                    <?php $this->widget('zii.widgets.grid.CGridView', array(
                        'id' => 'unit-grid',
                        'dataProvider' => $model->search(),
                        //'filter'=>$model,
                        'columns' => array(
                            array(
                                'header'=>'No. Unit',
                                'name'=>'unit_no'
                            ),
                            'owner',
                            array(
                                'name' => 'status',
                                'value' => '$data->getStatus()'
                            ),
                            'address.address_1',
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
                        'pagerCssClass' => 'dataTables_paginate paging_simple_numbers text-center',
                        'pager' => array(
                            'htmlOptions' => array('class' => 'pagination'),
                            'internalPageCssClass' => 'paginate_button',
                            'selectedPageCssClass' => 'active',
                            'header' => ''
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
