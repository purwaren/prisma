<?php


class UnitCustom extends Unit
{

    public function attributeLabels()
    {
        return array(
            'unit_no' => 'Nomor Unit',
            'owner' => 'Pemilik',
            'address_id' => 'Alamat',
            'wa_number' => 'Nomor WA',
            'trainer' => 'Pelatih',
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

    public static function model($className = __CLASS__)
    {
        return parent::model($className); // TODO: Change the autogenerated stub
    }

    public function search()
    {
        return parent::search(); // TODO: Change the autogenerated stub
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
}