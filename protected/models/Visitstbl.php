<?php

/**
 * This is the model class for table "visitstbl".
 *
 * The followings are the available columns in table 'visitstbl':
 * @property integer $visit_id
 * @property string $visit_date
 * @property string $customer_name
 * @property string $car_data
 * @property integer $employee_id
 * @property string $emp_comment
 *
 * The followings are the available model relations:
 * @property Employees $employee
 */
class Visitstbl extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'visitstbl';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('visit_date, customer_name, car_data, employee_id', 'required'),
			array('employee_id', 'numerical', 'integerOnly'=>true),
			array('customer_name, car_data', 'length', 'max'=>255),
			array('emp_comment', 'safe'),
                        array('branch_id , telephone , email , old_car','safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('visit_id, visit_date, customer_name, car_data, employee_id, emp_comment', 'safe', 'on'=>'search'),
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
			'employee' => array(self::BELONGS_TO, 'Employees', 'employee_id'),
                        'branch' => array(self::BELONGS_TO, 'Branchs', 'branch_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'visit_id' => 'م',
			'visit_date' => 'تاريخ الزيارة',
                        'branch_id' => 'الفرع',
			'customer_name' => 'اسم العميل',
                        'telephone' => 'تليفون العميل',			
                        'email' => 'الايميل',
                        'old_car' => 'السيارة القديمة',
			'car_data' => 'بيانات السيارة',
			'employee_id' => 'الموظف المسئول',
			'emp_comment' => 'تعليق الموظف',
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

		$criteria->compare('visit_id',$this->visit_id);
		$criteria->compare('visit_date',$this->visit_date,true);
		$criteria->compare('customer_name',$this->customer_name,true);
		$criteria->compare('car_data',$this->car_data,true);
		$criteria->compare('employee_id',$this->employee_id);
		$criteria->compare('emp_comment',$this->emp_comment,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Visitstbl the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
