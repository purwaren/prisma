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

	public function actionDetail($start, $end, $type='') {
		$this->layout =  '//layouts/print';
		
		$model = new DailyReportSearch();
		$model->start_date = $start;
		$model->end_date = $end;
		if($type == 'xls') {
			$obj = new PHPExcel();
			//set properties
			$obj->getProperties()->setCreator("Purwa Ren")
             ->setLastModifiedBy("Purwaren")
             ->setTitle("Rekap Unit Detail")
             ->setSubject("Rekap Unit Detail")
             ->setDescription("Rekap transaksi detail per unit dalam satu bulan")
             ->setKeywords("rekap, unit")
			 ->setCategory("Report");   
			
			$sheet = $obj->setActiveSheetIndex(0);
			$sheet->setCellValue('A1', 'PRISMA KALKULATOR TANGAN PUSAT');
			$sheet->setCellValue('A2', 'LAPORAN REKAP TRANSAKSI UNIT');
			$sheet->setCellValue('A3', 'TANGGAL AWAL');
			$sheet->setCellValue('B3', $start);
			$sheet->setCellValue('A4', 'TANGGAL AKHIR');
			$sheet->setCellValue('B4', $end);

			//proceed the report
			$items = ItemCustom::model()->findAllByAttributes(array(
				'cat_id' => 1
			));
			$units = UnitCustom::getAllUnits();
			$data = $model->searchMonthlySummary();
			$column = $this->generateColumn();

			//set header data
			$sheet->setCellValue('A6', 'NO');
			$sheet->setCellValue('B6', 'TANGGAL');
			$sheet->setCellValue('C6', 'UNIT');
			$r = 3; $s = 6;
			foreach ($items as $row) {
				$sheet->setCellValue($column[$r++].$s, $row->name);
			}

			$y = 7;
			$x = 0; 
			$i = 0;
			foreach($data as $date => $unit_data) {
				foreach($unit_data as $unit_id => $row) {
					$sheet->setCellValue($column[$x].$y, ++$i);
					$sheet->setCellValue($column[++$x].$y, $date);
					$sheet->setCellValue($column[++$x].$y, $units[$unit_id]);
					foreach($items as $idx => $item) {
						if (isset($row[$item->id])) {
							$sheet->setCellValue($column[++$x].$y, $row[$item->id]);
						}
						else {
							$sheet->setCellValue($column[++$x].$y, 0);
						}
					}
					$x=0; $y++;
				}
			}

			// Save a xls file
			$filename = 'Laporan-Detail-'.$start.'-'.$end;
			header('Content-Type: application/vnd.ms-excel');
			header('Content-Disposition: attachment;filename="'.$filename.'.xls"');
			header('Cache-Control: max-age=0');
			 
			$objWriter = PHPExcel_IOFactory::createWriter($obj, 'Excel5');
	 
			$objWriter->save('php://output');
			unset($this->objWriter);
			unset($this->objWorksheet);
			unset($this->objReader);
			unset($this->obj);
			exit();

		} else {
			$this->render('detail', array(
				'model'=>$model
			));
		}
		
	}

	private function generateColumn() {
		return $column = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
	}
	
}