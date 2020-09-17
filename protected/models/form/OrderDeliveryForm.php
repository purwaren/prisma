<?php

class OrderDeliveryForm extends CFormModel {
    public $delivery_date;
    public $delivery_provider;
    public $delivery_receipt_no;
    public $order_id;

    public function rules()
    {
        return array(
            array('delivery_date, delivery_provider, delivery_receipt_no','required')
        );
    }

    public function attributeLabels()
    {
        return array(
            'delivery_date' => 'Tanggal Kirim',
            'delivery_provider'=>'Armada Pengiriman',
            'delivery_receipt_no'=>'No. Resi'
        );
    }

    public function save() 
    {
        if ($this->validate()) {
            $model = OrderCustom::model()->findByPk($this->order_id);
            $model->delivery_date = $this->delivery_date;
            $model->delivery_provider = $this->delivery_provider;
            $model->delivery_receipt_no = $this->delivery_receipt_no;
            $model->status = OrderStatus::STATUS_DELIVER;
            return $model->update(array('delivery_date','delivery_provider','delivery_receipt_no','status'));
        }
    }
}