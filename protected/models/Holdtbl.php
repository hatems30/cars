<?php

/**
 * This is the model class for table "holdtbl".
 *
 * The followings are the available columns in table 'holdtbl':
 * @property integer $hold_id
 * @property integer $car_id
 * @property integer $branch_id
 * @property integer $sales_man_id
 * @property string $customer_name
 * @property string $notes
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
			array('car_id, branch_id, sales_man_id, customer_name', 'required'),
			array('car_id, branch_id, sales_man_id', 'numerical', 'integerOnly'=>true),
			array('customer_name', 'length', 'max'=>255),
			array('notes', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('hold_id, car_id, branch_id, sales_man_id, customer_name, notes', 'safe', 'on'=>'search'),
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
			'hold_id' => 'Hold',
			'car_id' => 'Car',
			'branch_id' => 'Branch',
			'sales_man_id' => 'Sales Man',
			'customer_name' => 'Customer Name',
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

		$criteria->compare('hold_id',$this->hold_id);
		$criteria->compare('car_id',$this->car_id);
		$criteria->compare('branch_id',$this->branch_id);
		$criteria->compare('sales_man_id',$this->sales_man_id);
		$criteria->compare('customer_name',$this->customer_name,true);
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
