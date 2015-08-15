<?php

class SalesreportController extends Controller
{
	
	public $layout='//layouts/column2';


	public function actionView()
	{
		$this->render('index');
		
	}


        

	public function actionGetdata()
	{
	            $this->layout = false;
		$id = $_REQUEST['id'];                            
                //$count=Yii::app()->db->createCommand('SELECT COUNT(*) FROM carstbl')->queryScalar();
                
                 $sql = "SELECT
salestbl.invoice_id,
salestbl.invoice_date,
brands.brand_name,
carmodel.model_name,
carstbl.chass_no,
customers.customer_name
FROM
salestbl
INNER JOIN carstbl ON carstbl.car_id = salestbl.car_id
INNER JOIN brands ON brands.brand_id = carstbl.brand_id
INNER JOIN carmodel ON carmodel.model_id = carstbl.model_id
INNER JOIN customers ON salestbl.customer_id = customers.customer_id where salestbl.branch_id = $id ";

                
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
