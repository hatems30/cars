<?php

class CompanysalesreportController extends Controller
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
                //$count=Yii::app()->db->createCommand('SELECT COUNT(*) FROM carstbl')->queryScalar();
                
                 $sql = "SELECT
companysalestbl.invoice_id,
companysalestbl.invoice_date,
brands.brand_name,
carmodel.model_name,
carstbl.chass_no,
companiestbl.company_name
FROM
companysalestbl
INNER JOIN carstbl ON companysalestbl.car_id = carstbl.car_id
INNER JOIN brands ON carstbl.brand_id = brands.brand_id
INNER JOIN carmodel ON carmodel.brand_id = brands.brand_id
INNER JOIN companiestbl ON companysalestbl.company_id = companiestbl.company_id



where companysalestbl.branch_id = $id ";

                
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
