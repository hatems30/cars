<?php

class CarstblController extends Controller
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
		return array(
	
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','delete','view'),
				'users'=>array('@'),
			),
//			array('allow', // allow admin user to perform 'admin' and 'delete' actions
//				'actions'=>array('admin','delete'),
//				'users'=>array('admin'),
//			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
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
		$model=new Carstbl;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Carstbl']))
		{
			$model->attributes=$_POST['Carstbl'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->car_id));
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

		if(isset($_POST['Carstbl']))
		{
			$model->attributes=$_POST['Carstbl'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->car_id));
		}

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
		$dataProvider=new CActiveDataProvider('Carstbl');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Carstbl('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Carstbl']))
			$model->attributes=$_GET['Carstbl'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Carstbl the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Carstbl::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Carstbl $model the model to be validated
	 */
                            public function actionGetmodels()
	{
        	                  
            $this->layout = false;
		$id = $_REQUEST['id'];            
                //$count=Yii::app()->db->createCommand('SELECT COUNT(*) FROM carstbl')->queryScalar();

              $sql="SELECT model_id , model_name from carmodel where brand_id = $id ";
                
              $connection=Yii::app()->db;   // assuming you have configured a "db" connection

              $command=$connection->createCommand($sql);
              $data = $command->queryAll($sql);

              $this->render('getmodels',array(
			'id'=>$_REQUEST['id'],
			'model_id'=>$_REQUEST['model_id'],
                         'data' => $data
		));	
	}
                           public function actionGetcode()
	{
        	                  
            $this->layout = false;
		$id = $_REQUEST['id'];            
                //$count=Yii::app()->db->createCommand('SELECT COUNT(*) FROM carstbl')->queryScalar();

              $sql="SELECT code_id , code_name  from carcode where model_id = $id ";
                
              $connection=Yii::app()->db;   // assuming you have configured a "db" connection

              $command=$connection->createCommand($sql);
              $data = $command->queryAll($sql);

              $this->render('getcode',array(
			'id'=>$_REQUEST['id'],
			'code_id'=>$_REQUEST['code_id'],
                         'data' => $data
		));	
	}

                public function actionGetstores()
	{
        	                  
            $this->layout = false;
		$id = $_REQUEST['id'];            
                //$count=Yii::app()->db->createCommand('SELECT COUNT(*) FROM carstbl')->queryScalar();

              $sql="SELECT store_id , store_name from stores where branch_id = $id ";
                
              $connection=Yii::app()->db;   // assuming you have configured a "db" connection

              $command=$connection->createCommand($sql);
              $data = $command->queryAll($sql);

              $this->render('getstores',array(
			'id'=>$_REQUEST['id'],
			'store_id'=>$_REQUEST['store_id'],
                         'data' => $data
		));	
	}
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='carstbl-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
