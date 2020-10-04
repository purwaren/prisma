<?php

class ReportController extends Controller
{

	public function actionMonthly($start, $end)
	{
		$this->layout =  '//layouts/print';
		
		$model = new DailyReportSearch();
		$model->type = ReportType::TYPE_SUMMARY_MONTHLY;
		$model->start_date = $start;
		$model->end_date = $end;
		$this->render('monthly', array(
			'model' => $model
		));
	}

}