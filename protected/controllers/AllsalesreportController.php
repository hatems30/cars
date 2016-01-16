<?php

class AllsalesreportController extends Controller
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
                    $sql = "
                        
SELECT
salestbl.invoice_id,
salestbl.invoice_date,
salestbl.finance_type as sales_type ,
customers.customer_name,
employees.employee_name,
brands.brand_name,
carmodel.model_name,
carcode.code_name,
carstbl.chass_no,
salestbl.car_price , 
customers.mobile
FROM
salestbl
INNER JOIN employees ON salestbl.employee_id = employees.employee_id
INNER JOIN customers ON salestbl.customer_id = customers.customer_id
INNER JOIN carstbl ON carstbl.car_id = salestbl.car_id
INNER JOIN brands ON carstbl.brand_id = brands.brand_id
INNER JOIN carmodel ON carmodel.brand_id = brands.brand_id AND carstbl.model_id = carmodel.model_id
INNER JOIN carcode ON carcode.brand_id = brands.brand_id AND carcode.model_id = carmodel.model_id AND carstbl.code_id = carcode.code_id
where 
salestbl.branch_id = $id and 
salestbl.invoice_date >= '$date_from' and salestbl.invoice_date <= '$date_to'
    
UNION
SELECT
companysalestbl.invoice_id,
companysalestbl.invoice_date, 
'comp' as sales_type ,
companiestbl.company_name,
employees.employee_name,
brands.brand_name,
carmodel.model_name,
carcode.code_name,
carstbl.chass_no,
companysalestbl.price,
'' as mobile
FROM
companysalestbl
INNER JOIN carstbl ON companysalestbl.car_id = carstbl.car_id
INNER JOIN employees ON companysalestbl.employee_id = employees.employee_id
INNER JOIN companiestbl ON companysalestbl.company_id = companiestbl.company_id
INNER JOIN brands ON carstbl.brand_id = brands.brand_id
INNER JOIN carmodel ON carmodel.brand_id = brands.brand_id AND carstbl.model_id = carmodel.model_id
INNER JOIN carcode ON carcode.brand_id = brands.brand_id AND carcode.model_id = carmodel.model_id AND carstbl.code_id = carcode.code_id
where
companysalestbl.branch_id = $id and 
companysalestbl.invoice_date >= '$date_from' and companysalestbl.invoice_date <= '$date_to'
    
union 
SELECT
dealersalestbl.invoice_id,
dealersalestbl.invoice_date,
'dealer' as sales_type ,
dealerstbl.dealer_name,
employees.employee_name,
brands.brand_name,
carmodel.model_name,
carcode.code_name,
carstbl.chass_no,
dealersalestbl.price,
'' as mobile
FROM
dealersalestbl
INNER JOIN carstbl ON dealersalestbl.car_id = carstbl.car_id
INNER JOIN dealerstbl ON dealersalestbl.dealer_id = dealerstbl.dealer_id
INNER JOIN brands ON carstbl.brand_id = brands.brand_id
INNER JOIN carmodel ON carmodel.brand_id = brands.brand_id AND carstbl.model_id = carmodel.model_id
INNER JOIN carcode ON carcode.brand_id = brands.brand_id AND carcode.model_id = carmodel.model_id AND carstbl.code_id = carcode.code_id
INNER JOIN employees ON dealersalestbl.employee_id = employees.employee_id
where
dealersalestbl.branch_id = $id and 
dealersalestbl.invoice_date >= '$date_from' and dealersalestbl.invoice_date <= '$date_to'

union
SELECT
innersaletbl.trs_id as invoice_id ,
innersaletbl.trs_date as invoice_date ,
'inner' as sales_type ,
branchs.branch_name ,
employees.employee_name,
brands.brand_name,
carmodel.model_name,
carcode.code_name,
carstbl.chass_no,
innersaletbl.price,
'' as mobile
FROM
innersaletbl
INNER JOIN carstbl ON innersaletbl.car_id = carstbl.car_id
INNER JOIN employees ON innersaletbl.employee_id = employees.employee_id
INNER JOIN branchs ON innersaletbl.to_branch_id = branchs.branch_id
INNER JOIN brands ON carstbl.brand_id = brands.brand_id
INNER JOIN carmodel ON carmodel.brand_id = brands.brand_id AND carmodel.model_id = carstbl.model_id
INNER JOIN carcode ON carcode.brand_id = brands.brand_id AND carcode.model_id = carmodel.model_id AND carstbl.code_id = carcode.code_id
where
innersaletbl.from_branch_id = $id and 
innersaletbl.trs_date >= '$date_from' and innersaletbl.trs_date <= '$date_to'
order by 2
";                                                                  
                    $all=Yii::app()->db->createCommand($sql)->queryAll();                     
                    foreach ($all as $k=>$v)
                    {
                      $params[$k]['invoice_id']= $all[$k]['invoice_id'];
                      $params[$k]['invoice_date']= $all[$k]['invoice_date'];
                      $params[$k]['sales_type']= $all[$k]['sales_type'];
                      $params[$k]['customer_name']= $all[$k]['customer_name']; 
                      $params[$k]['employee_name']= $all[$k]['employee_name']; 
                      $params[$k]['brand_name']= $all[$k]['brand_name']; 
                      $params[$k]['model_name']= $all[$k]['model_name']; 
                      $params[$k]['code_name']= $all[$k]['code_name'];                                             
                      $params[$k]['chass_no']= $all[$k]['chass_no'];   
                      $params[$k]['car_price']= $all[$k]['car_price'];      
                      $params[$k]['mobile']= $all[$k]['mobile'];  
                      
                    }                    
                    $this->render('getdata',array('params' => $params));                   	      
        }
}
