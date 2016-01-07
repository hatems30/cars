<?php

class BuyreportController extends Controller
{
	
	public $layout='//layouts/column1';


	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}
	public function accessRules()
	{
            $cont = Yii::app()->controller->id;
            $user_name = Yii::app()->user->username;
            $sql = "SELECT userpertbl.per_type
                    FROM userpertbl
                    INNER JOIN `user` ON userpertbl.user_id = `user`.id
                    INNER JOIN controllers ON userpertbl.controller_id = controllers.controller_id 
                    where `user`.username= '$user_name' and controllers.controller_code_name ='$cont' limit 1";
            $connection = Yii::app()->db;   // assuming you have configured a "db" connection
            $command = $connection->createCommand($sql);
            $data = $command->queryAll($sql);
            if (isset($data[0]['per_type']) && !empty($data[0]['per_type'])) 
                {            
                    $per_type = $data[0]['per_type'];
                    if ($per_type == 'ReadWrite') 
                        {
                            return array(
                                        array('allow', // allow authenticated user to perform 'create' and 'update' actions
                                              'actions' => array('create', 'update', 'admin', 'delete', 'view','Getdata'),
                                              'users' => array('@'),),
                                        array('deny', // deny all users
                                              'users' => array('*'),),
                                        );
                        } 
                    elseif ($per_type == 'Read') 
                        {
                           return array(
                                        array('allow', // allow authenticated user to perform 'create' and 'update' actions
                                              'actions' => array('view', 'admin'),
                                              'users' => array('@'),),
                                        array('deny', // deny all users
                                              'users' => array('*'),),
                                        );
                        }
                } 
            else 
                {
                    return array(
                                array('deny', // deny all users
                                      'users' => array('@'),),
                                );
                }
        }
        
	public function actionView()
	{
		$this->render('index');
		
	}


        

	public function actionGetdata()
	{
	            $this->layout = false;
		$id = $_REQUEST['id'];                    
                $start_date = $_REQUEST['start_date'];
                $end_date = $_REQUEST['end_date'];                
                //$count=Yii::app()->db->createCommand('SELECT COUNT(*) FROM carstbl')->queryScalar();
                
                 $sql = "SELECT
carstbl.car_id,
brands.brand_name,
carmodel.model_name,
carcode.code_name,
colors.color_name,
carstbl.car_year,
carstbl.chass_no,
carstbl.motor_no,
carstbl.add_date,
carstbl.cost_price,
carstbl.off_price
FROM
carstbl
INNER JOIN brands ON carstbl.brand_id = brands.brand_id
INNER JOIN carmodel ON carmodel.brand_id = brands.brand_id AND carmodel.model_id = carstbl.model_id
INNER JOIN carcode ON carcode.brand_id = brands.brand_id AND carcode.model_id = carmodel.model_id AND carstbl.code_id = carcode.code_id
INNER JOIN colors ON carstbl.color_id = colors.color_id
where carstbl.branch_id = $id
and carstbl.add_date >= '$start_date' and carstbl.add_date <= '$end_date' ";
                 
                 if(!empty($_REQUEST['supplier_id']))
                    {
                     $sql.=" and carstbl.supplier_id ='{$_REQUEST['supplier_id']}'";
                    }       
                    
                    $all=Yii::app()->db->createCommand($sql)->queryAll();                 
                    $params=array();
                    if (isset($_REQUEST['id']))
                    {
                        $params['id']= $_REQUEST['id'];
                    }                    
                    if (isset($_REQUEST['supplier_id']))
                    {
                        $params['supplier_id']= $_REQUEST['supplier_id'];
                    }  
                    if (isset($_REQUEST['start_date']))
                    {
                        $params['start_date']= $_REQUEST['start_date'];
                    }  
                    if (isset($_REQUEST['end_date']))
                    {
                        $params['end_date']= $_REQUEST['end_date'];
                    }                      
                $dataProvider=new CSqlDataProvider($sql, array(
                            'keyField' => 'car_id',
                             'totalItemCount'=>count($all),
                            'sort'=>array('attributes'=>array('car_id',),),
                         //   'enablePagination'=>true,
                            'pagination'=>array('pageSize'=>10,'params'=>$params),
                    )); 
                
                            $this->render('getdata',array('dataProvider' => $dataProvider));                                
                		
	}
        
}
