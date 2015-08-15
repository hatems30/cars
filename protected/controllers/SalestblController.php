<?php

class SalestblController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
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
		$model=new Salestbl;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Salestbl']))
		{
			$model->attributes=$_POST['Salestbl'];
			if($model->save())
                        {
				$this->redirect(array('view','id'=>$model->invoice_id));
                                
                                
                        }
		}

		$this->render('create',array(
			'model'=>$model,
		));
             //-------------------------------------------------------------------   

    
	}

        public function actionGetCarData()
	{
            $this->layout = false;
		$id = $_REQUEST['id'];            
                //$count=Yii::app()->db->createCommand('SELECT COUNT(*) FROM carstbl')->queryScalar();

                $sql="SELECT carstbl.car_id, brands.brand_name, carmodel.model_name, colors.color_name FROM brands INNER JOIN carstbl ON brands.brand_id = carstbl.brand_id INNER JOIN carmodel ON carmodel.model_id = carstbl.model_id INNER JOIN colors ON carstbl.color_id = colors.color_id where car_id='".$id."' and car_id not in (select car_id from salestbl)";
                $dataProvider=new CSqlDataProvider($sql, array(
                            'keyField' => 'car_id',
                  //          'totalItemCount'=>$count,
                            'sort'=>array(
                            'attributes'=>array(
                            'car_id',
        ),
    ),
    'pagination'=>array(
        'pageSize'=>10,
    ),
));
                
                $this->render('getcardata',array(
			'id'=>$_REQUEST['id'],
                    'dataProvider' => $dataProvider
		));
                
                
	}
        
                public function actionUpdateAjax()
	{
            $this->layout = false;
		$id = $_REQUEST['id'];      
               Yii::app()->db->createCommand("update carstbl set soled = 1 where car_id = $id")->queryScalar();

                
	}
        
        
                public function actionSetSoledZero()
	{
            $this->layout = false;
		$id = $_REQUEST['id'];      
               Yii::app()->db->createCommand("update carstbl set soled = 0 where car_id = $id")->queryScalar();

                
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

		if(isset($_POST['Salestbl']))
		{
			$model->attributes=$_POST['Salestbl'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->invoice_id));
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
		$dataProvider=new CActiveDataProvider('Salestbl');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Salestbl('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Salestbl']))
			$model->attributes=$_GET['Salestbl'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
        
 
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Salestbl the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Salestbl::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Salestbl $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='salestbl-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}


}
