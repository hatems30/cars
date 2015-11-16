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
callstbl.car_data,
callstbl.customer,
callstbl.mobile,
empcall.employee_name AS call_man,
empserv.employee_name AS service_man,
callstbl.area,
callstbl.notes,
callstbl.`status`,
howtbl.how_name
FROM
callstbl
INNER JOIN employees AS empcall ON empcall.employee_id = callstbl.call_employee_id
INNER JOIN employees AS empserv ON empserv.employee_id = callstbl.service_employee_id
INNER JOIN howtbl ON callstbl.how_id = howtbl.how_id
where callstbl.branch_id = $id  
and callstbl.call_date >= '$start_date' and callstbl.call_date <= '$end_date' ";               
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
        'pageSize'=>1000,
    ),
));
                

                $this->render('getdata',array('dataProvider' => $dataProvider));
                		
	}
        
}
