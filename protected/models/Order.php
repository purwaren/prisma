<?php

/**
 * This is the model class for table "order".
 *
 * The followings are the available columns in table 'order':
 * @property string $id
 * @property string $order_number
 * @property string $unit_id
 * @property integer $status
 * @property string $delivery_date
 * @property string $delivery_provider
 * @property string $delivery_receipt_no
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 * @property string $order_date
 */
class Order extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'orders';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('order_number, unit_id, status, created_at, created_by, order_date', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('order_number', 'length', 'max'=>32),
			array('delivery_provider, delivery_receipt_no, created_by, updated_by', 'length', 'max'=>32),
			array('delivery_date, updated_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, order_number, unit_id, status, delivery_date, delivery_provider, delivery_receipt_no, created_at, created_by, updated_at, updated_by, order_date', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'order_number' => 'Order Number',
			'unit_id' => 'Unit',
			'status' => 'Status',
			'delivery_date' => 'Delivery Date',
			'delivery_provider' => 'Delivery Provider',
			'delivery_receipt_no' => 'Delivery Receipt No',
			'created_at' => 'Created At',
			'created_by' => 'Created By',
			'updated_at' => 'Updated At',
			'updated_by' => 'Updated By',
			'order_date' => 'Order Date',
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
		$criteria->compare('order_number',$this->order_number,true);
		$criteria->compare('unit_id',$this->unit_id,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('delivery_date',$this->delivery_date,true);
		$criteria->compare('delivery_provider',$this->delivery_provider,true);
		$criteria->compare('delivery_receipt_no',$this->delivery_receipt_no,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('updated_by',$this->updated_by,true);
		$criteria->compare('order_date',$this->order_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=> array(
				'defaultOrder' => 'created_at ASC'
			)
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Order the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
