<?php

/**
 * This is the model class for table "complaintstbl".
 *
 * The followings are the available columns in table 'complaintstbl':
 * @property integer $complaint_id
 * @property string $complaint_date
 * @property integer $employee_id
 * @property string $customer_name
 * @property string $car_data
 * @property string $complaint_detail
 * @property string $notes
 *
 * The followings are the available model relations:
 * @property Employees $employee
 */
class Complaintstbl extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'complaintstbl';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('complaint_date, employee_id, customer_name, complaint_detail', 'required'),
			array('employee_id', 'numerical', 'integerOnly'=>true),
			array('customer_name, car_data, complaint_detail, notes', 'length', 'max'=>255),
                        array('branch_id , telephone , email , old_car','safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('complaint_id, complaint_date, employee_id, customer_name, car_data, complaint_detail, notes', 'safe', 'on'=>'search'),
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
			
                    'complaint_id' => 'م',			
                    'complaint_date' => 'تاريخ الشكوى',                        
                    'branch_id' => 'الفرع',			
                    'employee_id' => 'الموظف المسئول',			
                    'customer_name' => 'اسم العميل',
                    'telephone' => 'تليفون العميل',			
                    'email' => 'الايميل',
                    'old_car' => 'السيارة القديمة',
                    'car_data' => 'بيانات السيارة',			
                    'complaint_detail' => 'تفاصيل الشكوى',			
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

		$criteria->compare('complaint_id',$this->complaint_id);
		$criteria->compare('complaint_date',$this->complaint_date,true);
		$criteria->compare('employee_id',$this->employee_id);
		$criteria->compare('customer_name',$this->customer_name,true);
		$criteria->compare('car_data',$this->car_data,true);
		$criteria->compare('complaint_detail',$this->complaint_detail,true);
		$criteria->compare('notes',$this->notes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Complaintstbl the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
