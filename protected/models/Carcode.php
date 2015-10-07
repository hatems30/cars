<?php

/**
 * This is the model class for table "carcode".
 *
 * The followings are the available columns in table 'carcode':
 * @property integer $code_id
 * @property string $code_name
 * @property integer $brand_id
 * @property integer $model_id
 * @property string $code_01
 * @property string $code_02
 * @property string $code_03
 * @property string $code_04
 * @property string $code_05
 * @property string $code_06
 * @property string $code_07
 * @property string $code_08
 * @property string $code_09
 * @property string $code_10
 * @property string $code_11
 * @property string $code_12
 * @property string $code_13
 * @property string $code_14
 * @property string $code_15
 * @property string $code_16
 * @property string $code_17
 * @property string $code_18
 * @property string $code_19
 * @property string $code_20
 * @property string $code_21
 * @property string $code_22
 * @property string $code_23
 * @property string $code_24
 * @property string $code_25
 * @property string $code_26
 * @property string $code_27
 * @property string $code_28
 * @property string $code_29
 * @property string $code_30
 * @property string $code_31
 * @property string $code_32
 * @property string $code_33
 * @property string $code_34
 * @property string $code_35
 * @property string $code_36
 * @property string $code_37
 * @property string $code_38
 * @property string $code_39
 * @property string $code_40
 * @property string $code_41
 *
 * The followings are the available model relations:
 * @property Carmodel $model
 * @property Brands $brand
 */
class Carcode extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'carcode';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code_name, brand_id, model_id, code_01, code_02, code_03, code_04, code_05, code_06, code_07, code_08, code_09, code_10, code_11, code_12, code_13, code_14, code_15, code_16, code_17, code_18, code_19, code_20, code_21, code_22, code_23, code_24, code_25, code_26, code_27, code_28, code_29, code_30, code_31, code_32, code_33, code_34, code_35, code_36, code_37, code_38, code_39, code_40', 'required'),
			array('brand_id, model_id', 'numerical', 'integerOnly'=>true),
			array('code_name', 'length', 'max'=>255),
			array('code_01, code_02, code_03, code_04, code_05, code_06, code_07, code_08, code_09, code_10, code_11, code_12, code_13, code_14, code_15, code_16, code_17, code_18, code_19, code_20, code_21, code_22, code_23, code_24, code_25, code_26, code_27, code_28, code_29, code_30, code_31, code_32, code_33, code_34, code_35, code_36, code_37, code_38, code_39, code_40', 'length', 'max'=>255),
                        array('code_41 , code_42 , code_43, code_44, code_45, code_46, code_47, code_48, code_49, code_50, code_51, code_52, code_53, code_54, code_55, code_56, code_57, code_58 , code_59' ,'safe'), 
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('code_id, code_name, brand_id, model_id, code_01, code_02, code_03, code_04, code_05, code_06, code_07, code_08, code_09, code_10, code_11, code_12, code_13, code_14, code_15, code_16, code_17, code_18, code_19, code_20, code_21, code_22, code_23, code_24, code_25, code_26, code_27, code_28, code_29, code_30, code_31, code_32, code_33, code_34, code_35, code_36, code_37, code_38, code_39, code_40', 'safe', 'on'=>'search'),
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
			'model' => array(self::BELONGS_TO, 'Carmodel', 'model_id'),
			'brand' => array(self::BELONGS_TO, 'Brands', 'brand_id'),
                        'carstbl' => array(self::HAS_MANY, 'carstbl', 'code_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'code_id' => 'Code',
			'code_name' => 'الكـود',
			'brand_id' => 'الماركة',
			'model_id' => 'الموديل',
			'code_01' => 'ناقل الحركة',
			'code_02' => 'المقابض',
			'code_03' => 'المفتاح',
			'code_04' => 'التابلوه',
			'code_05' => 'الزجاج',
			'code_06' => 'فتحة السقف',
			'code_07' => 'عجلة القيادة',
			'code_08' => 'الشبكة',
			'code_09' => 'وسائد هوائية للسائق',
			'code_10' => 'وسائد هوائية للراكب',
			'code_11' => 'محدد سرعة',
			'code_12' => 'USB',
			'code_13' => 'AUX',
			'code_14' => 'CD',
			'code_15' => 'ولاعة',
			'code_16' => 'شاشة تاتش',
			'code_17' => 'ABS',
			'code_18' => 'EBD',
			'code_19' => 'BA',
			'code_20' => 'تكييف',
			'code_21' => 'مرايات كهرباء',
			'code_22' => 'طي المريات كهربائيا',
			'code_23' => 'فوانيس شبورة',
			'code_24' => 'اشارات فى المرايات',
			'code_25' => 'حساس ركن امامي',
			'code_26' => 'حساس ركن خلفي',
			'code_27' =>  'حساس نور',
			'code_28' =>  'حساس مطر',
			'code_29' =>  'كاميرا خلفية',
			'code_30' =>  'سنتر لوك',
			'code_31' =>  'باور استيرنج',
			'code_32' => 'طاسات',
			'code_33' => 'فامية خلفى',
			'code_34' => 'كرسي كهرباء',
			'code_35' => 'سبويلر',
			'code_36' => 'ايموبلايزر',
			'code_37' => 'سعة خزان الوقود',
			'code_38' => 'سعة المحرك CC',
			'code_39' => 'قوة المحرك',
			'code_40' => 'عدد السلندرات',
                        'code_41' => 'مخرج طاقة',
                        'code_42' => 'مخرج تكييف خلفي',
                        'code_43' => 'كرسي هيدروليك',
                        'code_44' => 'طي المقعدالخلفي',
                        'code_45' => 'LED',
                        'code_46' => 'الطارة',                    
                        'code_47' => 'بلوتوث',
                        'code_48' => 'شفتات طارة',                         
                        'code_49' => 'مساحة خلفية',
                        'code_50' => 'مرايات تعتيم',
                        'code_51' => 'حامل نظارة',
                        'code_52' => 'نور قرأة',
                        'code_53' => 'حامل اكواب',
                        'code_54' => 'مسند يد',
                        'code_55' => 'فرش جلد',
                        'code_56' => 'فرش الابواب',
                        'code_57' => 'نظام التوازن الكتروني',
                        'code_58' => 'مقاس الجنط',
                        'code_59' => 'مبرد تابلوه',
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

		$criteria->compare('code_id',$this->code_id);
		$criteria->compare('code_name',$this->code_name,true);
		$criteria->compare('brand_id',$this->brand_id);
		$criteria->compare('model_id',$this->model_id);
		$criteria->compare('code_01',$this->code_01,true);
		$criteria->compare('code_02',$this->code_02,true);
		$criteria->compare('code_03',$this->code_03,true);
		$criteria->compare('code_04',$this->code_04,true);
		$criteria->compare('code_05',$this->code_05,true);
		$criteria->compare('code_06',$this->code_06,true);
		$criteria->compare('code_07',$this->code_07,true);
		$criteria->compare('code_08',$this->code_08,true);
		$criteria->compare('code_09',$this->code_09,true);
		$criteria->compare('code_10',$this->code_10,true);
		$criteria->compare('code_11',$this->code_11,true);
		$criteria->compare('code_12',$this->code_12,true);
		$criteria->compare('code_13',$this->code_13,true);
		$criteria->compare('code_14',$this->code_14,true);
		$criteria->compare('code_15',$this->code_15,true);
		$criteria->compare('code_16',$this->code_16,true);
		$criteria->compare('code_17',$this->code_17,true);
		$criteria->compare('code_18',$this->code_18,true);
		$criteria->compare('code_19',$this->code_19,true);
		$criteria->compare('code_20',$this->code_20,true);
		$criteria->compare('code_21',$this->code_21,true);
		$criteria->compare('code_22',$this->code_22,true);
		$criteria->compare('code_23',$this->code_23,true);
		$criteria->compare('code_24',$this->code_24,true);
		$criteria->compare('code_25',$this->code_25,true);
		$criteria->compare('code_26',$this->code_26,true);
		$criteria->compare('code_27',$this->code_27,true);
		$criteria->compare('code_28',$this->code_28,true);
		$criteria->compare('code_29',$this->code_29,true);
		$criteria->compare('code_30',$this->code_30,true);
		$criteria->compare('code_31',$this->code_31,true);
		$criteria->compare('code_32',$this->code_32,true);
		$criteria->compare('code_33',$this->code_33,true);
		$criteria->compare('code_34',$this->code_34,true);
		$criteria->compare('code_35',$this->code_35,true);
		$criteria->compare('code_36',$this->code_36,true);
		$criteria->compare('code_37',$this->code_37,true);
		$criteria->compare('code_38',$this->code_38,true);
		$criteria->compare('code_39',$this->code_39,true);
		$criteria->compare('code_40',$this->code_40,true);
		$criteria->compare('code_41',$this->code_41,true);
		$criteria->compare('code_42',$this->code_42,true);
		$criteria->compare('code_43',$this->code_43,true);
		$criteria->compare('code_44',$this->code_44,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Carcode the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
