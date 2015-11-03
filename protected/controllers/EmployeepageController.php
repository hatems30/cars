<?php

class EmployeepageController extends Controller
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
                $start_date = date($_REQUEST['start_date']);
                $end_date = date($_REQUEST['end_date']);   
                //$count=Yii::app()->db->createCommand('SELECT COUNT(*) FROM carstbl')->queryScalar();
                
                 $sql1 = "SELECT
salestbl.invoice_id,
salestbl.invoice_date,
brands.brand_name,
carmodel.model_name,
carcode.code_name,
carcode.factor,
carstbl.chass_no,
salestbl.car_price,
customers.customer_name,
(select cach_factor from factorstbl limit 1) as cach_factor,
carcode.factor * (select cach_factor from factorstbl limit 1) as car_points
FROM
salestbl
INNER JOIN carstbl ON salestbl.car_id = carstbl.car_id
INNER JOIN brands ON carstbl.brand_id = brands.brand_id
INNER JOIN carmodel ON carmodel.brand_id = brands.brand_id AND carstbl.model_id = carmodel.model_id
INNER JOIN carcode ON carcode.brand_id = brands.brand_id AND carcode.model_id = carmodel.model_id AND carstbl.code_id = carcode.code_id
INNER JOIN customers ON salestbl.customer_id = customers.customer_id
where salestbl.branch_id = $id and salestbl.finance_type = 'نقدي' and salestbl.employee_id = $empid
and salestbl.invoice_date >= '$start_date' and salestbl.invoice_date <= '$end_date' ";                  
                $dataProvider1=new CSqlDataProvider($sql1, 
                            array(
                           'keyField' => 'invoice_id',
                           // 'totalItemCount'=>$count,
                            'sort'=>array(
                            'attributes'=>array('salestbl.invoice_id',),),
                            'pagination'=>array('pageSize'=>10,),));

//---------------------------------------------------التقسيط                ---------------------------
                
                 $sql2 = "SELECT
salestbl.invoice_id,
salestbl.invoice_date,
brands.brand_name,
carmodel.model_name,
carcode.code_name,
carcode.factor,
carstbl.chass_no,
salestbl.car_price,
customers.customer_name,
(select premium_factor from factorstbl limit 1) as premium_factor,
carcode.factor * (select premium_factor from factorstbl limit 1) as car_points
FROM
salestbl
INNER JOIN carstbl ON salestbl.car_id = carstbl.car_id
INNER JOIN brands ON carstbl.brand_id = brands.brand_id
INNER JOIN carmodel ON carmodel.brand_id = brands.brand_id AND carstbl.model_id = carmodel.model_id
INNER JOIN carcode ON carcode.brand_id = brands.brand_id AND carcode.model_id = carmodel.model_id AND carstbl.code_id = carcode.code_id
INNER JOIN customers ON salestbl.customer_id = customers.customer_id
where salestbl.branch_id = $id and salestbl.finance_type = 'قسط مباشر' and salestbl.employee_id = $empid
and salestbl.invoice_date >= '$start_date' and salestbl.invoice_date <= '$end_date' ";                              
                $dataProvider2=new CSqlDataProvider($sql2, 
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
carcode.code_name,
carcode.factor    as car_factor,
carstbl.chass_no,
salestbl.car_price,
customers.customer_name,
banks.bank_name,
banks.factor  as bank_factor ,
carcode.factor *  banks.factor as car_points
FROM
salestbl
INNER JOIN carstbl ON salestbl.car_id = carstbl.car_id
INNER JOIN carmodel ON carmodel.model_id = carstbl.model_id
INNER JOIN brands ON carstbl.brand_id = brands.brand_id AND carmodel.brand_id = brands.brand_id
INNER JOIN carcode ON carcode.brand_id = brands.brand_id AND carcode.model_id = carmodel.model_id AND carstbl.code_id = carcode.code_id
INNER JOIN customers ON salestbl.customer_id = customers.customer_id
INNER JOIN banks ON salestbl.bank_id = banks.bank_id
where salestbl.branch_id = $id and salestbl.finance_type = 'بنك' and salestbl.employee_id = $empid
and salestbl.invoice_date >= '$start_date' and salestbl.invoice_date <= '$end_date' ";                              
                $dataProvider3=new CSqlDataProvider($sql3, 
                            array(
                           'keyField' => 'invoice_id',
                           // 'totalItemCount'=>$count,
                            'sort'=>array(
                            'attributes'=>array('salestbl.invoice_id',),),
                            'pagination'=>array('pageSize'=>10,),)); 
//-----------------------------------------------------dealer sales-----------------------------------------                         
                 $sql4 = "SELECT
dealersalestbl.invoice_id,
dealersalestbl.invoice_date,
brands.brand_name,
carmodel.model_name,
carcode.code_name,
carcode.factor,
carstbl.chass_no,
dealersalestbl.price,
dealerstbl.dealer_name,
(select dealer_factor from factorstbl limit 1) as dealer_factor,
carcode.factor * (select dealer_factor from factorstbl limit 1) as car_points
FROM
dealersalestbl
INNER JOIN carstbl ON dealersalestbl.car_id = carstbl.car_id
INNER JOIN brands ON carstbl.brand_id = brands.brand_id
INNER JOIN carmodel ON carmodel.brand_id = brands.brand_id AND carstbl.model_id = carmodel.model_id
INNER JOIN carcode ON carcode.brand_id = brands.brand_id AND carcode.model_id = carmodel.model_id AND carstbl.code_id = carcode.code_id
INNER JOIN dealerstbl ON dealersalestbl.dealer_id = dealerstbl.dealer_id
where dealersalestbl.branch_id = $id and dealersalestbl.employee_id = $empid
and dealersalestbl.invoice_date >= '$start_date' and dealersalestbl.invoice_date <= '$end_date' ";                              
                $dataProvider4=new CSqlDataProvider($sql4, 
                            array(
                           'keyField' => 'invoice_id',
                           // 'totalItemCount'=>$count,
                            'sort'=>array(
                            'attributes'=>array('dealersalestbl.invoice_id',),),
                            'pagination'=>array('pageSize'=>10,),));                 
//-----------------------------------------------------Company sales-----------------------------------------                         
                 $sql5 = "SELECT
companysalestbl.invoice_id,
companysalestbl.invoice_date,
brands.brand_name,
carmodel.model_name,
carcode.code_name,
carcode.factor,
carstbl.chass_no,
companysalestbl.price,
companiestbl.company_name,
(select company_factor from factorstbl limit 1) as company_factor,
carcode.factor * (select company_factor from factorstbl limit 1) as car_points
FROM
companysalestbl
INNER JOIN carstbl ON companysalestbl.car_id = carstbl.car_id
INNER JOIN brands ON carstbl.brand_id = brands.brand_id
INNER JOIN carmodel ON carmodel.brand_id = brands.brand_id AND carstbl.model_id = carmodel.model_id
INNER JOIN carcode ON carcode.brand_id = brands.brand_id AND carcode.model_id = carmodel.model_id AND carstbl.code_id = carcode.code_id
INNER JOIN companiestbl ON companysalestbl.company_id = companiestbl.company_id
where companysalestbl.branch_id = $id and companysalestbl.employee_id = $empid
and companysalestbl.invoice_date >= '$start_date' and companysalestbl.invoice_date <= '$end_date' ";                              
                $dataProvider5=new CSqlDataProvider($sql5, 
                            array(
                           'keyField' => 'invoice_id',
                           // 'totalItemCount'=>$count,
                            'sort'=>array(
                            'attributes'=>array('companysalestbl.invoice_id',),),
                            'pagination'=>array('pageSize'=>10),
                                ));     
//---------------------------------------------------------------------المكالمات الواردة---------------------------------------------     
                 $sql6 = "SELECT
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
where callstbl.branch_id = $id and callstbl.service_employee_id = $empid
and callstbl.call_date >= '$start_date' and callstbl.call_date <= '$end_date' ";                              
                $dataProvider6=new CSqlDataProvider($sql6, 
                            array(
                           'keyField' => 'call_id',
                           // 'totalItemCount'=>$count,
                            'sort'=>array(
                            'attributes'=>array('callstbl.call_id',),),
                            'pagination'=>array('pageSize'=>10),
                                ));                     
//---------------------------------------------------------------------الزيارات---------------------------------------------     
                 $sql7 = "SELECT
visitstbl.visit_id,
visitstbl.visit_date,
visitstbl.customer_name,
visitstbl.car_data,
employees.employee_name,
visitstbl.emp_comment
FROM
visitstbl
INNER JOIN employees ON employees.employee_id = visitstbl.employee_id
where visitstbl.branch_id = $id and visitstbl.employee_id = $empid
and visitstbl.visit_date >= '$start_date' and visitstbl.visit_date <= '$end_date' ";                              
                $dataProvider7=new CSqlDataProvider($sql7, 
                            array(
                           'keyField' => 'visit_id',
                           // 'totalItemCount'=>$count,
                            'sort'=>array(
                            'attributes'=>array('visitstbl.visit_id',),),
                            'pagination'=>array('pageSize'=>10),
                                ));                   
                $this->render('getdata',array('id'=>$_REQUEST['id'],'dataProvider1' => $dataProvider1 , 'dataProvider2' => $dataProvider2 , 'dataProvider3' => $dataProvider3 , 'dataProvider4' => $dataProvider4 ,'dataProvider5' => $dataProvider5  ,'dataProvider6' => $dataProvider6 ,'dataProvider7' => $dataProvider7));
                		
	}
        
}
