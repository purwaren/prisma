<?php
/**
 * Class CreateUnitForm
 */

class CreateUnitForm extends CFormModel
{
    //unit
    public $id;
    public $address_id;
    public $unit_no;
    public $owner;
    public $wa_number;
    public $trainer;
    public $consultant;
    public $status;
    public $start_date;
    public $expired_at;

    //address
    public $address_1;
    public $address_2;
    public $district;
    public $city;
    public $state;
    public $country='INDONESIA';

    public function attributeLabels()
    {
        return array(
            'unit_no' => 'Nomor Unit',
            'owner' => 'Pemilik',
            'address_id' => 'Alamat',
            'wa_number' => 'Nomor Whatsapp',
            'trainer' => 'Pelatih',
            'consultant' => 'Konsultan',
            'status'=> 'Status',
            'start_date' => 'Mulai Aktif',
            'expired_at' => 'Berakhir Lisensi',
            'address_1' => 'Perumahan / Jalan',
            'address_2' => 'Desa / Kelurahan',
            'district' => 'Kecamatan',
            'city' => 'Kabupaten / Kota',
            'state' => 'Provinsi'
        );
    }

    public function rules()
    {
        return array(
            array('unit_no, owner, wa_number, status, start_date, expired_at, address_1, district, city, state', 'required'),
            array('unit_no, owner, wa_number, trainer, consultant, status, start_date, expired_at, address_1, address_2, district, city, state', 'safe')
        );
    }

    public function save() {
        if ($this->validate()) {
            $addr = new AddressCustom();
            $addr->address_1 = $this->address_1;
            $addr->address_2 = $this->address_2;
            $addr->district = $this->district;
            $addr->city = $this->city;
            $addr->state = $this->state;
            $addr->country = $this->country;

            if ($addr->save()) {
                $this->address_id = $addr->id;
                $unit = new UnitCustom();
                $unit->attributes = $this->attributes;
                $unit->created_by = Yii::app()->user->getName();
                $unit->created_at = new CDbExpression('NOW()');
                if ($unit->save()) {
                    $this->id = $unit->id;
                    return true;
                }
                else {
                    var_dump($unit->getErrors());
                    $this->addErrors($unit->getErrors());
                }
            }
            else $this->addErrors($addr->getErrors());
        }
    }
}