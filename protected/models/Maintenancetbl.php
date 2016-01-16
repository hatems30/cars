<?php

/**
 * This is the model class for table "maintenancetbl".
 *
 * The followings are the available columns in table 'maintenancetbl':
 * @property integer $m_hold_id
 * @property string $m_hold_date
 * @property integer $branch_id
 * @property integer $customer_id
 * @property string $car_data
 * @property string $m_type
 * @property integer $m_center_id
 * @property string $m_date
 * @property integer $employee_id
 * @property string $notes
 *
 * The followings are the available model relations:
 * @property Branchs $branch
 * @property Mcenterstbl $mCenter
 * @property Employees $employee
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
			array('m_hold_date, branch_id, customer_id, car_data, m_type, m_center_id, m_date, employee_id', 'required'),
			array('branch_id, customer_id, m_center_id, employee_id', 'numerical', 'integerOnly'=>true),
			array('car_data, m_type, notes', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('m_hold_id, m_hold_date, branch_id, customer_id, car_data, m_type, m_center_id, m_date, employee_id, notes', 'safe', 'on'=>'search'),
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
			'branch' => array(self::BELONGS_TO, 'Branchs', 'branch_id'),
			'mCenter' => array(self::BELONGS_TO, 'Mcenterstbl', 'm_center_id'),
			'employee' => array(self::BELONGS_TO, 'Employees', 'employee_id'),
                        'customer' => array(self::BELONGS_TO, 'Customers', 'customer_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'm_hold_id' => 'م',
			'm_hold_date' => 'التاريخ',
			'branch_id' => 'الفرع',
			'customer_id' => 'العميل',
			'car_data' => 'بيانات السيارة',
			'm_type' => 'نوع الصيانة',
			'm_center_id' => 'مركز الصيانة',
			'm_date' => 'تاريخ الصيانة',
			'employee_id' => 'منفذ حجز الصيانة',
			'notes' => 'ملاحظات',
		);
	}
        
	public function search($id)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('m_hold_id',$this->m_hold_id);
		$criteria->compare('m_hold_date',$this->m_hold_date,true);
		$criteria->compare('branch_id',$id);
		$criteria->compare('customer_id',$this->customer_id);
		$criteria->compare('car_data',$this->car_data,true);
		$criteria->compare('m_type',$this->m_type,true);
		$criteria->compare('m_center_id',$this->m_center_id);
		$criteria->compare('m_date',$this->m_date,true);
		$criteria->compare('employee_id',$this->employee_id);
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
