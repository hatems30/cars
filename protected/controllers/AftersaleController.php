<?php

class aftersaleController extends Controller
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
                $sql=" SELECT carstbl.car_id, carstbl.chass_no, brands.brand_name, carmodel.model_name, colors.color_name, customers.customer_name, salestbl.finance_type FROM salestbl INNER JOIN carstbl ON salestbl.car_id = carstbl.car_id INNER JOIN brands ON carstbl.brand_id = brands.brand_id INNER JOIN carmodel ON carmodel.brand_id = brands.brand_id INNER JOIN colors ON carstbl.color_id = colors.color_id INNER JOIN customers ON salestbl.customer_id = customers.customer_id ";
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
