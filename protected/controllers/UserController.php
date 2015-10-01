<?php

class UserController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{           
            $cont = Yii::app()->controller->id;
            $user_name = Yii::app()->user->username;
            $sql="SELECT userpertbl.per_type
FROM userpertbl
INNER JOIN `user` ON userpertbl.user_id = `user`.id
INNER JOIN controllers ON userpertbl.controller_id = controllers.controller_id 
where `user`.username= '$user_name' and controllers.controller_code_name ='$cont'"; 
              $connection=Yii::app()->db;   // assuming you have configured a "db" connection
              $command=$connection->createCommand($sql);
              $data = $command->queryAll($sql);
              foreach ($data as $row){foreach ($row as $key=>$value){$per_type=$value;}}                                          
              if ($per_type=='ReadWrite')
              {
                  return array(
                      	        array('allow', // allow authenticated user to perform 'create' and 'update' actions
			       	      'actions'=>array('create','update','admin','delete','view'),
				      'users'=>array('@'),),
                        	 array('deny',  // deny all users
				       'users'=>array('*'),),                      
                  )   ; 
              }
              elseif ($per_type=='Read') 
              {
                                return array(
                      	        array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('view','admin'),
				'users'=>array('@'),),
                        	 array('deny',  // deny all users
				       'users'=>array('*'),),                                                          
                  )   ; 
              }              
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new User;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
                        $model->password=$model->hashPassword($model->password);
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
                        
			$model->attributes=$_POST['User'];
                        if(!empty($model->password)){
                             $model->password=$model->hashPassword($model->password);
                        }
                       
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}
                
                $model->password=null;
		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('User');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new User('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$model->attributes=$_GET['User'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return User the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param User $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
