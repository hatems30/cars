<?php

/**
 * This is the model class for table "factorstbl".
 *
 * The followings are the available columns in table 'factorstbl':
 * @property integer $factor_id
 * @property integer $cach_factor
 * @property integer $premium_factor
 * @property integer $dealer_factor
 * @property integer $company_factor
 */
class Factorstbl extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'factorstbl';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cach_factor, premium_factor, dealer_factor, company_factor', 'required'),
			array('cach_factor, premium_factor, dealer_factor, company_factor', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('factor_id, cach_factor, premium_factor, dealer_factor, company_factor', 'safe', 'on'=>'search'),
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
			'factor_id' => 'م',
			'cach_factor' => 'معامل البيع النقدي',
			'premium_factor' => 'معامل القسط المباشر',
			'dealer_factor' => 'معامل البيع التجاري',
			'company_factor' => 'معامل بيع الشركات',
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

		$criteria->compare('factor_id',$this->factor_id);
		$criteria->compare('cach_factor',$this->cach_factor);
		$criteria->compare('premium_factor',$this->premium_factor);
		$criteria->compare('dealer_factor',$this->dealer_factor);
		$criteria->compare('company_factor',$this->company_factor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Factorstbl the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
