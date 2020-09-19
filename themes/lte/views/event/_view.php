<?php
/**
 * @var $this EventController
 * @var $data EventCustom
 */
?>

<!-- Default box -->
<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title"><?php echo CHtml::encode($data->title); ?>
            <small class="hidden-xs"> ditulis oleh <strong><?php echo $data->created_by; ?></strong></small>
        </h3>
        <div class="box-tools pull-right hidden-xs">
            <span class="time"><i class="fa fa-calendar"></i> <?php echo $data->created_at; ?></span>
        </div>
        <div class="hidden-sm hidden-md hidden-lg">
            <small>Ditulis oleh <strong><?php echo $data->created_by; ?></strong>
                |  <?php echo $data->created_at; ?></span></small>
        </div>
    </div>
    <div class="box-body">
        <?php echo $data->description; ?>
    </div><!-- /.box-body -->
    <div class="box-footer">
        <?php echo CHtml::link('<i class="fa fa-search"></i> Detail', array('event/view', 'id' => $data->id), array('class' => 'btn btn-app')) ?>
        <?php echo CHtml::link('<i class="fa fa-edit"></i> Ubah', array('event/update', 'id' => $data->id), array('class' => 'btn btn-app')) ?>
        
        <?php if (Yii::app()->user->checkAccess('admin')) {
            echo CHtml::link('<i class="fa fa-trash"></i> Hapus', array('event/delete', 'id' => $data->id), array('class' => 'btn btn-app btn-delete'));
        } ?>
    </div><!-- /.box-footer-->
</div><!-- /.box -->