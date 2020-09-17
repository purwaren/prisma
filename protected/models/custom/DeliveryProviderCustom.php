<?php

class DeliveryProviderCustom extends RefDeliveryProvider {
    public function rules() 
    {
        return parent::rules();
    }

    public function attributeLabels()
    {
        return array(
            'name' => 'Nama Ekspedisi'
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function getAllOptions() {
        $criteria = new CDbCriteria();
        $criteria->order = 'name ASC';
        $models = self::model()->findAll($criteria);
        $options = array();
        if (!empty($models)) {
            foreach($models as $row) {
                $options[$row->id] = $row->name;
            }
        }
        return $options;
    }
}