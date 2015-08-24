<?php

/**
 * This is the model class for table "branchs".
 *
 * The followings are the available columns in table 'branchs':
 * @property integer $branch_id
 * @property string $branch_name
 */
class Branchs extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'branchs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('branch_name', 'required'),
			array('branch_name', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('branch_id, branch_name', 'safe', 'on'=>'search'),
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
                    
                    'carstbl'=>array(self::HAS_MANY,'carstbl','branch_id'),
                    'salestbl'=>array(self::HAS_MANY,'salestbl','branch_id'),
                    'salesmantbl'=>array(self::HAS_MANY,'salesmantbl','branch_id'),
                    'holdtbl'=>array(self::HAS_MANY,'holdtbl','branch_id'),
                    'stores'=>array(self::HAS_MANY,'stores','store_id'),
                    
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	
        public function attributeLabels() {
            $newLabels = array();
            foreach ($this::model()->attributes as $k => $v) {
                $newLabels[$k] = Yii::t('data', $k);
            }
            return $newLabels;
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

		$criteria->compare('branch_id',$this->branch_id);
		$criteria->compare('branch_name',$this->branch_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Branchs the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
