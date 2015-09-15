<?php

/**
 * This is the model class for table "bankofferstbl".
 *
 * The followings are the available columns in table 'bankofferstbl':
 * @property integer $offer_id
 * @property string $offer_date
 * @property integer $customer_id
 * @property integer $brand_id
 * @property integer $model_id
 * @property integer $code_id
 * @property integer $bank_id
 * @property string $banker
 * @property integer $branch_id
 * @property integer $employee_id
 * @property string $offer_status
 * @property string $results
 * @property string $notes
 *
 * The followings are the available model relations:
 * @property Banks $bank
 * @property Branchs $branch
 * @property Brands $brand
 * @property Carcode $code
 * @property Customers $customer
 * @property Employees $employee
 * @property Carmodel $model
 */
class Bankofferstbl extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bankofferstbl';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('offer_date, customer_id, brand_id, model_id, code_id, bank_id, banker, branch_id, employee_id, offer_status', 'required'),
			array('customer_id, brand_id, model_id, code_id, bank_id, branch_id, employee_id', 'numerical', 'integerOnly'=>true),
			array('banker', 'length', 'max'=>255),
			array('offer_status', 'length', 'max'=>50),
			array('results, notes', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('offer_id, offer_date, customer_id, brand_id, model_id, code_id, bank_id, banker, branch_id, employee_id, offer_status, results, notes', 'safe', 'on'=>'search'),
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
			'bank' => array(self::BELONGS_TO, 'Banks', 'bank_id'),
			'branch' => array(self::BELONGS_TO, 'Branchs', 'branch_id'),
			'brand' => array(self::BELONGS_TO, 'Brands', 'brand_id'),
			'code' => array(self::BELONGS_TO, 'Carcode', 'code_id'),
			'customer' => array(self::BELONGS_TO, 'Customers', 'customer_id'),
			'employee' => array(self::BELONGS_TO, 'Employees', 'employee_id'),
			'model' => array(self::BELONGS_TO, 'Carmodel', 'model_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'offer_id' => 'مسلسل',
			'offer_date' => 'تاريخ العرض',
			'customer_id' => 'العميــل',
			'brand_id' => 'المــاركة',
			'model_id' => 'المـــوديل',
			'code_id' => 'الكــود',
			'bank_id' => 'البنك',
			'banker' => 'موظف البنك',
			'branch_id' => 'الفـــرع',
			'employee_id' => 'البائع',
			'offer_status' => 'حالة العرض',
			'results' => 'النتائج',
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

		$criteria->compare('offer_id',$this->offer_id);
		$criteria->compare('offer_date',$this->offer_date,true);
		$criteria->compare('customer_id',$this->customer_id);
		$criteria->compare('brand_id',$this->brand_id);
		$criteria->compare('model_id',$this->model_id);
		$criteria->compare('code_id',$this->code_id);
		$criteria->compare('bank_id',$this->bank_id);
		$criteria->compare('banker',$this->banker,true);
		$criteria->compare('branch_id',$this->branch_id);
		$criteria->compare('employee_id',$this->employee_id);
		$criteria->compare('offer_status',$this->offer_status,true);
		$criteria->compare('results',$this->results,true);
		$criteria->compare('notes',$this->notes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bankofferstbl the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
