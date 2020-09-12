<?php

class OrderForm extends CFormModel {
    public $order_date;
    public $unit_id;
    public $item_id = array();
    public $qty = array();
    public $id;


    public function rules() {
        return array(
            array('unit_id, item_id, qty, order_date', 'required')
        );
    }

    public function attributeLabels() {
        return array(
            'unit_id' => 'Unit'
        );
    }

    public function save() {
        if ($this->validate()) {
            //create order
            $order = new OrderCustom();
            $order->order_number = OrderCustom::generateOrderNumber();
            $order->order_date = $this->order_date;
            $order->unit_id = $this->unit_id;
            $order->status = OrderCustom::STATUS_PENDING;
            $order->created_at = new CDbExpression('NOW()');
            $order->created_by = Yii::app()->user->getName();
            
            if ($order->save()) {
                $this->id = $order->id;
                //create order detail
                foreach ( $this->item_id as $idx => $item ) {
                    $detail = new OrderDetailCustom();
                    $detail->order_id = $order->id;
                    $detail->item_id = $item;
                    $detail->qty = $this->qty[$idx];
                    $detail->save();
                }
                return true;
            }
        }
    }
}