<?php

class ComplaintsreportController extends Controller
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
complaintstbl.complaint_id,
complaintstbl.complaint_date,
employees.employee_name,
complaintstbl.customer_name,
complaintstbl.car_data,
complaintstbl.complaint_detail,
complaintstbl.notes
FROM
complaintstbl
INNER JOIN employees ON complaintstbl.employee_id = employees.employee_id
where complaintstbl.branch_id = $id
and complaintstbl.complaint_date >= '$start_date' and complaintstbl.complaint_date <= '$end_date' ";    
                  if(!empty($_REQUEST['employee_id']))
                    {
                     $sql.=" and complaintstbl.employee_id ='{$_REQUEST['employee_id']}'";                     
                    } 
                $dataProvider=new CSqlDataProvider($sql, 
                            array(
                           'keyField' => 'complaint_id',
                           // 'totalItemCount'=>$count,
                            'sort'=>array(
                            'attributes'=>array(
                            'complaintstbl.complaint_id',
        ),
    ),
    'pagination'=>array(
        'pageSize'=>10,
    ),
));
                
            
                $this->render('getdata',array('dataProvider' => $dataProvider));
                		
	}
        
}
