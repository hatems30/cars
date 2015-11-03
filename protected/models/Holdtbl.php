<?php

/**
 * This is the model class for table "holdtbl".
 *
 * The followings are the available columns in table 'holdtbl':
 * @property integer $hold_id
 * @property string $hold_date
 * @property integer $branch_id
 * @property integer $employee_id
 * @property integer $customer_id
 * @property integer $car_id
 * @property string $sale_type
 * @property double $price
 * @property double $hold_amount
 * @property string $notes
 *
 * The followings are the available model relations:
 * @property Branchs $branch
 * @property Carstbl $car
 * @property Customers $customer
 * @property Employees $employee
 */
class Holdtbl extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'holdtbl';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hold_date, branch_id, employee_id, customer_id, car_id, sale_type, price, hold_amount', 'required'),
			array('branch_id, employee_id, customer_id, car_id', 'numerical', 'integerOnly'=>true),
			array('price, hold_amount', 'numerical'),
			array('sale_type', 'length', 'max'=>255),
			array('notes', 'safe'),
                        array('car_status', 'safe'),                    
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('hold_id, hold_date, branch_id, employee_id, customer_id, car_id, sale_type, price, hold_amount, notes', 'safe', 'on'=>'search'),
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
			'car' => array(self::BELONGS_TO, 'Carstbl', 'car_id'),
			'customer' => array(self::BELONGS_TO, 'Customers', 'customer_id'),
			'employee' => array(self::BELONGS_TO, 'Employees', 'employee_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'hold_id' => 'رقم',
			'hold_date' => 'تاريخ الحجز',
			'branch_id' => 'الفرع',
			'employee_id' => 'مندوب المبيعات',
			'customer_id' => 'العميل',
			'car_id' => 'الشاسيه',
			'sale_type' => 'نوع البيع',
			'price' => 'السعر',
			'hold_amount' => 'مقدم الحجز',
			'notes' => 'ملاحظات',
                        'car_status' => 'حالة السيارة',
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
	public function search($emp_id)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.
                $unsoled ='غير مباعة';
		$criteria=new CDbCriteria;

		$criteria->compare('hold_id',$this->hold_id);
		$criteria->compare('hold_date',$this->hold_date,true);
		$criteria->compare('branch_id',$this->branch_id);
		$criteria->compare('employee_id',$emp_id);
		$criteria->compare('customer_id',$this->customer_id);
		$criteria->compare('car_id',$this->car_id);
		$criteria->compare('sale_type',$this->sale_type,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('hold_amount',$this->hold_amount);                
		$criteria->compare('notes',$this->notes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Holdtbl the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
