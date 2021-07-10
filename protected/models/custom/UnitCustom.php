<?php

/**
 * Class UnitCustom
 * * The followings are the available model relations:
 * @property AddressCustom $address
 */

class UnitCustom extends Unit
{

    public function attributeLabels()
    {
        return array(
            'unit_no' => 'Nomor Unit',
            'owner' => 'Pemilik',
            'address_id' => 'Alamat',
            'wa_number' => 'Nomor WA',
            'trainer' => 'Tasima',
            'consultant' => 'Konsultan',
            'status' => 'Status',
            'start_date' => 'Mulai Aktif',
            'expired_at' => 'Berakhir Lisensi'
        );
    }

    public function rules()
    {
        $parent = parent::rules();
        return array_merge($parent,
            array()
        );
    }

    /**
     * @param string $className
     * @return UnitCustom
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className); // TODO: Change the autogenerated stub
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id, true);
        $criteria->compare('unit_no', $this->unit_no, true);
        $criteria->compare('owner', $this->owner, true);
        $criteria->compare('address_id', $this->address_id, true);
        $criteria->compare('wa_number', $this->wa_number, true);
        $criteria->compare('trainer', $this->trainer, true);
        $criteria->compare('consultant', $this->consultant, true);
        $criteria->compare('status', $this->status);
        $criteria->compare('start_date', $this->start_date, true);
        $criteria->compare('expired_at', $this->expired_at, true);
        $criteria->compare('created_by', $this->created_by, true);
        $criteria->compare('created_at', $this->created_at, true);
        $criteria->compare('updated_by', $this->updated_by, true);
        $criteria->compare('updated_at', $this->updated_at, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'sort'=>array(
                'defaultOrder'=>'unit_no'
            )
        ));
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'address' => array(self::BELONGS_TO, 'AddressCustom', 'address_id'),
        );
    }

    public function getStatus()
    {
        return UnitStatus::getStatus($this->status);
    }

    /**
     * @return array
     */
    public static function getAllOptions() {
        $criteria = new CDbCriteria();
        $criteria->order = 'unit_no ASC';
        $models = self::model()->findAll($criteria);
        $options = array();
        if (!empty($models)) {
            foreach ($models as $row) {
                $options[$row->id] = $row->unit_no.' ('.$row->address->getCity().'/'.$row->address->getDistrict().') - '.$row->owner;
            }
        }
        return $options;
    }

    public static function getAllUnits() {
        $criteria = new CDbCriteria();
        $criteria->order = 'unit_no ASC';
        $models = self::model()->findAll($criteria);
        $options = array();
        if (!empty($models)){
            foreach ($models as $row) {
                $options[$row->id] = $row->unit_no.' - '.$row->owner;
            }
        }
        return $options;
    }

    public static function getAllUnitForDownload() {
        $criteria = new CDbCriteria();
        $criteria->order = 'unit_no ASC';
        $criteria->select = "unit_no, owner, address_id, TO_CHAR(start_date, 'DD-MON-YYYY') as start_date, TO_CHAR(expired_at, 'DD-MON-YYYY') as expired_at";
        return self::model()->findAll($criteria);
    }
}