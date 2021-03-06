<?php

/**
 * This is the model class for table "carstbl".
 *
 * The followings are the available columns in table 'carstbl':
 * @property integer $car_id
 * @property integer $brand_id
 * @property integer $model_id
 * @property integer $color_id
 * @property string $chass_no
 * @property string $motor_no
 * @property double $off_price
 * @property double $cost_price
 * @property double $sale_price
 * @property string $car_code
 * @property string $car_spec
 * @property integer $branch_id
 * @property integer $store_id
 * @property integer $supplier_id
 */
class Carstbl extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'carstbl';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('brand_id, model_id, color_id, chass_no, motor_no, car_code, branch_id', 'required'),
			array('brand_id, model_id, color_id, branch_id, store_id, supplier_id', 'numerical', 'integerOnly'=>true),
			array('off_price, cost_price, sale_price', 'numerical'),
			array('chass_no, motor_no, car_code, car_spec', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('car_id, brand_id, model_id, color_id, chass_no, motor_no, off_price, cost_price, sale_price, car_code, car_spec, branch_id, store_id, supplier_id', 'safe', 'on'=>'search'),
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
                    		
			'brand'=>array(self::BELONGS_TO,'brands','brand_id'),
                        'branch' =>array(self::BELONGS_TO,'branchs','branch_id'),
                        'carmodel' =>array(self::BELONGS_TO,'carmodel','model_id'),
                        'colors' =>array(self::BELONGS_TO,'colors','color_id'),
                        'stores' =>array(self::BELONGS_TO,'stores','store_id'),
                        'suppliers' =>array(self::BELONGS_TO,'suppliers','supplier_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'car_id' => 'Car',
			'brand_id' => 'Brand',                        
			'model_id' => 'Model',
			'color_id' => 'Color',
			'chass_no' => 'Chass No',
			'motor_no' => 'Motor No',
			'off_price' => 'Off Price',
			'cost_price' => 'Cost Price',
			'sale_price' => 'Sale Price',
			'car_code' => 'Car Code',
			'car_spec' => 'Car Spec',
			'branch_id' => 'Branch',
			'store_id' => 'Store',
			'supplier_id' => 'Supplier',
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

		$criteria->compare('car_id',$this->car_id);
		$criteria->compare('brand_id',$this->brand_id);
		$criteria->compare('model_id',$this->model_id);
		$criteria->compare('color_id',$this->color_id);
		$criteria->compare('chass_no',$this->chass_no,true);
		$criteria->compare('motor_no',$this->motor_no,true);
		$criteria->compare('off_price',$this->off_price);
		$criteria->compare('cost_price',$this->cost_price);
		$criteria->compare('sale_price',$this->sale_price);
		$criteria->compare('car_code',$this->car_code,true);
		$criteria->compare('car_spec',$this->car_spec,true);
		$criteria->compare('branch_id',$this->branch_id);
		$criteria->compare('store_id',$this->store_id);
		$criteria->compare('supplier_id',$this->supplier_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Carstbl the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
