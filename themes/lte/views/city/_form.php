<?php
/* @var $this PageController */
/* @var $model Page */
/* @var $form CActiveForm */
?>



<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title"><small>Isian bertanda * tidak boleh dikosongkan</small></h3>
	</div><!-- /.box-header -->
	<!-- form start -->
	<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'page-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
			'enableAjaxValidation'=>false,
			'htmlOptions'=>array('role'=>'form')
	)); ?>
		<div class="box-body">
			<div class="form-group">
				<?php echo $form->labelEx($model,'id'); ?>
				<?php echo $form->textField($model,'id',array('class'=>'form-control','disabled'=>'disabled')); ?>
				<?php echo $form->error($model,'id'); ?>
			</div>
            <div class="form-group">
                <?php echo $form->labelEx($model,'name'); ?>
                <?php echo $form->textField($model,'name',array('class'=>'form-control','disabled'=>'disabled')); ?>
                <?php echo $form->error($model,'name'); ?>
            </div>
            <div class="form-group">
                <?php echo $form->labelEx($model,'unit_code'); ?>
                <?php echo $form->textField($model,'unit_code',array('class'=>'form-control')); ?>
                <?php echo $form->error($model,'unit_code'); ?>
            </div>

		</div><!-- /.box-body -->

		<div class="box-footer">
			<?php echo CHtml::submitButton('Simpan',array('class'=>'btn btn-primary')); ?>
			&nbsp;
			<?php echo CHtml::linkButton('Kembali',array('class'=>'btn btn-danger','href'=>array('city/admin'))); ?>
		</div>
	<?php $this->endWidget(); ?>
</div>


