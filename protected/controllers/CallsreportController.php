<?php

class CallsreportController extends Controller
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
                    $empid = $_REQUEST['employee_id'];                    
                    $start_date = $_REQUEST['start_date'];                
                    $end_date = $_REQUEST['end_date'];                   
                //$count=Yii::app()->db->createCommand('SELECT COUNT(*) FROM carstbl')->queryScalar();
                
                 $sql = "SELECT
callstbl.call_id,
callstbl.call_date,
callstbl.call_time,
callstbl.car_data,
callstbl.customer,
callstbl.mobile,
empcall.employee_name AS call_man,
empserv.employee_name AS service_man,
callstbl.area,
callstbl.notes,
callstbl.`status`,
howtbl.how_name
FROM
callstbl
INNER JOIN employees AS empcall ON empcall.employee_id = callstbl.call_employee_id
INNER JOIN employees AS empserv ON empserv.employee_id = callstbl.service_employee_id
INNER JOIN howtbl ON callstbl.how_id = howtbl.how_id
where callstbl.branch_id = $id  
and callstbl.call_date >= '$start_date' and callstbl.call_date <= '$end_date' ";               
                 if(!empty($_REQUEST['employee_id']))
                    {
                     $sql.=" and callstbl.service_employee_id ='{$_REQUEST['employee_id']}'";                     
                    }  
                $dataProvider=new CSqlDataProvider($sql, 
                            array(
                           'keyField' => 'call_id',
                           // 'totalItemCount'=>$count,
                            'sort'=>array(
                            'attributes'=>array(
                            'callstbl.call_id',
        ),
    ),
    'pagination'=>array(
        'pageSize'=>1000,
    ),
));
                

                $this->render('getdata',array('dataProvider' => $dataProvider));
                		
	}
        
}
