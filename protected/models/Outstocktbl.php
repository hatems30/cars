<?php

/**
 * This is the model class for table "outstocktbl".
 *
 * The followings are the available columns in table 'outstocktbl':
 * @property integer $car_id
 * @property integer $section_id
 * @property string $car_name
 * @property string $car_color
 * @property string $car_price
 * @property string $image
 * @property string $notes
 *
 * The followings are the available model relations:
 * @property Sectionstbl $section
 */
class Outstocktbl extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'outstocktbl';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('section_id, car_name', 'required'),
			array('section_id', 'numerical', 'integerOnly'=>true),
			array('car_name, car_color, car_price, notes', 'length', 'max'=>255),
                        array('image', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('car_id, section_id, car_name, car_color, car_price, image, notes', 'safe', 'on'=>'search'),
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
			'section' => array(self::BELONGS_TO, 'Sectionstbl', 'section_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'car_id' => 'Car',
			'section_id' => 'Section',
			'car_name' => 'البيــان',
			'car_color' => 'الالــــوان',
			'car_price' => 'الاسعــار',			
			'notes' => 'ملاخظــات',
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
		$criteria->compare('section_id',$id);
		$criteria->compare('car_name',$this->car_name,true);
		$criteria->compare('car_color',$this->car_color,true);
		$criteria->compare('car_price',$this->car_price,true);		
		$criteria->compare('notes',$this->notes,true);
		return new CActiveDataProvider($this, array('criteria'=>$criteria,));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Outstocktbl the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
