<?php

class User extends CActiveRecord
{

	/**
	 * Returns the static model of the specified AR class.
	 * @return CActiveRecord the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username , password , branch_id , employee_id', 'required')	,	
                        array('password', 'safe'),
                        array('branch_id', 'safe'),
                        array('employee_id', 'safe')
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
			'posts' => array(self::HAS_MANY, 'Post', 'author_id'),
                        'branch' => array(self::BELONGS_TO,'Branchs','branch_id'),
                        'employee' => array(self::BELONGS_TO, 'Employees', 'employee_id'),
		);
	}

	
	/**
	 * Checks if the given password is correct.
	 * @param string the password to be validated
	 * @return boolean whether the password is valid
	 */
	public function validatePassword($password)
	{
		return CPasswordHelper::verifyPassword($password,$this->password);
	}

	/**
	 * Generates the password hash.
	 * @param string password
	 * @return string hash
	 */
	public function hashPassword($password)
	{
		return CPasswordHelper::hashPassword($password);
	}
        
        function isAdmin(){
            if(!Yii::app()->user->getIsGuest() && Yii::app()->user->getState("type")=="admin"){
                return true;
            }
            return false;
        }
        public function attributeLabels()
        {
            
            		return array(
			'username' => 'اسم المستخدم',
			'password' => 'كلمة السر',
                        'branch_id' => 'الفرع',
                        'employee_id' => 'اسم الموظف',    
		);
            /*
                $newLabels=array();
                foreach(User::model()->attributes as $k=>$v){
                    $newLabels[$k]= Yii::t('data', $k);
                }
               return $newLabels;
             * 
             * 
             */
        }
        
        	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('username',$this->username);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
