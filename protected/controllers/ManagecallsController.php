<?php

class ManagecallsController extends Controller
{
	
	public $layout='//layouts/column1';


	public function actionView()
	{
		$this->render('index');
		
	}


        

	public function actionGetdata()
	{
	            $this->layout = false;
		$empid = $_REQUEST['employee_id'];    
                $date_from = $_REQUEST['date_from'];
                $date_to = $_REQUEST['date_to'];                   
                //$count=Yii::app()->db->createCommand('SELECT COUNT(*) FROM carstbl')->queryScalar();
                
                 $sql = "SELECT
callstbl.call_id,
callstbl.call_date,
callstbl.call_time,
callstbl.car_data,
employees.employee_name,
callstbl.customer,
callstbl.mobile,
callstbl.area,
callstbl.how
FROM
callstbl
INNER JOIN employees ON employees.employee_id = callstbl.call_employee_id
where callstbl.service_employee_id = $empid
      and callstbl.call_date >= '$date_from' and callstbl.call_date <= '$date_to'
 ";                                      
                $dataProvider=new CSqlDataProvider($sql, 
                            array(
                           'keyField' => 'call_id',
                           // 'totalItemCount'=>$count,
                            'sort'=>array(
                            'attributes'=>array(
                            'callstbl.call_id',
        ),
    ),
    'pagination'=>array(
        'pageSize'=>10,
    ),
));
                
            
                $this->render('getdata',array('dataProvider' => $dataProvider));
                		
	}
        
}
