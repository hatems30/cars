<?php

/**
 * This is the model class for table "servicetbl".
 *
 * The followings are the available columns in table 'servicetbl':
 * @property integer $service_id
 * @property string $service_date
 * @property string $service_type
 * @property integer $customer_id
 * @property integer $car_id
 * @property string $notes
 */
class Servicetbl extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'servicetbl';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('service_date, service_type, customer_id, car_id', 'required'),
			array('customer_id, car_id', 'numerical', 'integerOnly'=>true),
			array('service_type', 'length', 'max'=>10),
			array('notes', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('service_id, service_date, service_type, customer_id, car_id, notes', 'safe', 'on'=>'search'),
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
                    
                    'customers' =>array(self::BELONGS_TO,'customers','customer_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'service_id' => 'Service',
			'service_date' => 'Service Date',
			'service_type' => 'Service Type',
			'customer_id' => 'Customer',
			'car_id' => 'Car',
			'notes' => 'Notes',
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

		$criteria->compare('service_id',$this->service_id);
		$criteria->compare('service_date',$this->service_date,true);
		$criteria->compare('service_type',$this->service_type,true);
		$criteria->compare('customer_id',$this->customer_id);
		$criteria->compare('car_id',$this->car_id);
		$criteria->compare('notes',$this->notes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Servicetbl the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}