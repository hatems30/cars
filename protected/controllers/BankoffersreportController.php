<?php

class BankoffersreportController extends Controller
{
	
	public $layout='//layouts/column1';


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
                
              
                
                    
                
                $dataProvider=new CSqlDataProvider($sql, 
                            array(
                           'keyField' => 'offer_id',
                           // 'totalItemCount'=>$count,
                            'sort'=>array(
                            'attributes'=>array(
                            'bankofferstbl.offer_id',
        ),
    ),
    'pagination'=>array(
        'pageSize'=>10,
    ),
));
                
                $this->render('getdata',array('id'=>$_REQUEST['id'],'dataProvider' => $dataProvider));
                		
	}
        
}
