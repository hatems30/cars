<?php

/**
 * This is the model class for table "employees".
 *
 * The followings are the available columns in table 'employees':
 * @property integer $employee_id
 * @property string $employee_name
 * @property string $employee_type
 * @property integer $branch_id
 * @property integer $manager_id
 *
 * The followings are the available model relations:
 * @property Employees $manager
 * @property Employees[] $employees
 * @property Branchs $branch
 * @property Salestbl[] $salestbls
 */
class Employees extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'employees';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employee_name, employee_type, branch_id', 'required'),
			array('branch_id, manager_id', 'numerical', 'integerOnly'=>true),
			array('employee_name', 'length', 'max'=>255),
			array('employee_type', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('employee_id, employee_name, employee_type, branch_id, manager_id', 'safe', 'on'=>'search'),
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
			'manager' => array(self::BELONGS_TO, 'Employees', 'manager_id'),
			'employees' => array(self::HAS_MANY, 'Employees', 'manager_id'),
			'branch' => array(self::BELONGS_TO, 'Branchs', 'branch_id'),
			'salestbls' => array(self::HAS_MANY, 'Salestbl', 'sales_man_id'),
                        'callsman' => array(self::HAS_MANY, 'Callstbl', 'call_employee_id'),
                        'serviceman' => array(self::HAS_MANY, 'Callstbl', 'service_employee_id'),
                        'user'=>array(self::HAS_MANY,'user','employee_id'), 
                        
                    
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'employee_id' => 'رقم',
			'employee_name' => 'اسم الموظف',
			'employee_type' => 'طبيعة العمل',
			'branch_id' => 'الفرع',
			'manager_id' => 'المدير المباشر',
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

		$criteria->compare('employee_id',$this->employee_id);
		$criteria->compare('employee_name',$this->employee_name,true);
		$criteria->compare('employee_type',$this->employee_type,true);
		$criteria->compare('branch_id',$this->branch_id);
		$criteria->compare('manager_id',$this->manager_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Employees the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
