<?php

/**
 * This is the model class for table "carstbl".
 *
 * The followings are the available columns in table 'carstbl':
 * @property integer $car_id
 * @property integer $brand_id
 * @property integer $model_id
 * @property integer $code_id
 * @property string $car_spec
 * @property integer $color_id
 * @property string $car_year
 * @property string $chass_no
 * @property string $motor_no
 * @property integer $branch_id
 * @property integer $store_id
 * @property integer $supplier_id
 * @property string $add_date
 * @property double $cost_price
 * @property double $off_price
 * @property double $sale_price_from
 * @property double $sale_price_to
 * @property string $notes
 *
 * The followings are the available model relations:
 * @property Carcode $code
 * @property Brands $brand
 * @property Branchs $branch
 * @property Colors $color
 * @property Stores $store
 * @property Suppliers $supplier
 * @property Salestbl[] $salestbls
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
			array('brand_id, model_id, code_id, color_id, car_year, chass_no, motor_no, branch_id, supplier_id, add_date', 'required'),
			array('brand_id, model_id, code_id, color_id, branch_id, store_id, supplier_id', 'numerical', 'integerOnly'=>true),
			array('cost_price, off_price, sale_price', 'numerical'),
			array('car_spec, chass_no, motor_no', 'length', 'max'=>255),
			array('car_year', 'length', 'max'=>4),
			array('notes , car_factor', 'safe'),
                        array('sale_price , deposit_type , deposit_name' , 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('car_id, brand_id, model_id, code_id, car_spec, color_id, car_year, chass_no, motor_no, branch_id, store_id, supplier_id, add_date, cost_price, off_price, sale_price_from, sale_price_to, notes', 'safe', 'on'=>'search'),
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
			'code' => array(self::BELONGS_TO, 'Carcode', 'code_id'),
			'brand' => array(self::BELONGS_TO, 'Brands', 'brand_id'),
                        'carmodel' => array(self::BELONGS_TO, 'Carmodel', 'model_id'), 
			'branch' => array(self::BELONGS_TO, 'Branchs', 'branch_id'),
			'color' => array(self::BELONGS_TO, 'Colors', 'color_id'),
			'store' => array(self::BELONGS_TO, 'Stores', 'store_id'),
			'supplier' => array(self::BELONGS_TO, 'Suppliers', 'supplier_id'),
			'salestbl' => array(self::HAS_MANY, 'Salestbl', 'car_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'car_id' => 'مسلسل',
			'brand_id' => 'الماركة',
			'model_id' => 'الموديل',
			'code_id' => 'الكود',
			'car_spec' => 'المواصفة',
			'color_id' => 'اللون',
			'car_year' => 'سنة الصنع',
			'chass_no' => 'رقم الشاسيه',
			'motor_no' => 'رقم الماتور',
			'branch_id' => 'الفرع',
			'store_id' => 'مكان التخزين',
			'supplier_id' => 'المورد',
			'add_date' => 'تاريخ الشراء',
			'cost_price' => 'سعر الشراء',
			'off_price' => 'السعر الرسمي',
			'sale_price' => 'سعر البيع ',			
			'notes' => 'ملاحظات',
                        'car_factor' => 'الوزن النسبي',
                        'deposit_type' => 'امانات',
                        'deposit_name' => 'طرف الامانة'
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

		$criteria->compare('car_id',$this->car_id);
		$criteria->compare('brand_id',$this->brand_id);
		$criteria->compare('model_id',$this->model_id);
		$criteria->compare('code_id',$this->code_id);
		$criteria->compare('car_spec',$this->car_spec,true);
		$criteria->compare('color_id',$this->color_id);
		$criteria->compare('car_year',$this->car_year,true);
		$criteria->compare('chass_no',$this->chass_no,true);
		$criteria->compare('motor_no',$this->motor_no,true);
		$criteria->compare('branch_id',$id);
		$criteria->compare('store_id',$this->store_id);
		$criteria->compare('supplier_id',$this->supplier_id);
		$criteria->compare('add_date',$this->add_date,true);
		$criteria->compare('cost_price',$this->cost_price);
		$criteria->compare('off_price',$this->off_price);
		$criteria->compare('sale_price_from',$this->sale_price);		
		$criteria->compare('notes',$this->notes,true);

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
