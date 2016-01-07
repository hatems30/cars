<?php

class BankoffersreportController extends Controller
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
                    $date_from = $_REQUEST['date_from'];
                    $date_to = $_REQUEST['date_to']; 
                //$count=Yii::app()->db->createCommand('SELECT COUNT(*) FROM carstbl')->queryScalar();
                
                 $sql = "SELECT
bankofferstbl.offer_id,
bankofferstbl.offer_date,
brands.brand_name,
carmodel.model_name,
carcode.code_name,
employees.employee_name,
banks.bank_name,
customers.customer_name,
bankofferstbl.banker,
bankofferstbl.offer_status
FROM
bankofferstbl
INNER JOIN brands ON bankofferstbl.brand_id = brands.brand_id
INNER JOIN carmodel ON carmodel.brand_id = brands.brand_id AND bankofferstbl.model_id = carmodel.model_id
INNER JOIN carcode ON carcode.brand_id = brands.brand_id AND carcode.model_id = carmodel.model_id AND bankofferstbl.code_id = carcode.code_id
INNER JOIN banks ON bankofferstbl.bank_id = banks.bank_id
INNER JOIN employees ON bankofferstbl.employee_id = employees.employee_id
INNER JOIN customers ON bankofferstbl.customer_id = customers.customer_id

where bankofferstbl.branch_id = $id
and bankofferstbl.offer_date >= '$date_from' and bankofferstbl.offer_date <= '$date_to'";
              
                 if(!empty($_REQUEST['bank_id']))
                    {
                     $sql.=" and bankofferstbl.bank_id ='{$_REQUEST['bank_id']}'";
                    } 
                    
                if(!empty($_REQUEST['status']))
                    {
                     $sql.=" and bankofferstbl.offer_status ='{$_REQUEST['status']}'";
                    } 
                                                                  
                    $all=Yii::app()->db->createCommand($sql)->queryAll();                 
                    $params=array();
                    $params['id'] = $_REQUEST['id'];
                    $params['date_from'] = $_REQUEST['date_from'];
                    $params['date_to']   =$_REQUEST['date_to'];                
                    $params['status']   =$_REQUEST['status'];    
                    if (isset($_REQUEST['bank_id']))
                    {
                    $params['bank_id']= $_REQUEST['bank_id'];
                    }                       
 
                $dataProvider=new CSqlDataProvider($sql, 
                            array(
                           'keyField' => 'offer_id',
                           'totalItemCount'=>count($all),
                            'sort'=>array('attributes'=>array('bankofferstbl.offer_id',),),
                            'pagination'=>array('pageSize'=>10,'params'=>$params),
));
                
                $this->render('getdata',array('dataProvider' => $dataProvider));
                		
	}
        
}
