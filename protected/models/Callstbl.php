<?php

/**
 * This is the model class for table "callstbl".
 *
 * The followings are the available columns in table 'callstbl':
 * @property integer $call_id
 * @property string $call_date
 * @property string $call_time
 * @property string $car_data
 * @property integer $call_employee_id
 * @property string $customer
 * @property string $mobile
 * @property integer $service_employee_id
 * @property string $area
 * @property string $how
 */
class Callstbl extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'callstbl';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('call_date, call_time, car_data, call_employee_id, customer, mobile, service_employee_id, area, how', 'required'),
			array('call_employee_id, service_employee_id', 'numerical', 'integerOnly'=>true),
			array('car_data, customer, mobile, area, how', 'length', 'max'=>255),
                        array('notes','safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('call_id, call_date, call_time, car_data, call_employee_id, customer, mobile, service_employee_id, area, how', 'safe', 'on'=>'search'),
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
                    'callsman' => array(self::BELONGS_TO, 'Employees', 'call_employee_id'),
                    'serviceman' => array(self::BELONGS_TO, 'Employees', 'service_employee_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'call_id' => 'م',
			'call_date' => 'التاريخ',
			'call_time' => 'الوقت',
			'car_data' => 'بيانات السيارة',
			'call_employee_id' => 'موظف الاتصال',
			'customer' => 'العميل',
			'mobile' => 'الموبايل',
			'service_employee_id' => 'الموظف المسئول',
			'area' => 'المنطقة',
			'how' => 'الطريقة',
                        'notes'=>'الاجراءات',
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

		$criteria->compare('call_id',$this->call_id);
		$criteria->compare('call_date',$this->call_date,true);
		$criteria->compare('call_time',$this->call_time,true);
		$criteria->compare('car_data',$this->car_data,true);
		$criteria->compare('call_employee_id',$this->call_employee_id);
		$criteria->compare('customer',$this->customer,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('service_employee_id',$this->service_employee_id);
		$criteria->compare('area',$this->area,true);
		$criteria->compare('how',$this->how,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Callstbl the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
