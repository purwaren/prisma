<?php


class TeacherCustom extends Teacher
{
    public function rules()
    {
        return parent::rules(); // TODO: Change the autogenerated stub
    }

    public function attributeLabels()
    {
        return array(
            'unit_id' => 'Unit',
            'name' => 'Nama Guru',
            'phone' => 'No. Telp.'
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className); // TODO: Change the autogenerated stub
    }

    public function relations()
    {
        return array(
            'unit'=>array(self::BELONGS_TO, 'UnitCustom', 'unit_id')
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search()
    {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria=new CDbCriteria;
        $criteria->join = 'LEFT JOIN unit u ON t.unit_id = u.id';
        $criteria->compare('id',$this->id);
        $criteria->compare('unit_id',$this->unit_id);
        $criteria->compare('name',$this->name,true);
        $criteria->compare('phone',$this->phone,true);
        

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
            'sort'=> array(
                'defaultOrder' => 'u.unit_no ASC'
            )
        ));
    }

    public static function getAllTeacherForDownload() {
        $criteria = new CDbCriteria();
        $criteria->order = 'name ASC';
        $criteria->select = 'name, phone, unit_id';
        return self::model()->findAll($criteria);
    }
}