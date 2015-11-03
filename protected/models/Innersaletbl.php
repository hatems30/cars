<?php

/**
 * This is the model class for table "innersaletbl".
 *
 * The followings are the available columns in table 'innersaletbl':
 * @property integer $trs_id
 * @property string $trs_date
 * @property integer $from_branch_id
 * @property integer $to_branch_id
 * @property integer $car_id
 * @property double $price
 *
 * The followings are the available model relations:
 * @property Branchs $fromBranch
 * @property Carstbl $car
 * @property Branchs $toBranch
 */
class Innersaletbl extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'innersaletbl';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('trs_date, from_branch_id, to_branch_id, car_id, price', 'required'),
			array('from_branch_id, to_branch_id, car_id', 'numerical', 'integerOnly'=>true),
			array('price', 'numerical'),
                        array('notes','safe'),
                        array('employee_id','safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('trs_id, trs_date, from_branch_id, to_branch_id, car_id, price', 'safe', 'on'=>'search'),
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
			'fromBranch' => array(self::BELONGS_TO, 'Branchs', 'from_branch_id'),
			'car' => array(self::BELONGS_TO, 'Carstbl', 'car_id'),
			'toBranch' => array(self::BELONGS_TO, 'Branchs', 'to_branch_id'),
                        'employees' => array(self::BELONGS_TO, 'employees', 'employee_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'trs_id' => 'رقم',
			'trs_date' => 'تاريخ التحويل',
			'from_branch_id' => 'الفرع المحول منه',
			'to_branch_id' => 'الفرع المحول له',
			'car_id' => 'الشاسيه',
			'price' => 'السعر',
                        'notes' => 'ملاحظات',
                        'employee_id' => 'المندوب',
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

		$criteria->compare('trs_id',$this->trs_id);
		$criteria->compare('trs_date',$this->trs_date,true);
		$criteria->compare('from_branch_id',$this->from_branch_id);
		$criteria->compare('to_branch_id',$this->to_branch_id);
		$criteria->compare('car_id',$this->car_id);
		$criteria->compare('price',$this->price);
                $criteria->compare('notes',$this->notes);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Innersaletbl the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
