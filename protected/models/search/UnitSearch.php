<?php
/**
 * Class UnitSearch
 */

class UnitSearch extends CFormModel
{
    public $unit_no;
    public $owner;
    public $state;
    public $city;
    public $district;

    public function rules()
    {
        return array(
            array('unit_no, owner, state, city, district', 'safe')
        );
    }

    public function search()
    {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria=new CDbCriteria;

        $criteria->join = 'LEFT JOIN address a ON a.id = address_id';
        $criteria->compare('unit_no',$this->unit_no);
        $criteria->compare('owner',$this->owner,true);
        $criteria->compare('a.state', $this->state);
        $criteria->compare('a.city', $this->city);
        $criteria->compare('a.district', $this->district);

        return new CActiveDataProvider(UnitCustom::model(), array(
            'criteria'=>$criteria,
        ));
    }
}