<?php

class SiteController extends Controller
{
    /**
     * Declares class-based actions.
     */
    public function actions()
    {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionDashboard()
    {
        $this->layout = '//layouts/column2';
        if (Yii::app()->user->isGuest)
            $this->redirect(array('login'));
        else $this->render('dashboard');
    }

    public function actionIndex()
    {
        $this->layout = '//layouts/landing';
        $this->render('index');
    }

    public function actionContact() {
        $this->layout = '//layouts/blog';
        $this->render('contact');
    }

    public function actionAbout() {
        $this->layout = '//layouts/blog';
        $this->render('about');
    }

    public function actionUnit($id='') {
        $this->layout = '//layouts/data';
        if (!empty($id)) {
            $model = UnitCustom::model()->findByPk($id);
            $teacher = new TeacherCustom('search');
            $teacher->unit_id = $id;
            $this->render('unit-detail', array(
                'model'=>$model,
                'teacher'=>$teacher
            ));
        } else {
            $model = new UnitSearch('search');
            $this->render('unit',array(
                'model'=>$model
            ));
        }
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError()
    {
        $this->layout = '//layouts/column2';
        if ($error = Yii::app()->errorHandler->error) {
//			var_dump($error);
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the login page
     */
    public function actionLogin()
    {
        $this->layout = '//layouts/login';
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    public function actionDistrict($city_id)
    {
        $model = DistrictCustom::model()->findAllByAttributes(array('city_id' => $city_id));
        $item = new Select2Options();
        $item->id = 0;
        $item->text = 'Pilih Kecamatan';
        $options[] = $item;
        if (!empty($model)) {
            foreach ($model as $row) {
                $item = new Select2Options();
                $item->id = $row->id;
                $item->text = $row->name;
                $options[] = $item;
            }
        }

        echo CJSON::encode($options);
    }

    public function actionCity($state_id)
    {
        $model = CityCustom::model()->findAllByAttributes(array('state_id' => $state_id));
        $item = new Select2Options();
        $item->id = 0;
        $item->text = 'Pilih Kab/Kota';
        $options[] = $item;
        if (!empty($model)) {
            foreach ($model as $row) {
                $item = new Select2Options();
                $item->id = $row->id;
                $item->text = $row->name;
                $options[] = $item;
            }
        }

        echo CJSON::encode($options);
    }
}