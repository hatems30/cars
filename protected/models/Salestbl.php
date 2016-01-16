<?php

/**
 * This is the model class for table "salestbl".
 *
 * The followings are the available columns in table 'salestbl':
 * @property integer $invoice_id
 * @property string $invoice_date
 * @property integer $branch_id
 * @property integer $employee_id
 * @property integer $car_id
 * @property integer $customer_id
 * @property string $finance_type
 * @property double $car_price
 * @property double $downpayment
 * @property double $monthly_premium
 * @property integer $months_count
 * @property double $interest_rate
 * @property integer $bank_id
 * @property double $transfer_amount
 * @property double $bank_down_amount
 * @property double $expenses
 * @property integer $insurance_comp_id
 * @property string $insurance_type
 * @property double $insurance_amount
 * @property double $insurance_rate
 * @property string $notes
 *
 * The followings are the available model relations:
 * @property Employees $employee
 * @property Banks $bank
 * @property Branchs $branch
 * @property Carstbl $car
 * @property Customers $customer
 * @property Inscomps $insuranceComp
 */
class Salestbl extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'salestbl';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('invoice_date, branch_id, employee_id, car_id, customer_id, finance_type', 'required'),
			array('branch_id, employee_id, car_id, customer_id, months_count, bank_id, insurance_comp_id', 'numerical', 'integerOnly'=>true),
			array('car_price, downpayment, monthly_premium, interest_rate, transfer_amount, bank_down_amount, expenses, insurance_amount, insurance_rate', 'numerical'),
			array('finance_type, insurance_type', 'length', 'max'=>255),
			array('notes', 'safe'),                      
                        array('confirm_stat','safe'),                       
                        array('image','safe'), 
                        array('car_price','safe'),
                        array('image', 'length', 'max'=>255, 'on'=>'insert,update'),                
                        array('car_price', 'checkprice', 'on'=>'insert,update'),  
                        array('bank_id', 'checkbank', 'on'=>'insert,update'),  
                        array('discount','safe'), 
                        array('final_price','safe'), 
                    
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('invoice_id, invoice_date, branch_id, employee_id, car_id, customer_id, finance_type, car_price, downpayment, monthly_premium, months_count, interest_rate, bank_id, transfer_amount, bank_down_amount, expenses, insurance_comp_id, insurance_type, insurance_amount, insurance_rate, notes', 'safe', 'on'=>'search'),
		);

	}
        
        public function checkprice($attribute)                
        {   
            $tmp = Carstbl::model()->findByAttributes(array('car_id'=>$this->car_id),'sale_price');                          
               if ( $tmp['sale_price'] > $this->car_price )
                  {
                    $this->addError($attribute,'عفوا السعر اقل من سعر البيع');
                  }                                      
        } 
                public function checkbank($attribute)                
        {   
            $tmp_code = Carstbl::model()->findByAttributes(array('car_id'=>$this->car_id),'code_id');    
            $tmp = Carcode::model()->findByAttributes(array('code_id'=>$tmp_code['code_id']),'sale_price');  
            
               if (empty($this->bank_id) && $this->finance_type=='بنك')
                  {
                    $this->addError($attribute,'عفوا يجب تسجيل البنك');
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
			'employee' => array(self::BELONGS_TO, 'Employees', 'employee_id'),
			'bank' => array(self::BELONGS_TO, 'Banks', 'bank_id'),
			'branch' => array(self::BELONGS_TO, 'Branchs', 'branch_id'),
			'car' => array(self::BELONGS_TO, 'Carstbl', 'car_id'),
			'customer' => array(self::BELONGS_TO, 'Customers', 'customer_id'),
			'insuranceComp' => array(self::BELONGS_TO, 'Inscomps', 'insurance_comp_id'),
                        'carstbl' => array(self::BELONGS_TO, 'Carstbl', 'car_id'),
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
			'car_id' => 'الشاسيه',
			'customer_id' => 'العميل',
			'finance_type' => 'نوع التمويل',
			'car_price' => 'سعر البيع',
			'downpayment' => 'المقدم',
			'monthly_premium' => 'القسط الشهري',
			'months_count' => 'عدد الشهور',
			'interest_rate' => 'نسبة الفائدة',
			'bank_id' => 'البنك',
			'transfer_amount' => 'قيمة التمويل',
			'bank_down_amount' => 'مقدم البنك',
			'expenses' => 'مصاريف ادارية',
			'insurance_comp_id' => 'شركة التأمين',
			'insurance_type' => 'نوع التأمين',
			'insurance_amount' => 'قيمة التأمين',
			'insurance_rate' => 'نسبة التأمين',
			'notes' => 'ملاحظات',                                                
                        'image'=>'صورة العميل',
                        'confirm_stat'=>'اعتماد المدير',
                        'discount'=>'نسبة الخصم',
                        'final_price'=>'السعر بعد الخصم'
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
		$criteria->compare('car_id',$this->car_id);
		$criteria->compare('customer_id',$this->customer_id);
		$criteria->compare('finance_type',$this->finance_type,true);
		$criteria->compare('car_price',$this->car_price);
		$criteria->compare('downpayment',$this->downpayment);
		$criteria->compare('monthly_premium',$this->monthly_premium);
		$criteria->compare('months_count',$this->months_count);
		$criteria->compare('interest_rate',$this->interest_rate);
		$criteria->compare('bank_id',$this->bank_id);
		$criteria->compare('transfer_amount',$this->transfer_amount);
		$criteria->compare('bank_down_amount',$this->bank_down_amount);
		$criteria->compare('expenses',$this->expenses);
		$criteria->compare('insurance_comp_id',$this->insurance_comp_id);
		$criteria->compare('insurance_type',$this->insurance_type,true);
		$criteria->compare('insurance_amount',$this->insurance_amount);
		$criteria->compare('insurance_rate',$this->insurance_rate);
		$criteria->compare('notes',$this->notes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Salestbl the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
