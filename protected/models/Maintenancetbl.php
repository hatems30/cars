<?php

/**
 * This is the model class for table "maintenancetbl".
 *
 * The followings are the available columns in table 'maintenancetbl':
 * @property integer $m_hold_id
 * @property string $m_hold_date
 * @property string $customer_name
 * @property string $car_data
 * @property string $m_type
 * @property integer $m_center_id
 * @property string $m_date
 * @property string $m_area
 * @property string $notes
 */
class Maintenancetbl extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'maintenancetbl';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('m_hold_date, customer_name, car_data, m_type, m_center_id, m_date, m_area', 'required'),
			array('m_center_id', 'numerical', 'integerOnly'=>true),
			array('customer_name, car_data, m_type, m_area, notes', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('m_hold_id, m_hold_date, customer_name, car_data, m_type, m_center_id, m_date, m_area, notes', 'safe', 'on'=>'search'),
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
			'm_hold_id' => 'رقم',
			'm_hold_date' => 'تاريخ الحجز',
			'customer_name' => 'لعميل',
			'car_data' => 'بيانات السيارات',
			'm_type' => 'نوع الصيانة',
			'm_center_id' => 'مركز الصيانة',
			'm_date' => 'تاريخ الصيانة',
			'm_area' => 'منفذ حجز الصيانة',
			'notes' => 'ملاحظات',
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

		$criteria->compare('m_hold_id',$this->m_hold_id);
		$criteria->compare('m_hold_date',$this->m_hold_date,true);
		$criteria->compare('customer_name',$this->customer_name,true);
		$criteria->compare('car_data',$this->car_data,true);
		$criteria->compare('m_type',$this->m_type,true);
		$criteria->compare('m_center_id',$this->m_center_id);
		$criteria->compare('m_date',$this->m_date,true);
		$criteria->compare('m_area',$this->m_area,true);
		$criteria->compare('notes',$this->notes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Maintenancetbl the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
