<?php

class BuyreportController extends Controller
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
                $start_date = $_REQUEST['start_date'];
                $end_date = $_REQUEST['end_date'];                
                //$count=Yii::app()->db->createCommand('SELECT COUNT(*) FROM carstbl')->queryScalar();
                
                 $sql = "SELECT
carstbl.car_id,
brands.brand_name,
carmodel.model_name,
carcode.code_name,
colors.color_name,
carstbl.car_year,
carstbl.chass_no,
carstbl.motor_no,
carstbl.add_date,
carstbl.cost_price,
carstbl.off_price
FROM
carstbl
INNER JOIN brands ON carstbl.brand_id = brands.brand_id
INNER JOIN carmodel ON carmodel.brand_id = brands.brand_id AND carmodel.model_id = carstbl.model_id
INNER JOIN carcode ON carcode.brand_id = brands.brand_id AND carcode.model_id = carmodel.model_id AND carstbl.code_id = carcode.code_id
INNER JOIN colors ON carstbl.color_id = colors.color_id
where carstbl.branch_id = $id
and carstbl.add_date >= '$start_date' and carstbl.add_date <= '$end_date' ";
                 
                 if(!empty($_REQUEST['supplier_id']))
                    {
                     $sql.=" and carstbl.supplier_id ='{$_REQUEST['supplier_id']}'";
                    }                                         
                
                $dataProvider=new CSqlDataProvider($sql, 
                            array(
                           'keyField' => 'car_id',
                           // 'totalItemCount'=>$count,
                            'sort'=>array(
                            'attributes'=>array(
                            'carstbl.car_id',
        ),
    ),
   'pagination'=>array('pageSize'=>10,),
));
                
                $this->render('getdata',array('id'=>$_REQUEST['id'],'dataProvider' => $dataProvider));
                		
	}
        
}
