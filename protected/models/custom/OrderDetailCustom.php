<?php


class OrderDetailCustom extends OrderDetail
{
    public function rules()
    {
        return parent::rules(); // TODO: Change the autogenerated stub
    }

    public function attributeLabels()
    {
        return parent::attributeLabels(); // TODO: Change the autogenerated stub
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className); // TODO: Change the autogenerated stub
    }

    public function relations()
    {
        return array(
            'item'=>array(self::BELONGS_TO, 'ItemCustom', 'item_id')
        );
    }

    public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('order_id',$this->order_id);
		$criteria->compare('item_id',$this->item_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
    }
    
    public function getTotalQty() 
    {
        $criteria = new CDbCriteria;
        $criteria->select = 'SUM(qty) AS qty';
        $criteria->compare('order_id',$this->order_id);

        $model = self::model()->find($criteria);
        if (!empty($model)) {
            return number_format($model->qty);
        } else return 0;
    }

    public function getTotal() 
    {
        $criteria = new CDbCriteria;
        $criteria->select = 'SUM(i.price * t.qty) AS qty';
        $criteria->join = 'LEFT JOIN item i ON t.item_id = i.id';
        $criteria->compare('order_id',$this->order_id);

        $model = self::model()->find($criteria);
        if (!empty($model)) {
            return number_format($model->qty);
        } else return 0;
    }
}