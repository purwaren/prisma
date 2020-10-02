<?php

class OrderController extends Controller
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
				'actions'=>array('create','update','index','view','admin','delete','process','delivery','cancel','finish','report'),
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
		$model=new OrderForm;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['OrderForm']))
		{
			$model->attributes=$_POST['OrderForm'];
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

		if(isset($_POST['OrderCustom']))
		{
			$model->attributes=$_POST['OrderCustom'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	public function actionDelivery($id)
	{
		$order=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$model = new OrderDeliveryForm();

		if(isset($_POST['OrderDeliveryForm']))
		{
			$model->attributes=$_POST['OrderDeliveryForm'];
			$model->order_id = $order->id;
			if($model->save())
				$this->redirect(array('view','id'=>$model->order_id));
		}

		$this->render('delivery',array(
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
		$dataProvider=new CActiveDataProvider('OrderCustom');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new OrderCustom('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['OrderCustom']))
			$model->attributes=$_GET['OrderCustom'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return OrderCustom the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=OrderCustom::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param OrderCustom $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='order-custom-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionProcess($id) 
	{
		if (Yii::app()->request->isPostRequest && Yii::app()->request->isAjaxRequest) {
			$order = $this->loadModel($id);
			$order->status = OrderStatus::STATUS_PROCESS;
			echo $order->update(array('status'));
		}
	}
	public function actionFinish($id) 
	{
		if (Yii::app()->request->isPostRequest && Yii::app()->request->isAjaxRequest) {
			$order = $this->loadModel($id);
			$order->status = OrderStatus::STATUS_FINISH;
			echo $order->update(array('status'));
		}
	}
	public function actionCancel($id) 
	{
		if (Yii::app()->request->isPostRequest && Yii::app()->request->isAjaxRequest) {
			$order = $this->loadModel($id);
			$order->status = OrderStatus::STATUS_CANCELED;
			echo $order->update(array('status'));
		}
	}

	public function actionReport()
	{
		$model = new DailyReportSearch();

		if (isset($_POST['DailyReportSearch'])) {
			$model->attributes = $_POST['DailyReportSearch'];
		}

		$this->render('report', array(
			'model' => $model
		));
	}
}
