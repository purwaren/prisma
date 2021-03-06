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
            'unit_id' => 'Unit',
            'created_at' => 'Waktu Entri',
            'created_by' => 'Dibuat Oleh',
            'order_date' => 'Tanggal',
            'delivery_date' => 'Tanggal Kirim',
            'delivery_provider'=>'Armada Pengiriman',
            'delivery_receipt_no'=>'No. Resi'
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className); // TODO: Change the autogenerated stub
    }

    public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
            'unit'=> array(self::BELONGS_TO, 'UnitCustom', 'unit_id'),
            'provider'=> array(self::BELONGS_TO, 'DeliveryProviderCustom', 'delivery_provider')
		);
	}

    public function search()
    {
        // @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

        $criteria->select = "t.id, t.order_number, t.unit_id, t.status, t.delivery_date, to_char(t.order_date,'DD-MON-YYYY') AS order_date";
		$criteria->compare('id',$this->id);
		$criteria->compare('order_number',$this->order_number,true);
		$criteria->compare('unit_id',$this->unit_id);
		$criteria->compare('status',$this->status);
		$criteria->compare('delivery_date',$this->delivery_date,true);
		$criteria->compare('delivery_provider',$this->delivery_provider,true);
		$criteria->compare('order_date',$this->order_date,true);

		return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
            'sort'=>array(
                'defaultOrder'=>'order_date DESC'
            )
		));
    }

    public static function generateOrderNumber()
    {
        $d = 'ORDER/'.date('M-Y/d-His');
        return strtoupper($d);
    }

    public function getTotalBill() 
    {
        $order_detail = new OrderDetailCustom('search');
        $order_detail->order_id = $this->id;
        return $order_detail->getTotal();
    }
}