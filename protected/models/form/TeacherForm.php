<?php


class TeacherForm extends CFormModel
{
    public $id;
    public $unit_id;
    public $name;
    public $phone;

    public function attributeLabels()
    {
        return array(
            'unit_id' => 'Unit Kerja',
            'name' => 'Nama',
            'phone' => 'No. HP'
        );
    }

    public function rules()
    {
        return array(
            array('unit_id, name', 'required'),
            array('unit_id, name, phone', 'safe')
        );
    }

    public function save()
    {
        if ($this->validate()) {
            $teacher = new TeacherCustom();
            $teacher->attributes = $this->attributes;
            $teacher->created_at = new CDbExpression('NOW()');
            $teacher->created_by = Yii::app()->user->getName();
            if ($teacher->save()) {
                $this->id = $teacher->id;
                return true;
            }
        }
    }
}