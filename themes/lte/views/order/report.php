<?php
/**
 * @var $this OrderController
 * @var $model ReportDailySearch
 */
$this->pageTitle = 'Rekap Transaksi Unit';
$items = ItemCustom::model()->findAllByAttributes(array(
    'cat_id' => 1
));

$units = UnitCustom::getAllUnits();


$itemList = '';
foreach ($items as $item) {
    $itemList .= '<th class="text-center">'.$item->name.'</th>';
}

$data = $model->searchMonthlySummary();
$row_data = '';
$total = array();
$i=0;
$all_total = 0;
foreach ($data as $key=>$unit_data) {
    foreach($unit_data as $unit_id=>$row) {
        $row_data .= '<tr><td>'.++$i.'</td><td>'.$key.'</td>';
        $row_data .= '<td>'.$units[$unit_id].'</td>';
        $total_row = 0;
        foreach($items as $idx=>$item) {
            if (isset($row[$item->id])) {
                $row_data .= '<td>'.$row[$item->id].'</td>';
                $total[$idx] = isset($total[$idx]) ? $total[$idx]+$row[$item->id] : $row[$item->id];
                $total_row +=$row[$item->id];
            }
            else {
                $total[$idx] = isset($total[$idx]) ? $total[$idx] : 0;
                $row_data .= '<td> - </td>';
            }
        }
        $row_data .= '<td>'.$total_row.'</td></tr>';
        $all_total += $total_row;
    }
}
if (!empty($total)) {
    $row_total = '<tr><td colspan="3">TOTAL</td>';
    foreach ($total as $row) {
        $row_total .= '<td>'.$row.'</td>';
    }
    $row_total .= '<td>'.number_format($all_total).'</td></tr>';
}

?>

<section class="content">
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title"><a href="#search" data-widget="collapse" aria-controls="#search" aria-expanded="false"
                                     role="button">Rentang Waktu</a></h3>
        </div>
        <?php $this->renderPartial('_search_report', array('model' => $model)) ?>
    </div>
    <!-- Default box -->
    <?php if (!empty($data)) { ?>
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">
                <small>Laporan Transaksi Bulanan</small>
            </h3>
        </div>
        <div class="box-body table-responsive">
            <p>
                <?php echo CHtml::link('Print',array('report/detail','start'=>$model->start_date, 'end'=>$model->end_date), array('class'=>'btn btn-primary','target'=>'_new')) ?>
                <?php echo CHtml::link('Download Excel',array('report/detail','start'=>$model->start_date, 'end'=>$model->end_date, 'type'=>'xls'), array('class'=>'btn btn-success','target'=>'_new')) ?>
            </p>
            
            <table class="table table-striped table-bordered table-hover dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th class="text-center">Tanggal</th>
                        <th class="">Unit</th>
                        <?php echo $itemList ?>
                        <th>TOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $row_data.$row_total ?>
                </tbody>
            </table>
        </div><!-- /.box-body -->
        <div class="box-footer">
            <?php echo CHtml::link('Print',array('report/detail','start'=>$model->start_date, 'end'=>$model->end_date), array('class'=>'btn btn-primary', 'target'=>'_new')) ?>
            <?php echo CHtml::link('Download Excel',array('report/detail','start'=>$model->start_date, 'end'=>$model->end_date, 'type'=>'xls'), array('class'=>'btn btn-success','target'=>'_new')) ?>
        </div>
    </div><!-- /.box -->
    <?php } ?>
</section><!-- /.content -->