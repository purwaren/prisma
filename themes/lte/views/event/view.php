<?php
/* @var $this EventController */
/* @var $model EventCustom */
$this->pageTitle = 'Detail Event';

$this->breadcrumbs = array(
    'Event' => array('admin'),
    $model->title,
);
Yii::app()->clientScript->registerScript('img', "
    $('.content img').attr('class','img-responsive');
");
?>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title"><?php echo CHtml::encode($model->title); ?>
                <small class="hidden-xs"> ditulis oleh <strong><?php echo $model->created_by; ?></strong></small>
            </h3>
            <div class="box-tools pull-right hidden-xs">
                <span class="time"><i class="fa fa-calendar"></i> <?php echo $model->created_at; ?></span>
            </div>
            <div class="hidden-sm hidden-md hidden-lg">
                <small>Ditulis oleh <strong><?php echo $model->created_by; ?></strong>
                    |  <?php echo $model->created_at; ?></span></small>
            </div>
        </div>
        <div class="box-body">
            <img src="<?php echo $model->banner_url ?>" class="img-responsive"/>
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <th>Waktu Mulai</th>
                    <td><?php echo $model->start_time; ?></td>
                </tr>
                <tr>
                    <th>Waktu Berakhir</th>
                    <td><?php echo $model->end_time; ?></td>
                </tr>
                <tr>
                    <th>Keterangan</th>
                    <td><?php echo $model->description; ?></td>
                </tr>
            </table>
        </div><!-- /.box-body -->
        <div class="box-footer">
            <?php echo CHtml::link('Kembali', array('event/admin'), array('class' => 'btn btn-primary')) ?>
        </div><!-- /.box-footer-->
    </div><!-- /.box -->
</section><!-- /.content -->



