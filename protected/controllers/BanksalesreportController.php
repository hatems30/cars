<?php

class BanksalesreportController extends Controller
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
salestbl.invoice_id,
salestbl.invoice_date,
brands.brand_name,
carmodel.model_name,
carstbl.chass_no,
salestbl.car_price,
banks.bank_name,
salestbl.transfer_amount,
salestbl.bank_down_amount,
salestbl.expenses,
inscomps.insurance_comp_name,
salestbl.insurance_type,
salestbl.insurance_amount,
salestbl.insurance_rate,
customers.customer_name
FROM
salestbl
INNER JOIN carstbl ON salestbl.car_id = carstbl.car_id
INNER JOIN brands ON carstbl.brand_id = brands.brand_id
INNER JOIN carmodel ON carmodel.brand_id = brands.brand_id AND carmodel.model_id = carstbl.model_id
INNER JOIN customers ON salestbl.customer_id = customers.customer_id
INNER JOIN inscomps ON salestbl.insurance_comp_id = inscomps.insurance_comp_id
INNER JOIN banks ON salestbl.bank_id = banks.bank_id
where salestbl.branch_id = $id   and salestbl.finance_type = 'بنك'
and salestbl.invoice_date >= '$date_from' and salestbl.invoice_date <= '$date_to' ";
                if(!empty($_REQUEST['bank_id']))
                    {
                     $sql.=" and salestbl.bank_id ='{$_REQUEST['bank_id']}'";
                    }  
                    
                    $all=Yii::app()->db->createCommand($sql)->queryAll();                 
                    $params=array();
                    $params['id'] = $_REQUEST['id'];
                    $params['date_from'] = $_REQUEST['date_from'];
                    $params['date_to']   =$_REQUEST['date_to']     ;                
                    if (isset($_REQUEST['bank_id']))
                    {
                    $params['band_id']= $_REQUEST['bank_id'];
                    }
                    
                $dataProvider=new CSqlDataProvider($sql, 
                            array(
                            'keyField' => 'invoice_id',
                            'totalItemCount'=>count($all),
                            'sort'=>array(
                            'attributes'=>array('salestbl.invoice_id',),),
                            'pagination'=>array('pageSize'=>10,'params'=>$params),
));
                
                $this->render('getdata',array('dataProvider' => $dataProvider));   
                		
	}
        
}
