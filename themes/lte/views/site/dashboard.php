<?php
/*
* @var $this Controller 
* @var $model UnitStatistic
*/
$this->pageTitle = 'Beranda';

Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/plugins/chartjs/Chart.js');
if (!empty($model->state)) {
  Yii::app()->clientScript->registerScript("varss","
    var state = ".$model->getAllCityName()."
    var unitData = ".$model->countByCity()."
  ");
} else {
  Yii::app()->clientScript->registerScript("varsss","
    var state = ".UnitStatistic::getAllStateName()."
    var unitData = ".UnitStatistic::countByState()."
  ");
}
Yii::app()->clientScript->registerScript("safdsdf","
    
    var areaChartData = {
      labels  : state,
      datasets: [
        {
          label               : 'Registered Unit',
          fillColor           : '#3c8dbc',
          strokeColor         : '#3c8dbc',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : unitData
        }
      ]
    }
    
    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)
");

?>

<!-- Main content -->
<section class="content">
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Persebaran Unit Tiap Provinsi</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <?php $this->renderPartial('_search_stats', array(
          'model'=>$model
        ))?>
        <div class="box-body">
            <div class="chart">
                <canvas id="barChart"></canvas>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
</section><!-- /.content -->