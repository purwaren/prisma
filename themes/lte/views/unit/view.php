<?php
/* @var $this UnitController */
/* @var $model UnitCustom */
$this->pageTitle = 'Detil Unit';

$this->breadcrumbs=array(
	'Unit'=>array('admin'),
	$model->unit_no,
);

?>

<!-- Main content -->
<section class="content">
	<!-- Default box -->
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title"><small>Informasi Unit</small></h3>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
				<button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
			</div>
		</div>
		<div class="box-body">
            <h4><i>Informasi Umum</i></h4>
			<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$model,
					'attributes'=>array(
                        'no_unit',
                        'trainer',
                        'consultant',
                        'status',
                        'start_date',
                        'expired_at'
					),
					'htmlOptions'=>array(
						'class'=>'table table-hover table-striped table-detail-view'
					),
			)); ?>
            <h4><i>Pemilik Unit</i></h4>
            <?php $this->widget('zii.widgets.CDetailView', array(
                'data'=>$model,
                'attributes'=>array(
                    'owner',
                    'no_wa'
                ),
                'htmlOptions'=>array(
                    'class'=>'table table-hover table-striped table-detail-view'
                ),
            )); ?>
            <h4><i>Alamat Unit</i></h4>
            <?php $this->widget('zii.widgets.CDetailView', array(
                'data'=>$model,
                'attributes'=>array(
                    'address.address_1',
                    'address.address_2',
                    array(
                        'name'=>'district',
                        'value'=>$model->address->getDistrict()
                    ),
                    array(
                        'name'=>'city',
                        'value'=>$model->address->getCity()
                    ),
                    array(
                        'name'=>'state',
                        'value'=>$model->address->getState()
                    )
                ),
                'htmlOptions'=>array(
                    'class'=>'table table-hover table-striped table-detail-view'
                ),
            )); ?>
		</div><!-- /.box-body -->
		<div class="box-footer">
			<?php echo CHtml::link('Kembali',array('unit/admin'),array('class'=>'btn btn-primary'))?>
		</div><!-- /.box-footer-->
	</div><!-- /.box -->
</section><!-- /.content -->



