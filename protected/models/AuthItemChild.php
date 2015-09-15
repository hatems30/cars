<?php

class AuthItemChild extends CActiveRecord
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
		return 'AuthItemChild';
	}

  public function attributeLabels()
    {
            $newLabels=array();
            foreach($this::model()->attributes as $k=>$v){
                $newLabels[$k]= Yii::t('data', $k);
            }
           return $newLabels;
    }
}
