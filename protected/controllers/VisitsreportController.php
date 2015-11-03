<?php

class VisitsreportController extends Controller
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
visitstbl.visit_id,
visitstbl.visit_date,
visitstbl.customer_name,
visitstbl.car_data,
employees.employee_name,
visitstbl.emp_comment
FROM
visitstbl
INNER JOIN employees ON employees.employee_id = visitstbl.employee_id
where visitstbl.branch_id = $id
and visitstbl.visit_date >= '$start_date' and visitstbl.visit_date <= '$end_date' ";    
                  if(!empty($_REQUEST['employee_id']))
                    {
                     $sql.=" and visitstbl.employee_id ='{$_REQUEST['employee_id']}'";                     
                    } 
                $dataProvider=new CSqlDataProvider($sql, 
                            array(
                           'keyField' => 'visit_id',
                           // 'totalItemCount'=>$count,
                            'sort'=>array(
                            'attributes'=>array(
                            'visitstbl.visit_id',
        ),
    ),
    'pagination'=>array(
        'pageSize'=>10,
    ),
));
                
            
                $this->render('getdata',array('dataProvider' => $dataProvider));
                		
	}
        
}
