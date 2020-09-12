<?php


class OrderCustom extends Order
{
    const STATUS_PENDING = 0;
    const STATUS_PROCESS = 1;
    const STATUS_DELIVERY = 2;
    const STATUS_COMPLETE= 3;

    public function rules()
    {
        return parent::rules(); // TODO: Change the autogenerated stub
    }

    public function attributeLabels()
    {
        return array(
            'unit_id' => 'Unit'
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className); // TODO: Change the autogenerated stub
    }

    public function search()
    {
        return parent::search(); // TODO: Change the autogenerated stub
    }

    public static function generateOrderNumber()
    {
        $d = 'ORDER/'.date('M-Y/d-His');
        return strtoupper($d);
    }
}