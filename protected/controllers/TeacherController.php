<?php

class TeacherController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','delete','index','view','download'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new TeacherForm();

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TeacherForm']))
		{
			$model->attributes=$_POST['TeacherForm'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TeacherCustom']))
		{
			$model->attributes=$_POST['TeacherCustom'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('TeacherCustom');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new TeacherCustom('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TeacherCustom']))
			$model->attributes=$_GET['TeacherCustom'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return TeacherCustom the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=TeacherCustom::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param TeacherCustom $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='teacher-custom-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionDownload() {
		$data = TeacherCustom::getAllTeacherForDownload();
		if (!empty($data)) {
            $obj = new PHPExcel();
			//set properties
			$obj->getProperties()->setCreator("Purwa Ren")
             ->setLastModifiedBy("Purwaren")
             ->setTitle("Data Guru ")
             ->setSubject("Data Guru")
             ->setDescription("Data Guru untuk cetak sertifikat")
             ->setKeywords("rekap, guru")
             ->setCategory("data");   
            
            $sheet = $obj->setActiveSheetIndex(0);
			$sheet->setCellValue('A1', 'PRISMA KALKULATOR TANGAN PUSAT');
            $sheet->setCellValue('A2', 'DATA UNIT BESERTA GURU UNTUK SERTIFIKAT');
            
			$sheet->setCellValue('A5', 'NO');
            $sheet->setCellValue('B5', 'NO UNIT');
            $sheet->setCellValue('C5', 'NO CABANG');
			$sheet->setCellValue('D5', 'PEMILIK');
			$sheet->setCellValue('E5', 'NAMA GURU');
            $sheet->setCellValue('F5', 'KELURAHAN');
            $sheet->setCellValue('G5', 'KECAMATAN');
            $sheet->setCellValue('H5', 'KAB / KOTA');
            $sheet->setCellValue('I5', 'PROVINSI');
            $sheet->setCellValue('J5', 'MASA BERLAKU');
            $sheet->setCellValue('K5', 'HINGGA');

            $i=0;$y=6;
            foreach($data as $row) {
				$sheet->setCellValue('A'.$y, ++$i);
                $sheet->setCellValue('B'.$y, $row->unit->unit_no);
                //$sheet->setCellValue('C'.$y, $row->unit_no);
				$sheet->setCellValue('D'.$y, ucwords($row->unit->owner));
				$sheet->setCellValue('E'.$y, ucwords($row->name));
                $sheet->setCellValue('F'.$y, $row->unit->address->address_2);
                $sheet->setCellValue('G'.$y, $row->unit->address->getDistrict());
                $sheet->setCellValue('H'.$y, $row->unit->address->getCity());
                $sheet->setCellValue('I'.$y, $row->unit->address->getState());
                $sheet->setCellValue('J'.$y, $row->unit->start_date);
                $sheet->setCellValue('K'.$y++, $row->unit->expired_at);
            }

            // Save a xls file
			$filename = 'Data-Guru-'.date('Y-m-d');
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
        }
	}
}
