<?php

class PaperstblController extends Controller
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
			array('allow',  // deny all users
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
		$model=new Paperstbl;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Paperstbl']))
		{
			$model->attributes=$_POST['Paperstbl'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->paper_id));
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

		if(isset($_POST['Paperstbl']))
		{
			$model->attributes=$_POST['Paperstbl'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->paper_id));
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
		$dataProvider=new CActiveDataProvider('Paperstbl');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Paperstbl('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Paperstbl']))
			$model->attributes=$_GET['Paperstbl'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Paperstbl the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Paperstbl::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Paperstbl $model the model to be validated
	 */
                        public function actionGetcar()
	{
        	                  
            $this->layout = false;
		$id = $_REQUEST['id'];            
                //$count=Yii::app()->db->createCommand('SELECT COUNT(*) FROM carstbl')->queryScalar();
                
              if ($_REQUEST['sale_type']=='بيع مباشر')
              {
              $sql="SELECT carstbl.chass_no, salestbl.car_id FROM salestbl INNER JOIN carstbl ON salestbl.car_id = carstbl.car_id where salestbl.branch_id = $id and salestbl.car_id in (select car_id from salestbl)";    
              
              }
              elseif ($_REQUEST['sale_type']=='موزعين') 
              {
              $sql = "SELECT dealersalestbl.car_id, carstbl.chass_no FROM dealersalestbl INNER JOIN carstbl ON dealersalestbl.car_id = carstbl.car_id where dealersalestbl.branch_id = $id and dealersalestbl.car_id in (select car_id from dealersalestbl) ";
              }
              elseif ($_REQUEST['sale_type']=='شركات') 
              {
              $sql="SELECT companysalestbl.car_id, carstbl.chass_no FROM companysalestbl INNER JOIN carstbl ON companysalestbl.car_id = carstbl.car_id where companysalestbl.branch_id = $id and companysalestbl.car_id in (select car_id from companysalestbl)";
              }              
                
              $connection=Yii::app()->db;   // assuming you have configured a "db" connection

              $command=$connection->createCommand($sql);
              $data = $command->queryAll($sql);

              $this->render('getcar',array(
			'id'=>$_REQUEST['id'],
			'car_id'=>$_REQUEST['car_id'],
                         'data' => $data
		));	
	}
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='paperstbl-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
