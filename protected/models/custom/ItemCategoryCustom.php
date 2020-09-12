<?php

class ItemCategoryCustom extends ItemCategory {

    public function rules() 
    {
        return parent::rules();
    }

    public function attributeLabels()
    {
        return array(
            'name' => 'Nama',
            'created_by' => 'Diinput Oleh',
            'created_at' => 'Waktu Input',
            'updated_by' => 'Diperbarui Oleh',
            'updated_at' => 'Terakhir Diperbarui'
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function getAllOptions() 
    {
        $criteria = new CDbCriteria();
        $criteria->order = 'name ASC';
        $models = self::model()->findAll($criteria);
        $options = array();
        if (!empty($models)) {
            foreach ($models as $row) {
                $options[$row->id] = $row->name;
            }
        }
        return $options;
    }
}