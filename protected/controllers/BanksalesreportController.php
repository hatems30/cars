<?php

class BanksalesreportController extends Controller
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
salestbl.invoice_id,
salestbl.invoice_date,
brands.brand_name,
carmodel.model_name,
carstbl.chass_no,
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
INNER JOIN carmodel ON carmodel.brand_id = brands.brand_id
INNER JOIN customers ON salestbl.customer_id = customers.customer_id
INNER JOIN inscomps ON salestbl.insurance_comp_id = inscomps.insurance_comp_id
INNER JOIN banks ON salestbl.bank_id = banks.bank_id


where salestbl.branch_id = $id   and salestbl.finance_type = 'بنك'
and salestbl.invoice_date >= '$date_from' and salestbl.invoice_date <= '$date_to' ";
                if(!empty($_REQUEST['bank_id']))
                    {
                     $sql.=" and salestbl.bank_id ='{$_REQUEST['bank_id']}'";
                    }                                  
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
