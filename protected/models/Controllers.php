<?php

/**
 * This is the model class for table "controllers".
 *
 * The followings are the available columns in table 'controllers':
 * @property integer $controller_id
 * @property string $controller_code_name
 * @property string $controller_form_name
 *
 * The followings are the available model relations:
 * @property Userpertbl[] $userpertbls
 */
class Controllers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'controllers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('controller_code_name, controller_form_name', 'required'),
			array('controller_code_name, controller_form_name', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('controller_id, controller_code_name, controller_form_name', 'safe', 'on'=>'search'),
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
			'userpertbls' => array(self::HAS_MANY, 'Userpertbl', 'controller_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'controller_id' => 'Controller',
			'controller_code_name' => 'Controller Code Name',
			'controller_form_name' => 'Controller Form Name',
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

		$criteria->compare('controller_id',$this->controller_id);
		$criteria->compare('controller_code_name',$this->controller_code_name,true);
		$criteria->compare('controller_form_name',$this->controller_form_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Controllers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
