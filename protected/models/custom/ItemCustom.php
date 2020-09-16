<?php


class ItemCustom extends Item
{
    public function rules()
    {
        return parent::rules(); // TODO: Change the autogenerated stub
    }

    public function attributeLabels()
    {
        return array(
            'name' => 'Nama',
            'code' => 'Kode',
            'stock' => 'Stok',
            'price' => 'Harga',
            'cat_id' => 'Kategori'
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className); // TODO: Change the autogenerated stub
    }

    public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('stock',$this->stock,true);
		$criteria->compare('acq_price',$this->acq_price,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_by',$this->updated_by,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('cat_id',$this->cat_id,true);

		return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
            'sort'=> array(
                'defaultOrder' => 'name'
            )
		));
    }
    
    public function searchAutocomplete() 
    {
        $criteria=new CDbCriteria;

		$criteria->compare('code',$this->code,true, 'OR');
        $criteria->compare('name',$this->name,true, 'OR');
        
        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
            'sort'=> array(
                'defaultOrder' => 'name'
            )
		));
    }

    public function saveCustom() {
        $this->created_at = new CDbExpression('NOW()');
        $this->created_by = Yii::app()->user->getName();
        return $this->save();
    }

    public static function getAllOptions() {
        $criteria = new CDbCriteria();
        $criteria->order = 'name ASC';
        $models = self::model()->getAllOptions;
        $options = array();
        if (!empty($models)) {
            foreach ($models as $row) {
                $options[$row->id] = $row->name;
            }
        }
        return $options;
    }
}