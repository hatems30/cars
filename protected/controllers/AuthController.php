<?php

class AuthController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
                    
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
	
          
	
	}

        public function actionLogout() {
        Yii::app()->user->logout();
        Yii::app()->request->redirect(Yii::app()->user->returnUrl);
    } 
    public function actionLogin() {
        if(!Yii::app()->user->getIsGuest()){
             Yii::app()->request->redirect(Yii::app()->user->returnUrl);
        }
      //   User::model()->hashPassword("test1");
        	$model=new LoginForm;

		// if it is ajax validation request
//		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
//		{
//			echo CActiveForm::validate($model);
//			Yii::app()->end();
//		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
                
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
                        
			if($model->validate()){ 
                            
                            if($model->login()){
                              $this->redirect(Yii::app()->user->returnUrl);
                            }
                        }else{
                           
                        }
				//
		}
		// display the login form
		$this->render('login',array('model'=>$model));
           
    }

    
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

}