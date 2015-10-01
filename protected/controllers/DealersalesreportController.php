<?php

class DealersalesreportController extends Controller
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
dealersalestbl.invoice_id,
dealersalestbl.invoice_date,
brands.brand_name,
carmodel.model_name,
carstbl.chass_no,
dealerstbl.dealer_name
FROM
dealersalestbl
INNER JOIN carstbl ON dealersalestbl.car_id = carstbl.car_id
INNER JOIN brands ON carstbl.brand_id = brands.brand_id 
INNER JOIN carmodel ON carmodel.brand_id = brands.brand_id AND carmodel.model_id = carstbl.model_id
INNER JOIN dealerstbl ON dealersalestbl.dealer_id = dealerstbl.dealer_id



where dealersalestbl.branch_id = $id
and dealersalestbl.invoice_date >= '$date_from' and dealersalestbl.invoice_date <= '$date_to' ";
                 if(!empty($_REQUEST['dealer_id']))
                    {
                     $sql.=" and dealersalestbl.dealer_id ='{$_REQUEST['dealer_id']}'";
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
