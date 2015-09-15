<?php

class CarstockController extends Controller
{
	
	public $layout='//layouts/column1';


	public function actionView()
	{
		$this->render('index');
		
	}


        

        public function actionGetData()
	{
            $this->layout = false;
		$id = $_REQUEST['id'];            
                //$count=Yii::app()->db->createCommand('SELECT COUNT(*) FROM carstbl')->queryScalar();

                $sql="SELECT
carstbl.car_id,
brands.brand_name,
carmodel.model_name,
carcode.code_name,
colors.color_name,
carstbl.car_year,
carstbl.chass_no,
stores.store_name,
carstbl.off_price
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
and carstbl.car_id not in (select car_id from innersaletbl where innersaletbl.from_branch_id = $id)
or carstbl.car_id in (select car_id from innersaletbl where innersaletbl.to_branch_id = $id)";
              /*  
                if(!empty($_POST['x'])){
                     $sql.=" and id1='{$_POST['x']}'";
                }
                     if(!empty($_POST['x1'])){
                     $sql.=" and id2='{$_POST['x2']}'";
                }
                     if(!empty($_POST['x3'])){
                     $sql.=" and id3='{$_POST['x3']}'";
                }
               خلاص
                */        
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
