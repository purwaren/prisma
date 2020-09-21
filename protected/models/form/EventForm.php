<?php
/**
 * Created by PhpStorm.
 * User: purwaren
 * Date: 9/22/17
 * Time: 8:54 PM
 */

class EventForm extends CFormModel
{
    public $title;
    public $description;
    public $start_time;
    public $end_time;
    public $banner_url;
    public $id;
    public $isNewRecord = true;

    public function rules()
    {
        return array(
            array('title, start_time, description', 'required'),
            array('title, description, start_time, end_time, banner_url','safe')
        );
    }

    public function attributeLabels()
    {
        return array(
            'title' => 'Judul Event',
            'description' => 'Keterangan',
            'start_time' => 'Waktu Mulai',
            'end_time' => 'Waktu Berakhir',
            'banner_url' => 'Banner'
        );
    }

    public function save() 
    {
        if ($this->validate()) {
            $model = new EventCustom();
            $model->attributes = $this->attributes;
            if (empty($model->end_time))
                $model->end_time = null;
                
            $model->created_at = new CDbExpression('NOW()');
            $model->created_by = Yii::app()->user->getName();
            if ($model->save()) {
                $this->id = $model->id;
                return true;
            } else {
                $this->addErrors($model->getErrors());
            }
        }
    }
}