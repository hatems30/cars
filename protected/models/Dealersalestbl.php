<?php

/**
 * This is the model class for table "dealersalestbl".
 *
 * The followings are the available columns in table 'dealersalestbl':
 * @property integer $invoice_id
 * @property string $invoice_date
 * @property integer $branch_id
 * @property integer $employee_id
 * @property integer $dealer_id
 * @property integer $car_id
 * @property double $price
 * @property string $notes
 *
 * The followings are the available model relations:
 * @property Carstbl $car
 * @property Branchs $branch
 * @property Employees $employee
 * @property Dealerstbl $dealer
 */
class Dealersalestbl extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dealersalestbl';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('invoice_date, branch_id, employee_id, dealer_id, car_id, price', 'required'),
			array('branch_id, employee_id, dealer_id, car_id', 'numerical', 'integerOnly'=>true),
			array('price', 'numerical'),
			array('notes', 'safe'),
                        array('confirm_stat','safe'),
                        array('discount','safe'), 
                        array('final_price','safe'),     
                        array('price', 'checkprice', 'on'=>'insert,update'),  
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('invoice_id, invoice_date, branch_id, employee_id, dealer_id, car_id, price, notes', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
        public function checkprice($attribute)                
        {   
            $tmp = Carstbl::model()->findByAttributes(array('car_id'=>$this->car_id),'sale_price');                          
               if ( $tmp['sale_price'] > $this->price )
                  {
                    $this->addError($attribute,'عفوا السعر اقل من سعر البيع');
                  }                                      
        } 
        
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'car' => array(self::BELONGS_TO, 'Carstbl', 'car_id'),
			'branch' => array(self::BELONGS_TO, 'Branchs', 'branch_id'),
			'employee' => array(self::BELONGS_TO, 'Employees', 'employee_id'),
			'dealer' => array(self::BELONGS_TO, 'Dealerstbl', 'dealer_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'invoice_id' => 'رقم',
			'invoice_date' => 'تاريخ البيع',
			'branch_id' => 'الفرع',
			'employee_id' => 'مندوب البيع',
			'dealer_id' => 'الموزع',
			'car_id' => 'الشاسيه',
			'price' => 'السعر',
			'notes' => 'ملاحظات',
                        'confirm_stat'=>'اعتماد المدير',
                        'discount' => 'نسبة الخصم',
                        'final_price' => 'السعر بعد الخصم'
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

		$criteria->compare('invoice_id',$this->invoice_id);
		$criteria->compare('invoice_date',$this->invoice_date,true);
		$criteria->compare('branch_id',$this->branch_id);
		$criteria->compare('employee_id',$this->employee_id);
		$criteria->compare('dealer_id',$this->dealer_id);
		$criteria->compare('car_id',$this->car_id);
		$criteria->compare('price',$this->price);
		$criteria->compare('notes',$this->notes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dealersalestbl the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
