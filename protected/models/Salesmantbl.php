<?php

/**
 * This is the model class for table "salesmantbl".
 *
 * The followings are the available columns in table 'salesmantbl':
 * @property integer $sales_man_id
 * @property string $sales_man_name
 * @property integer $branch_id
 * @property integer $manager_id
 */
class Salesmantbl extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'salesmantbl';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('branch_id, manager_id', 'numerical', 'integerOnly'=>true),
			array('sales_man_name', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('sales_man_id, sales_man_name, branch_id, manager_id', 'safe', 'on'=>'search'),
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
                    
        'manager' => array(self::BELONGS_TO, 'salesmantbl', 'manager_id'),
        'salesmantbl' => array(self::HAS_MANY, 'salesmantbl', 'manager_id'),
        'salestbl'=>array(self::HAS_MANY,'salestbl','sales_man_id'),
        'Branch' => array(self::BELONGS_TO, 'Branchs', 'branch_id'),                     
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'sales_man_id' => 'Sales Man',
			'sales_man_name' => 'Sales Man Name',
			'branch_id' => 'Branch',
			'manager_id' => 'Manager',
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

		$criteria->compare('sales_man_id',$this->sales_man_id);
		$criteria->compare('sales_man_name',$this->sales_man_name,true);
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
	 * @return Salesmantbl the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
