<?php

/**
 * This is the model class for table "unit".
 *
 * The followings are the available columns in table 'unit':
 * @property string $id
 * @property string $unit_no
 * @property string $owner
 * @property string $address_id
 * @property string $wa_number
 * @property string $trainer
 * @property string $consultant
 * @property integer $status
 * @property string $start_date
 * @property string $expired_at
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_by
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property Address $address
 */
class Unit extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'unit';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('unit_no, owner, address_id, wa_number, status, start_date, expired_at, created_by, created_at', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('owner, trainer, consultant', 'length', 'max'=>128),
			array('wa_number', 'length', 'max'=>16),
			array('created_by, updated_by', 'length', 'max'=>32),
			array('updated_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, unit_no, owner, address_id, wa_number, trainer, consultant, status, start_date, expired_at, created_by, created_at, updated_by, updated_at', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'address' => array(self::BELONGS_TO, 'Address', 'address_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'unit_no' => 'Unit No',
			'owner' => 'Owner',
			'address_id' => 'Address',
			'wa_number' => 'Wa Number',
			'trainer' => 'Trainer',
			'consultant' => 'Consultant',
			'status' => 'Status',
			'start_date' => 'Start Date',
			'expired_at' => 'Expired At',
			'created_by' => 'Created By',
			'created_at' => 'Created At',
			'updated_by' => 'Updated By',
			'updated_at' => 'Updated At',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('unit_no',$this->unit_no,true);
		$criteria->compare('owner',$this->owner,true);
		$criteria->compare('address_id',$this->address_id,true);
		$criteria->compare('wa_number',$this->wa_number,true);
		$criteria->compare('trainer',$this->trainer,true);
		$criteria->compare('consultant',$this->consultant,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('expired_at',$this->expired_at,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_by',$this->updated_by,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Unit the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
