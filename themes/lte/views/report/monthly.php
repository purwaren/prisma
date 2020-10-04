<?php 
/**
 * @var $model DailyReportSearch
 * @var $this ReportController
 */
$this->pageTitle = 'Rekap Transaksi Harian, Periode: '.$model->start_date.' s.d. '.$model->end_date;

$items = ItemCustom::model()->findAllByAttributes(array(
    'cat_id' => 1
));

$itemList = '';
foreach ($items as $item) {
    $itemList .= '<th class="text-center">'.$item->name.'</th>';
}

$data = $model->searchMonthlySummary();
$row_data = '';
foreach ($data as $key=>$row) {
    $row_data .= '<tr><td style="width: 100px; text-align: center;">'.$key.'</td>';
    foreach($items as $item) {
        if (isset($row[$item->id])) {
            $row_data .= '<td>'.$row[$item->id].'</td>';
        }
        else {
            $row_data .= '<td> - </td>';
        }
    }
    $row_data .= '</tr>';
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
            <th class="text-center">Tanggal</th>
            <?php echo $itemList ?>
        </tr>
    </thead>
    <tbody>
        <?php echo $row_data ?>
    </tbody>
</table>