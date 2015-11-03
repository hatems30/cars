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
                $start_date =$_REQUEST['start_date'];
                $end_date = $_REQUEST['end_date'];         
                
               
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
carstbl.car_factor * banks.factor AS car_points,
brands.brand_name,
carmodel.model_name,
carcode.code_name,
carcode.factor as car_factor,
carstbl.chass_no,
salestbl.car_price,
banks.bank_name,
banks.factor as bank_factor,
customers.customer_name,
banks.factor * carcode.factor as car_points
FROM
salestbl
INNER JOIN carstbl ON salestbl.car_id = carstbl.car_id
INNER JOIN carmodel ON carmodel.model_id = carstbl.model_id
INNER JOIN brands ON carstbl.brand_id = brands.brand_id AND carmodel.brand_id = brands.brand_id
INNER JOIN banks ON salestbl.bank_id = banks.bank_id
INNER JOIN carcode ON carcode.brand_id = brands.brand_id AND carcode.model_id = carmodel.model_id AND carcode.code_id = carstbl.code_id
INNER JOIN customers ON salestbl.customer_id = customers.customer_id
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
                
                        
                $this->render('getdata',array('id'=>$_REQUEST['id'],'dataProvider1' => $dataProvider1 , 'dataProvider2' => $dataProvider2 , 'dataProvider3' => $dataProvider3 , 'dataProvider4' => $dataProvider4 , 'dataProvider5' => $dataProvider5));
                		
	}
        
}
