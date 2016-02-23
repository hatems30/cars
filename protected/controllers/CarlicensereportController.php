<?php

class CarlicensereportController extends Controller
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
                                              'actions' => array('create', 'update', 'admin', 'delete', 'view','Getdata' , 'Getemployees'),
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
       public function actionGetemployees()
	{        	                  
              $this->layout = false;
              $id = $_REQUEST['id'];                          
              $sql="SELECT employee_id , employee_name from employees where branch_id = $id and employee_type = 'تراخيص' ";                
              $connection=Yii::app()->db;
              $command=$connection->createCommand($sql);
              $data = $command->queryAll($sql);
              $this->render('getemployees',array('data' => $data));	
	} 
	public function actionGetdata()
	{
	            $this->layout = false;
		    $id = $_REQUEST['id'];    
                    $emp_id = $_REQUEST['emp_id'];    
                    $date_from = $_REQUEST['date_from'];
                    $date_to = $_REQUEST['date_to'];                                 
                    $sql = "
SELECT
licensetbl.license_id,
licensetbl.license_date,
employees.employee_name,
traffictbl.traffic_name,
brands.brand_name,
carmodel.model_name,
carcode.code_name,
carstbl.chass_no
FROM
licensetbl
INNER JOIN traffictbl ON licensetbl.traffic_id = traffictbl.traffic_id
INNER JOIN employees ON licensetbl.employee_id = employees.employee_id
INNER JOIN carstbl ON licensetbl.car_id = carstbl.car_id
INNER JOIN brands ON carstbl.brand_id = brands.brand_id
INNER JOIN carmodel ON carmodel.brand_id = brands.brand_id
INNER JOIN carcode ON carcode.brand_id = brands.brand_id AND carcode.model_id = carmodel.model_id AND carstbl.code_id = carcode.code_id      
where
licensetbl.branch_id = $id and
licensetbl.license_date >= '$date_from' and licensetbl.license_date <= '$date_to'
";                                           
                    if(!empty($_REQUEST['emp_id']))
                    {
                     $sql.=" and licensetbl.employee_id ='{$_REQUEST['emp_id']}'";                     
                    }    
                    $all=Yii::app()->db->createCommand($sql)->queryAll();     
                    foreach ($all as $k=>$v)
                    {
                      $params[$k]['license_id']= $all[$k]['license_id'];
                      $params[$k]['license_date']= $all[$k]['license_date'];
                      $params[$k]['employee_name']= $all[$k]['employee_name'];
                      $params[$k]['traffic_name']= $all[$k]['traffic_name'];                       
                      $params[$k]['brand_name']= $all[$k]['brand_name']; 
                      $params[$k]['model_name']= $all[$k]['model_name']; 
                      $params[$k]['code_name']= $all[$k]['code_name'];                                             
                      $params[$k]['chass_no']= $all[$k]['chass_no'];                                                
                    }                    
                    if (empty($all))
                    {
                        echo "<div style='text-align: center'><b><font size='5' color='red'>عفوا لا يوجد بيانات </font></b></div> " ;
                        exit;
                    }
                    else {
                            $this->render('getdata',array('params' => $params));                   	      
                         }
                    
        }
}
