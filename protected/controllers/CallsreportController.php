<?php

class CallsreportController extends Controller
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
                    $empid = $_REQUEST['employee_id'];                    
                    $start_date = $_REQUEST['start_date'];                
                    $end_date = $_REQUEST['end_date'];                   
                //$count=Yii::app()->db->createCommand('SELECT COUNT(*) FROM carstbl')->queryScalar();
                
                 $sql = "SELECT
callstbl.call_id,
callstbl.call_date,
callstbl.call_time,
employees.employee_name as call_man ,
callstbl.car_data,
callstbl.customer,
callstbl.mobile,
emp.employee_name as service_man ,
callstbl.area,
howtbl.how_name,
callstbl.notes,
callstbl.`status`
FROM
callstbl
INNER JOIN employees ON employees.employee_id = callstbl.call_employee_id
INNER JOIN employees emp ON employees.manager_id = employees.employee_id AND emp.employee_id = callstbl.service_employee_id
INNER JOIN howtbl ON howtbl.how_id = callstbl.how_id
where callstbl.branch_id = $id  
and callstbl.call_date >= '$start_date' and callstbl.call_date <= '$end_date'
 ";               
                 if(!empty($_REQUEST['employee_id']))
                    {
                     $sql.=" and callstbl.service_employee_id ='{$_REQUEST['employee_id']}'";                     
                    }  
                    
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
