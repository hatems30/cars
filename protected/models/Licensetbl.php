<?php

/**
 * This is the model class for table "licensetbl".
 *
 * The followings are the available columns in table 'licensetbl':
 * @property integer $License_id
 * @property integer $branch_id
 * @property integer $car_id
 * @property integer $employee_id
 * @property integer $traffic_id
 * @property integer $super_employee_id
 * @property string $notes
 *
 * The followings are the available model relations:
 * @property Branchs $branch
 * @property Carstbl $car
 * @property Employees $employee
 * @property Employees $superEmployee
 * @property Traffictbl $traffic
 */
class Licensetbl extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'licensetbl';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('branch_id, car_id, employee_id, traffic_id, super_employee_id', 'required'),
			array('branch_id, car_id, employee_id, traffic_id, super_employee_id', 'numerical', 'integerOnly'=>true),
			array('notes', 'length', 'max'=>255),                        
                        array('image','safe'),
                        array('license_date','safe'),
                        array('license_date','checkdate','on'=>'insert,update'),
                        array('image', 'length', 'max'=>255, 'on'=>'insert,update'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('License_id, branch_id, car_id, employee_id, traffic_id, super_employee_id, notes', 'safe', 'on'=>'search'),
		);
	}
        public function checkdate($attribute)                
        {        
            $tmp_papers = Paperstbl::model()->findByAttributes(array('car_id'=>$this->car_id),'paper_date'); 
            
            if ( $tmp_papers['paper_date']> $this->license_date )
            {
                $this->addError($attribute,'عفوا تاريخ الترخيص قبل تاريخ تبيلغ الاوراق');
            }
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
			'employee' => array(self::BELONGS_TO, 'Employees', 'employee_id'),
			'superEmployee' => array(self::BELONGS_TO, 'Employees', 'super_employee_id'),
			'traffic' => array(self::BELONGS_TO, 'Traffictbl', 'traffic_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'License_id' => 'رقم',
			'branch_id' => 'الفرع',
			'car_id' => 'الشاسيه',
                        'license_date' => 'تاريخ الترخيص',
			'employee_id' => 'مندوب الترخيص',
			'traffic_id' => 'المرور',
			'super_employee_id' => 'مشرف الترخيص',
			'notes' => 'ملاحظات',
                        'image'=>'كوتشنير',
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
	public function search($id)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('License_id',$this->License_id);
		$criteria->compare('branch_id',$id);
		$criteria->compare('car_id',$this->car_id);
		$criteria->compare('employee_id',$this->employee_id);
		$criteria->compare('traffic_id',$this->traffic_id);
		$criteria->compare('super_employee_id',$this->super_employee_id);
		$criteria->compare('notes',$this->notes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Licensetbl the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
