<?php
/**
 * Class AddressCustom
 */

class AddressCustom extends Address
{
    public function rules()
    {
        return parent::rules(); // TODO: Change the autogenerated stub
    }

    public function attributeLabels()
    {
        return array(
            'address_1' => 'Alamat',
            'address_2' => 'Kelurahan',
            'state' => 'Provinsi',
            'city' => 'Kab/Kota',
            'district' => 'Kecamatan'
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className); // TODO: Change the autogenerated stub
    }

    public function getState()
    {
        $model = StateCustom::model()->findByPk($this->state);
        return $model->name;
    }

    public function getCity()
    {
        $model = CityCustom::model()->findByPk($this->city);
        return $model->name;
    }

    public function getDistrict()
    {
        $model = DistrictCustom::model()->findByPk($this->district);
        return $model->name;
    }
}