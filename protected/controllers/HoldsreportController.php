<?php

class HoldsreportController extends Controller
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
holdtbl.hold_id,
holdtbl.hold_date,
brands.brand_name,
carmodel.model_name,
carcode.code_name,
employees.employee_name,
customers.customer_name,
carstbl.chass_no,
holdtbl.sale_type,
holdtbl.price,
holdtbl.hold_amount
FROM
holdtbl
INNER JOIN carstbl ON holdtbl.car_id = carstbl.car_id
INNER JOIN brands ON carstbl.brand_id = brands.brand_id
INNER JOIN carmodel ON carmodel.brand_id = brands.brand_id
INNER JOIN carcode ON carcode.brand_id = brands.brand_id AND carcode.model_id = carmodel.model_id AND carstbl.code_id = carcode.code_id
INNER JOIN employees ON holdtbl.employee_id = employees.employee_id
INNER JOIN customers ON holdtbl.customer_id = customers.customer_id

where holdtbl.branch_id = $id
 and holdtbl.hold_date >= '$date_from' and holdtbl.hold_date <= '$date_to'";

                
                $dataProvider=new CSqlDataProvider($sql, 
                            array(
                           'keyField' => 'hold_id',
                           // 'totalItemCount'=>$count,
                            'sort'=>array(
                            'attributes'=>array(
                            'salestbl.hold_id',
        ),
    ),
    'pagination'=>array(
        'pageSize'=>10,
    ),
));
                
                $this->render('getdata',array('id'=>$_REQUEST['id'],'dataProvider' => $dataProvider));
                		
	}
        
}
