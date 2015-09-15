<?php

/**
 * This is the model class for table "paperstbl".
 *
 * The followings are the available columns in table 'paperstbl':
 * @property integer $paper_id
 * @property string $paper_date
 * @property integer $branch_id
 * @property integer $car_id
 * @property integer $supplier_id
 * @property string $paper_status
 * @property string $notes
 *
 * The followings are the available model relations:
 * @property Branchs $branch
 * @property Carstbl $car
 * @property Suppliers $supplier
 */
class Paperstbl extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'paperstbl';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('paper_date, branch_id, car_id, supplier_id, paper_status', 'required'),
			array('branch_id, car_id, supplier_id', 'numerical', 'integerOnly'=>true),
			array('paper_status', 'length', 'max'=>50),
			array('notes','safe'),
                        array('sale_type','safe'),
                    
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('paper_id, paper_date, branch_id, car_id, supplier_id, paper_status, notes', 'safe', 'on'=>'search'),
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
			'branch' => array(self::BELONGS_TO, 'Branchs', 'branch_id'),
			'car' => array(self::BELONGS_TO, 'Carstbl', 'car_id'),
			'supplier' => array(self::BELONGS_TO, 'Suppliers', 'supplier_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'paper_id' => 'رقم',
			'paper_date' => 'تاريخ التبليغ',
			'branch_id' => 'الفرع',
                        'sale_type'=>'نوع البيع' ,
			'car_id' => 'الشاسيه',
			'supplier_id' => 'المبلغ له',
			'paper_status' => 'حالة الاوراق',
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

		$criteria->compare('paper_id',$this->paper_id);
		$criteria->compare('paper_date',$this->paper_date,true);
		$criteria->compare('branch_id',$this->branch_id);
		$criteria->compare('car_id',$this->car_id);
		$criteria->compare('supplier_id',$this->supplier_id);
		$criteria->compare('paper_status',$this->paper_status,true);
		$criteria->compare('notes',$this->notes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Paperstbl the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
