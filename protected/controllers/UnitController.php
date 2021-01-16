<?php

class UnitController extends Controller
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

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
                'actions' => array('create', 'update', 'index', 'view', 'admin', 'delete','report','download'),
                'users' => array('@'),
            ),
            array('deny',  // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     * @throws CHttpException
     */
    public function actionView($id)
    {
        $teacher = new TeacherCustom();
        $teacher->unit_id = $id;
        $this->render('view', array(
            'model' => $this->loadModel($id),
            'teacher' => $teacher
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $model = new CreateUnitForm();

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['CreateUnitForm'])) {
            $model->attributes = $_POST['CreateUnitForm'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     * @throws CHttpException
     */
    public function actionUpdate($id)
    {
        $unit = $this->loadModel($id);
        $model = new CreateUnitForm();

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['CreateUnitForm'])) {
            $model->attributes = $_POST['CreateUnitForm'];
            $model->id = $id;
            if ($model->update())
                $this->redirect(array('view', 'id' => $model->id));
        }
        $model->attributes = $unit->attributes;
        $model->setAddress($unit->address);

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     * @throws CDbException
     */
    public function actionDelete($id)
    {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('UnitCustom');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model = new UnitSearch('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['UnitSearch']))
            $model->attributes = $_GET['UnitSearch'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return UnitCustom the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model = UnitCustom::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param UnitCustom $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'unit-custom-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionReport() {
        $model = new UnitReportSearch();

        if (isset($_POST['UnitReportSearch'])) {
            $model->attributes = $_POST['UnitReportSearch'];
        }

        $this->render('report', array(
            'model' => $model
        ));
    }

    /**
     * @var $model CActiveDataProvider
     */
    public function actionDownload() {
        $data = UnitCustom::getAllUnitForDownload();
        if (!empty($data)) {
            $obj = new PHPExcel();
			//set properties
			$obj->getProperties()->setCreator("Purwa Ren")
             ->setLastModifiedBy("Purwaren")
             ->setTitle("Data Unit ")
             ->setSubject("Data Unit")
             ->setDescription("Data Unit untuk cetak sertifikat")
             ->setKeywords("rekap, unit")
             ->setCategory("data");   
            
            $sheet = $obj->setActiveSheetIndex(0);
			$sheet->setCellValue('A1', 'PRISMA KALKULATOR TANGAN PUSAT');
            $sheet->setCellValue('A2', 'DATA UNIT UNTUK SERTIFIKAT');
            
            $sheet->setCellValue('A5', 'NO');
            $sheet->setCellValue('B5', 'NO UNIT');
            $sheet->setCellValue('C5', 'NO CABANG');
            $sheet->setCellValue('D5', 'PEMILIK');
            $sheet->setCellValue('E5', 'KELURAHAN');
            $sheet->setCellValue('F5', 'KECAMATAN');
            $sheet->setCellValue('G5', 'KAB / KOTA');
            $sheet->setCellValue('H5', 'PROVINSI');
            $sheet->setCellValue('I5', 'MASA BERLAKU');
            $sheet->setCellValue('J5', 'HINGGA');

            $i=0;$y=6;
            foreach($data as $row) {
                $sheet->setCellValue('A'.$y, ++$i);
                $sheet->setCellValue('B'.$y, $row->unit_no);
                //$sheet->setCellValue('C'.$y, $row->unit_no);
                $sheet->setCellValue('D'.$y, $row->owner);
                $sheet->setCellValue('E'.$y, $row->address->address_2);
                $sheet->setCellValue('F'.$y, $row->address->getDistrict());
                $sheet->setCellValue('G'.$y, $row->address->getCity());
                $sheet->setCellValue('H'.$y, $row->address->getState());
                $sheet->setCellValue('I'.$y, $row->start_date);
                $sheet->setCellValue('J'.$y++, $row->expired_at);
            }

            // Save a xls file
			$filename = 'Data-Unit-'.date('Y-m-d');
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
