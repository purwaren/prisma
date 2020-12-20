<?php 
/**
 * @var $model DailyReportSearch
 * @var $this ReportController
 */
$this->pageTitle = 'REKAPITULASI ORDER UNIT <br />Periode: '.$model->start_date.' s.d. '.$model->end_date;

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

foreach($summary as $row) {
    $row_data .= '<tr><td>'.++$i.'</td><td>'.$units[$row['unit_id']].'</td>';
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
if (!empty($total)) {
    $row_total = '<tr><td colspan="2">TOTAL</td>';
    foreach ($total as $row) {
        $row_total .= '<td>'.$row.'</td>';
    }
    $row_total .= '<td>'.number_format($all_total).'</td></tr>';
}


Yii::app()->clientScript->registerCss('css-print',"
    table.data-tables {
        padding: 0px;
        width: 100%;
        margin: 0px auto;
    }
    table.data-tables thead tr th {
        border-top: 2px solid;
        border-left: 1px solid;
        border-right: 1px solid;
        border-bottom: 1px solid;
        padding: 5px;
    }
    table.data-tables tbody tr td {
        border: 1px solid;
        padding: 5px;
    }
")

?>

<table class="data-tables" cellspacing="0" cellpadding="0">
    <thead>
        <tr>
            <th>No</th>
            <th style="width: 150px;">Unit</th>
            <?php echo $itemList ?>
            <th>TOTAL</th>
        </tr>
    </thead>
    <tbody>
        <?php echo $row_data.$row_total ?>
    </tbody>
</table>