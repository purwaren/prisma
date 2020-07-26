<?php
/**
 * @var $this Controller
 * @var $model UnitCustom
 */

$this->pageTitle = 'Detail Unit';
?>
<div class="main-cols-wrapper">
    <div class="container">
        <div class="row">
            <section class="col-12 col-lg-12" style="padding: 20px 0px 20px 0px">
            <h4><i>Informasi Umum</i></h4>
                    <?php $this->widget('zii.widgets.CDetailView', array(
                        'data' => $model,
                        'attributes' => array(
                            'unit_no',
                            'trainer',
                            'consultant',
                            array(
                                'label'=>'Status',
                                'value'=>$model->getStatus()
                            ),
                            'start_date',
                            'expired_at'
                        ),
                        'htmlOptions' => array(
                            'class' => 'table table-hover table-striped table-detail-view'
                        ),
                    )); ?>
                    <h4><i>Pemilik Unit</i></h4>
                    <?php $this->widget('zii.widgets.CDetailView', array(
                        'data' => $model,
                        'attributes' => array(
                            'owner',
                            'wa_number'
                        ),
                        'htmlOptions' => array(
                            'class' => 'table table-hover table-striped table-detail-view'
                        ),
                    )); ?>
                    <h4><i>Alamat Unit</i></h4>
                    <?php $this->widget('zii.widgets.CDetailView', array(
                        'data' => $model,
                        'attributes' => array(
                            'address.address_1',
                            'address.address_2',
                            array(
                                'name' => 'address.district',
                                'value' => $model->address->getDistrict()
                            ),
                            array(
                                'name' => 'address.city',
                                'value' => $model->address->getCity()
                            ),
                            array(
                                'name' => 'address.state',
                                'value' => $model->address->getState()
                            )
                        ),
                        'htmlOptions' => array(
                            'class' => 'table table-hover table-striped table-detail-view'
                        ),
                    )); ?>
                    <h4><i>Guru Pendamping</i></h4>
                    <?php $this->widget('zii.widgets.grid.CGridView', array(
                        'id' => 'users-grid',
                        'dataProvider' => $teacher->search(),
                        //'filter'=>$model,
                        'columns' => array(
                            array(
                                'header' => 'No',
                                'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize+$row+1'
                            ),
                            'name',
                            'phone',
                            array(
                                'class' => 'CButtonColumn',
                                'template' => '{view}',
                                'buttons' => array(
                                    'view' => array(
                                        'label' => '<i class="fa fa-search"></i>',
                                        'imageUrl' => false,
                                        'options' => array('class' => 'btn btn-xs btn-primary', 'title' => 'Detail', 'data-toggle' => 'tooltip')
                                    )
                                )
                            ),
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
                    <a href="#" onclick="window.history.back()" class="btn btn-ghost-alt">Kembali</a>
            </section>
        </div><!--//row-->
    </div><!--//container-->
</div><!--//main-cols-wrapper-->
