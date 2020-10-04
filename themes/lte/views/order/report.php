<?php
/**
 * @var $this OrderController
 * @var $model ReportDailySearch
 */
$this->pageTitle = 'Laporan';
$items = ItemCustom::model()->findAllByAttributes(array(
    'cat_id' => 1
));

$itemList = '';
foreach ($items as $item) {
    $itemList .= '<th class="text-center">'.$item->name.'</th>';
}

$data = $model->searchMonthlySummary();
$row_data = '';
$total = array();
foreach ($data as $key=>$row) {
    $row_data .= '<tr><td>'.$key.'</td>';
    foreach($items as $idx=>$item) {
        if (isset($row[$item->id])) {
            $row_data .= '<td>'.$row[$item->id].'</td>';
            $total[$idx] = isset($total[$idx]) ? $total[$idx]+$row[$item->id] : $row[$item->id];
        }
        else {
            $total[$idx] = isset($total[$idx]) ? $total[$idx] : 0;
            $row_data .= '<td> - </td>';
        }
    }
    $row_data .= '</tr>';
}
if (!empty($total)) {
    $row_total = '<tr><td>TOTAL</td>';
    foreach ($total as $row) {
        $row_total .= '<td>'.$row.'</td>';
    }
    $row_total .= '</tr>';
}


?>

<section class="content">
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title"><a href="#search" data-widget="collapse" aria-controls="#search" aria-expanded="false"
                                     role="button">Advance Search</a></h3>
        </div>
        <?php $this->renderPartial('_search_report', array('model' => $model)) ?>
    </div>
    <!-- Default box -->
    <?php if($model->type == ReportType::TYPE_DETAIL_MONTHLY) {  ?>
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">
                <small>Laporan Transaksi Bulanan</small>
            </h3>
        </div>
        <div class="box-body table-responsive">
            <p><?php echo CHtml::link('Print',array('report/monthly','start'=>$model->start_date, 'end'=>$model->end_date), array('class'=>'btn btn-primary','target'=>'_new')) ?></p>
            
            <table class="table table-striped table-bordered table-hover dataTable">
                <thead>
                    <tr>
                        <th class="text-center">Tanggal</th>
                        <?php echo $itemList ?>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $row_data.$row_total ?>
                </tbody>
            </table>
        </div><!-- /.box-body -->
        <div class="box-footer">
        <?php echo CHtml::link('Print',array('report/monthly','start'=>$model->start_date, 'end'=>$model->end_date), array('class'=>'btn btn-primary', 'target'=>'_new')) ?>
        </div>
    </div><!-- /.box -->
    <?php } ?>
</section><!-- /.content -->