<?php

class PremiumsalesreportController extends Controller
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
     //and salestbl.finance_type = 'قسط مباشر'           
                 $sql = "SELECT
salestbl.invoice_id,
salestbl.invoice_date,
brands.brand_name,
carmodel.model_name,
carstbl.chass_no,
salestbl.car_price,
salestbl.downpayment,
salestbl.monthly_premium,
salestbl.months_count,
salestbl.interest_rate,
inscomps.insurance_comp_name,
salestbl.insurance_type,
salestbl.insurance_amount,
salestbl.insurance_rate,
customers.customer_name
FROM
carstbl
INNER JOIN salestbl ON salestbl.car_id = carstbl.car_id
INNER JOIN brands ON carstbl.brand_id = brands.brand_id 
INNER JOIN carmodel ON carmodel.brand_id = brands.brand_id AND carmodel.model_id = carstbl.model_id
INNER JOIN inscomps ON salestbl.insurance_comp_id = inscomps.insurance_comp_id
INNER JOIN customers ON salestbl.customer_id = customers.customer_id
where salestbl.branch_id = $id and salestbl.finance_type = 'قسط مباشر'
and salestbl.invoice_date > '$date_from' and salestbl.invoice_date < '$date_to'";
                 
                $dataProvider=new CSqlDataProvider($sql, 
                            array(
                           'keyField' => 'invoice_id',
                           // 'totalItemCount'=>$count,
                            'sort'=>array(
                            'attributes'=>array(
                            'salestbl.invoice_id',
        ),
    ),
    'pagination'=>array(
        'pageSize'=>10,
    ),
));
                
                $this->render('getdata',array('id'=>$_REQUEST['id'],'dataProvider' => $dataProvider));
                		
	}
        
}
