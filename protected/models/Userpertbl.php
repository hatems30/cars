<?php

/**
 * This is the model class for table "userpertbl".
 *
 * The followings are the available columns in table 'userpertbl':
 * @property integer $per_id
 * @property integer $user_id
 * @property integer $controller_id
 * @property string $per_type
 *
 * The followings are the available model relations:
 * @property Controllers $controller
 * @property User $user
 */
class Userpertbl extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'userpertbl';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, controller_id, per_type', 'required'),
			array('user_id, controller_id', 'numerical', 'integerOnly'=>true),
			array('per_type', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('per_id, user_id, controller_id, per_type', 'safe', 'on'=>'search'),
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
			'controller' => array(self::BELONGS_TO, 'Controllers', 'controller_id'),
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'per_id' => 'م',
			'user_id' => 'المستخدم',
			'controller_id' => 'الشاشة',
			'per_type' => 'الصلاحية',
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

		$criteria->compare('per_id',$this->per_id);
		$criteria->compare('user_id',$id);
		$criteria->compare('controller_id',$this->controller_id);
		$criteria->compare('per_type',$this->per_type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Userpertbl the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
