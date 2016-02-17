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

        public function actionGetcode()
	{
        	                  
            $this->layout = false;           
              $this->render('getcode');	
	}        

        public function actionGetData()
	{
            $this->layout = false;
		$id = $_REQUEST['id'];            
                
//-----------------------------

                $sql = "delete from carstocktbl";
                yii::app()->db->createCommand($sql)->execute();
                $sql="SELECT
carstbl.car_id,
brands.brand_name,
carmodel.model_name,
carcode.code_name,
carstbl.car_year,
carstbl.chass_no,
carstbl.off_price,
carstbl.sale_price,
colors.color_name
FROM
carstbl
INNER JOIN brands ON carstbl.brand_id = brands.brand_id
INNER JOIN carmodel ON carmodel.brand_id = brands.brand_id AND carmodel.model_id = carstbl.model_id
INNER JOIN carcode ON carcode.brand_id = brands.brand_id AND carcode.model_id = carmodel.model_id AND carstbl.code_id = carcode.code_id
INNER JOIN colors ON carstbl.color_id = colors.color_id
WHERE 
carstbl.branch_id = $id and 
carstbl.car_id not in 
(
SELECT salestbl.car_id from salestbl 
UNION select dealersalestbl.car_id from dealersalestbl
UNION select companysalestbl.car_id from companysalestbl
UNION select innersaletbl.car_id from innersaletbl 
)
";                                    
                    $all=Yii::app()->db->createCommand($sql)->queryAll();                 
                    foreach ($all as $k=>$v)
                    {
                       $carid = $all[$k]['car_id'] ;
                       $chassno = $all[$k]['chass_no'] ;
                       $saleprice = $all[$k]['sale_price'] ;
                       $offprice = $all[$k]['off_price'] ;
                       $sql_insert = "insert into carstocktbl(car_id , chass_no , sale_price , off_price) values ($carid , $chassno , $saleprice , $offprice )";
                       yii::app()->db->createCommand($sql_insert)->execute();
                    }                       
$sql_inner = "SELECT DISTINCT innersaletbl.car_id from innersaletbl where innersaletbl.car_id not in (SELECT salestbl.car_id from salestbl UNION select dealersalestbl.car_id from dealersalestbl UNION select companysalestbl.car_id from companysalestbl) ";     
                    $all_inner=Yii::app()->db->createCommand($sql_inner)->queryAll();                 
                    foreach ($all_inner as $k1=>$v1)
                    {
                        $carid = $all_inner[$k1]['car_id'] ; 
                        $sql = "SELECT if ((select innersaletbl.to_branch_id from innersaletbl where trs_id in (select MAX(innersaletbl.trs_id) from innersaletbl where car_id = $carid GROUP BY car_id))= $id , (SELECT  carstbl.chass_no from carstbl where carstbl.car_id = $carid LIMIT 1) , 'false') as 'chass_no' ";
                        $all_dtl =Yii::app()->db->createCommand($sql)->queryAll();                          
                          if ($all_dtl[0]['chass_no'] != 'false')
                          {
                            $carid = 00 ;
                            $chassno = $all_dtl[0]['chass_no'] ;
                            $saleprice = 00 ;
                            $offprice = 00 ;
                            $sql_insert = "insert into carstocktbl(car_id , chass_no , sale_price , off_price) values ($carid , $chassno , $saleprice , $offprice )";
                            yii::app()->db->createCommand($sql_insert)->execute();
                          }                             
                    }
                    
//-------------------------                
                $sql1="SELECT
carstbl.car_id,
brands.brand_name,
carmodel.model_name,
carstbl.code_id,
carcode.code_name,
colors.color_name,
carstbl.car_year,
carstbl.chass_no,
stores.store_name,
carstbl.sale_price,
carstbl.off_price,
carstbl.deposit_type,
carstbl.deposit_name
FROM
carstbl
INNER JOIN brands ON carstbl.brand_id = brands.brand_id
INNER JOIN carmodel ON carmodel.brand_id = brands.brand_id AND carstbl.model_id = carmodel.model_id
INNER JOIN carcode ON carcode.brand_id = brands.brand_id AND carcode.model_id = carmodel.model_id AND carstbl.code_id = carcode.code_id
INNER JOIN colors ON carstbl.color_id = colors.color_id
INNER JOIN stores ON carstbl.store_id = stores.store_id 
where carstbl.chass_no in (select carstocktbl.chass_no from carstocktbl)";                

                  if(!empty($_REQUEST['brand_id']))
                    {
                     $sql1.=" and carstbl.brand_id ='{$_REQUEST['brand_id']}'";                     
                    }                
                              
                 if(!empty($_REQUEST['model_id']))
                    {
                     $sql1.=" and carstbl.model_id ='{$_REQUEST['model_id']}'";                     
                    }                                                            
                    $all=Yii::app()->db->createCommand($sql1)->queryAll();                 
                    $params=array();
                    if (isset($_REQUEST['id']))
                    {
                    $params['id']= $_REQUEST['id'];
                    }
                    if (isset($_REQUEST['brand_id']))
                    {
                    $params['brand_id']= $_REQUEST['brand_id'];
                    }
                    if (isset($_REQUEST['model_id']))
                    {
                    $params['model_id']= $_REQUEST['model_id'];
                    }                    
                $dataProvider=new CSqlDataProvider($sql, array(
                            'keyField' => 'car_id',
                             'totalItemCount'=>count($all),
                            'sort'=>array('attributes'=>array('car_id',),),
                         //   'enablePagination'=>true,
                            'pagination'=>array('pageSize'=>10,'params'=>$params),
));                
                $this->render('getdata',array('dataProvider' => $dataProvider));                                
	}        
}
