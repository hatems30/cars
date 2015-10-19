<?php

class CarstockController extends Controller
{
	
	public $layout='//layouts/column1';


	public function actionView()
	{
		$this->render('index');
		
	}

        public function actionGetmodels()
	{
        	                  
            $this->layout = false;
		$id = $_REQUEST['id'];            
                //$count=Yii::app()->db->createCommand('SELECT COUNT(*) FROM carstbl')->queryScalar();

              $sql="SELECT model_id , model_name from carmodel where brand_id = $id ";
                
              $connection=Yii::app()->db;   // assuming you have configured a "db" connection

              $command=$connection->createCommand($sql);
              $data = $command->queryAll($sql);

              $this->render('getmodels',array(
			'id'=>$_REQUEST['id'],
			//'model_id'=>$_REQUEST['model_id'],
                         'data' => $data
		));	
	}        

        

        public function actionGetData()
	{
            $this->layout = false;
		$id = $_REQUEST['id'];            
                //$count=Yii::app()->db->createCommand('SELECT COUNT(*) FROM carstbl')->queryScalar();

                $sql1="SELECT
carstbl.car_id,
brands.brand_name,
carmodel.model_name,
carcode.code_name,
colors.color_name,
carstbl.car_year,
carstbl.chass_no,
stores.store_name,
carstbl.sale_price
FROM
carstbl
INNER JOIN brands ON carstbl.brand_id = brands.brand_id
INNER JOIN carmodel ON carmodel.brand_id = brands.brand_id AND carstbl.model_id = carmodel.model_id
INNER JOIN carcode ON carcode.brand_id = brands.brand_id AND carcode.model_id = carmodel.model_id AND carstbl.code_id = carcode.code_id
INNER JOIN colors ON carstbl.color_id = colors.color_id
INNER JOIN stores ON carstbl.store_id = stores.store_id 

where carstbl.branch_id=$id
   
and carstbl.car_id not in (select car_id from salestbl) 
and carstbl.car_id not in (select car_id from dealersalestbl) 
and carstbl.car_id not in (select car_id from companysalestbl)
and carstbl.car_id not in (select car_id from holdtbl)
and carstbl.car_id not in (select car_id from innersaletbl where innersaletbl.from_branch_id = $id)";
                
$sql2="or carstbl.car_id in (SELECT innersaletbl.car_id FROM innersaletbl INNER JOIN carstbl ON innersaletbl.car_id = carstbl.car_id
where innersaletbl.to_branch_id = $id
and carstbl.car_id not in (select car_id from salestbl) 
and carstbl.car_id not in (select car_id from dealersalestbl) 
and carstbl.car_id not in (select car_id from companysalestbl)
and carstbl.car_id not in (select car_id from holdtbl)
and carstbl.car_id not in (select car_id from innersaletbl where innersaletbl.from_branch_id = $id))";                

                  if(!empty($_REQUEST['brand_id']))
                    {
                     $sql1.=" and carstbl.brand_id ='{$_REQUEST['brand_id']}'";
                     $sql2.=" and carstbl.brand_id ='{$_REQUEST['brand_id']}'";
                    }                
                              
                 if(!empty($_REQUEST['model_id']))
                    {
                     $sql1.=" and carstbl.model_id ='{$_REQUEST['model_id']}'";
                     $sql2.=" and carstbl.model_id ='{$_REQUEST['model_id']}'";
                    } 
                   
                    
                    $sql = $sql1.$sql2;
     
                $dataProvider=new CSqlDataProvider($sql, array(
                            'keyField' => 'car_id',
                  //          'totalItemCount'=>$count,
                            'sort'=>array(
                            'attributes'=>array(
                            'car_id',
        ),
    ),
    'pagination'=>array(
        'pageSize'=>10,
    ),
));
                
                $this->render('getdata',array(
			'id'=>$_REQUEST['id'],
                    'dataProvider' => $dataProvider
		));
                
                
	}
        
}
