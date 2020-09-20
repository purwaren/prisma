<?php

class EventCustom extends event {

    public function attributeLabels()
    {
        return array(
            'title' => 'Judul Event',
            'start_time' => 'Waktu Mulai',
            'end_time' => 'Waktu Berakhir',
            'banner_url' => 'Banner',
            'description' => 'Keterangan'
        );
    }

    public function rules()
    {
        return parent::rules();
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className); // TODO: Change the autogenerated stub
    }

    public function search() 
    {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria=new CDbCriteria;
        
        $criteria->select = "id, title, description, to_char(start_time, 'DD-MON-YYYY') as start_time, end_time, created_at, created_by";

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('start_time',$this->start_time,true);
		$criteria->compare('end_time',$this->end_time,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('created_by',$this->created_by,true);
		

		return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
            'sort'=>array(
                'defaultOrder'=>'start_time DESC'
            ),
            'pagination'=>array(
                'pageSize'=>5
            ),
		));
    }
}