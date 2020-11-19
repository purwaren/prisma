<?php 
/**
 * @var $model DailyReportSearch
 * @var $this ReportController
 */
$this->pageTitle = 'REKAP TRANSAKSI UNIT <br />Periode: '.$model->start_date.' s.d. '.$model->end_date;

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
$i=0; $all_total=0;
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
            <th class="text-center">Tanggal</th>
            <th style="width: 150px;">Unit</th>
            <?php echo $itemList ?>
            <th>TOTAL</th>
        </tr>
    </thead>
    <tbody>
        <?php echo $row_data.$row_total ?>
    </tbody>
</table>