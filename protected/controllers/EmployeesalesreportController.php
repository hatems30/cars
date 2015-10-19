<?php

class EmployeesalesreportController extends Controller
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
                $empid = $_REQUEST['empid'];    
        
                $date_from = $_REQUEST['date_from'];
                $date_to = $_REQUEST['date_to'];                  
                //$count=Yii::app()->db->createCommand('SELECT COUNT(*) FROM carstbl')->queryScalar();
                
                 $sql = "SELECT
salestbl.invoice_id,
salestbl.invoice_date,
brands.brand_name,
carmodel.model_name,
carstbl.chass_no,
salestbl.cach_price,
inscomps.insurance_comp_name,
salestbl.insurance_type,
salestbl.insurance_amount,
salestbl.insurance_rate,
carstbl.car_factor,
(select cach_factor from factorstbl limit 1) as factor,
carstbl.car_factor * (select cach_factor from factorstbl limit 1) as car_points
FROM
carstbl
INNER JOIN salestbl ON salestbl.car_id = carstbl.car_id
INNER JOIN brands ON carstbl.brand_id = brands.brand_id
INNER JOIN carmodel ON carmodel.brand_id = brands.brand_id AND carmodel.model_id = carstbl.model_id
INNER JOIN customers ON salestbl.customer_id = customers.customer_id
INNER JOIN inscomps ON salestbl.insurance_comp_id = inscomps.insurance_comp_id
where salestbl.branch_id = $id and salestbl.finance_type = 'نقدي' and salestbl.employee_id = $empid
and salestbl.invoice_date >= '$date_from' and salestbl.invoice_date <= '$date_to'";                              
                $dataProvider1=new CSqlDataProvider($sql, 
                            array(
                           'keyField' => 'invoice_id',
                           // 'totalItemCount'=>$count,
                            'sort'=>array(
                            'attributes'=>array('salestbl.invoice_id',),),
                            'pagination'=>array('pageSize'=>10,),));

//---------------------------------------------------التقسيط                ---------------------------
                
                 $sql = "SELECT
salestbl.invoice_id,
salestbl.invoice_date,
brands.brand_name,
carmodel.model_name,
carstbl.chass_no,
salestbl.cach_price,
inscomps.insurance_comp_name,
salestbl.insurance_type,
salestbl.insurance_amount,
salestbl.insurance_rate,
carstbl.car_factor,
(select premium_factor from factorstbl limit 1) as factor,
carstbl.car_factor * (select premium_factor from factorstbl limit 1) as car_points
FROM
carstbl
INNER JOIN salestbl ON salestbl.car_id = carstbl.car_id
INNER JOIN brands ON carstbl.brand_id = brands.brand_id
INNER JOIN carmodel ON carmodel.brand_id = brands.brand_id AND carmodel.model_id = carstbl.model_id
INNER JOIN customers ON salestbl.customer_id = customers.customer_id
INNER JOIN inscomps ON salestbl.insurance_comp_id = inscomps.insurance_comp_id
where salestbl.branch_id = $id and salestbl.finance_type = 'قسط مباشر' and salestbl.employee_id = $empid
and salestbl.invoice_date >= '$date_from' and salestbl.invoice_date <= '$date_to'";                              
                $dataProvider2=new CSqlDataProvider($sql, 
                            array(
                           'keyField' => 'invoice_id',
                           // 'totalItemCount'=>$count,
                            'sort'=>array(
                            'attributes'=>array('salestbl.invoice_id',),),
                            'pagination'=>array('pageSize'=>10,),)); 
//-----------------------------------------------------bank sales-----------------------------------------               
                 $sql3 = "SELECT
salestbl.invoice_id,
salestbl.invoice_date,
brands.brand_name,
carmodel.model_name,
carstbl.chass_no,
salestbl.bank_price,
banks.bank_name,
banks.factor,
carstbl.car_factor,
carstbl.car_factor * banks.factor as car_points
FROM
salestbl
INNER JOIN carstbl ON salestbl.car_id = carstbl.car_id
INNER JOIN carmodel ON carmodel.model_id = carstbl.model_id
INNER JOIN brands ON carstbl.brand_id = brands.brand_id AND carmodel.brand_id = brands.brand_id
INNER JOIN banks ON salestbl.bank_id = banks.bank_id
where salestbl.branch_id = $id and salestbl.finance_type = 'بنك' and salestbl.employee_id = $empid
and salestbl.invoice_date >= '$date_from' and salestbl.invoice_date <= '$date_to'
";                              
                $dataProvider3=new CSqlDataProvider($sql3, 
                            array(
                           'keyField' => 'invoice_id',
                           // 'totalItemCount'=>$count,
                            'sort'=>array(
                            'attributes'=>array('salestbl.invoice_id',),),
                            'pagination'=>array('pageSize'=>10,),)); 
                
                        
                $this->render('getdata',array('id'=>$_REQUEST['id'],'dataProvider1' => $dataProvider1 , 'dataProvider2' => $dataProvider2 , 'dataProvider3' => $dataProvider3));
                		
	}
        
}
