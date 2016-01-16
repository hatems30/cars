<?php

class ComplaintsreportController extends Controller
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
complaintstbl.complaint_id,
complaintstbl.complaint_date,
employees.employee_name,
complaintstbl.customer_name,
complaintstbl.car_data,
complaintstbl.complaint_detail,
complaintstbl.notes
FROM
complaintstbl
INNER JOIN employees ON complaintstbl.employee_id = employees.employee_id
where complaintstbl.branch_id = $id
and complaintstbl.complaint_date >= '$start_date' and complaintstbl.complaint_date <= '$end_date' ";    
                  if(!empty($_REQUEST['employee_id']))
                    {
                     $sql.=" and complaintstbl.employee_id ='{$_REQUEST['employee_id']}'";                     
                    } 
                $dataProvider=new CSqlDataProvider($sql, 
                            array(
                           'keyField' => 'complaint_id',
                           // 'totalItemCount'=>$count,
                            'sort'=>array(
                            'attributes'=>array(
                            'complaintstbl.complaint_id',
        ),
    ),
    'pagination'=>array(
        'pageSize'=>10,
    ),
));
                
            
                $this->render('getdata',array('dataProvider' => $dataProvider));
                		
	}
        
}
