<?php
/**
 * @var $this OrderController
 * @var $model ReportDailySearch
 */
$this->pageTitle = 'Akumulasi Transaksi Unit';

$criteria = new CDbCriteria();
$criteria->compare('cat_id', 1);
$criteria->order = 'id ASC';
$items = ItemCustom::model()->findAll($criteria);

$units = UnitCustom::getAllUnits();


$itemList = '';
foreach ($items as $item) {
    $itemList .= '<th class="text-center">'.$item->name.'</th>';
}
$summary = $model->searchUnitsSummary();
$detail = $model->searchMonthlySummary();
$row_data = '';
$total = array();
$i=0;
$all_total = 0;
$row_total = '';
if (!empty($summary)) {
    foreach($summary as $row) {
        $url = CHtml::link($units[$row['unit_id']], Yii::app()->createUrl('unit/view', array('id'=>$row['unit_id'])), array('target'=>'_new'));
        $row_data .= '<tr><td>'.++$i.'</td><td>'.$url.'</td>';
        foreach($items as $item) {
            if (isset($detail[$row['unit_id']][$item->id])) {
                $row_data .= '<td>'.$detail[$row['unit_id']][$item->id].'</td>';
                $total[$item->id] = isset($total[$item->id]) ? $total[$item->id]+$detail[$row['unit_id']][$item->id] : 0;
            } else {
                $row_data .= '<td> - </td>';
            }
            
        }
        $row_data .= '<td>'.$row['qty'].'</td></tr>';
        $all_total += $row['qty'];
    }    
}
if (!empty($total)) {
    $row_total = '<tr><td colspan="2">TOTAL</td>';
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
    <?php if (!empty($summary)) { ?>
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">
                <small>Laporan Transaksi Bulanan</small>
            </h3>
        </div>
        <div class="box-body table-responsive">
            <p>
                <?php echo CHtml::link('Print',array('report/unit','start'=>$model->start_date, 'end'=>$model->end_date), array('class'=>'btn btn-primary','target'=>'_new')) ?>
                <?php echo CHtml::link('Download Excel',array('report/unit','start'=>$model->start_date, 'end'=>$model->end_date, 'type'=>'xls'), array('class'=>'btn btn-success','target'=>'_new')) ?>
            </p>
            
            <table class="table table-striped table-bordered table-hover dataTable">
                <thead>
                    <tr>
                        <th>No</th>
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
            <?php echo CHtml::link('Print',array('report/unit','start'=>$model->start_date, 'end'=>$model->end_date), array('class'=>'btn btn-primary', 'target'=>'_new')) ?>
            <?php echo CHtml::link('Download Excel',array('report/unit','start'=>$model->start_date, 'end'=>$model->end_date, 'type'=>'xls'), array('class'=>'btn btn-success','target'=>'_new')) ?>
        </div>
    </div><!-- /.box -->
    <?php } ?>
</section><!-- /.content -->