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
salestbl.car_factor,
salestbl.sales_factor,
salestbl.car_factor * salestbl.sales_factor as car_points
FROM
salestbl
INNER JOIN carstbl ON salestbl.car_id = carstbl.car_id
INNER JOIN brands ON carstbl.brand_id = brands.brand_id
INNER JOIN carmodel ON carmodel.brand_id = brands.brand_id AND carstbl.model_id = carmodel.model_id
INNER JOIN carcode ON carcode.brand_id = brands.brand_id AND carcode.model_id = carmodel.model_id AND carstbl.code_id = carcode.code_id
INNER JOIN customers ON salestbl.customer_id = customers.customer_id
where salestbl.branch_id = $id and salestbl.finance_type = 'نقدي' and salestbl.employee_id = $empid
and salestbl.invoice_date >= '$start_date' and salestbl.invoice_date <= '$end_date' ";   
                    $all1=Yii::app()->db->createCommand($sql1)->queryAll();
                    $params=array();
                    if (isset($_REQUEST['id']))
                    {
                       $params['id']= $_REQUEST['id'];
                    }
                    if (isset($_REQUEST['empid']))
                    {
                        $params['empid']= $_REQUEST['empid'];
                    }
                    if (isset($_REQUEST['start_date']))
                    {
                       $params['start_date']= $_REQUEST['start_date'];
                    } 
                    if (isset($_REQUEST['end_date']))
                    {
                       $params['end_date']= $_REQUEST['end_date'];
                    } 
                         $dataProvider1=new CSqlDataProvider($sql1, 
                            array(
                           'keyField' => 'invoice_id',
                            'totalItemCount'=>count($all1),
                            'sort'=>array(
                            'attributes'=>array('salestbl.invoice_id',),),
                            'pagination'=>array('pageSize'=>5,'params'=>$params),));

//---------------------------------------------------التقسيط                ---------------------------
                
                 $sql2 = "SELECT
salestbl.invoice_id,
salestbl.invoice_date,
brands.brand_name,
carmodel.model_name,
carcode.code_name,
carstbl.chass_no,
salestbl.car_price,
customers.customer_name,
salestbl.car_factor,
salestbl.sales_factor,
salestbl.car_factor * salestbl.sales_factor as car_points
FROM
salestbl
INNER JOIN carstbl ON salestbl.car_id = carstbl.car_id
INNER JOIN brands ON carstbl.brand_id = brands.brand_id
INNER JOIN carmodel ON carmodel.brand_id = brands.brand_id AND carstbl.model_id = carmodel.model_id
INNER JOIN carcode ON carcode.brand_id = brands.brand_id AND carcode.model_id = carmodel.model_id AND carstbl.code_id = carcode.code_id
INNER JOIN customers ON salestbl.customer_id = customers.customer_id
where salestbl.branch_id = $id and salestbl.finance_type = 'قسط مباشر' and salestbl.employee_id = $empid
and salestbl.invoice_date >= '$start_date' and salestbl.invoice_date <= '$end_date' ";    
                $all2=Yii::app()->db->createCommand($sql2)->queryAll(); 
                $dataProvider2=new CSqlDataProvider($sql2, 
                            array(
                           'keyField' => 'invoice_id',
                           'totalItemCount'=>count($all2),
                            'sort'=>array(
                            'attributes'=>array('salestbl.invoice_id',),),
                            'pagination'=>array('pageSize'=>5,'params'=>$params),)); 
//-----------------------------------------------------bank sales-----------------------------------------               
                 $sql3 = "SELECT
salestbl.invoice_id,
salestbl.invoice_date,
brands.brand_name,
carmodel.model_name,
carcode.code_name,
carstbl.chass_no,
salestbl.car_price,
customers.customer_name,
banks.bank_name,
salestbl.car_factor,
salestbl.sales_factor,
salestbl.car_factor * salestbl.sales_factor as car_points
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
                $all3=Yii::app()->db->createCommand($sql3)->queryAll(); 
                $dataProvider3=new CSqlDataProvider($sql3, 
                            array(
                            'keyField' => 'invoice_id',
                            'totalItemCount'=>count($all3),
                            'sort'=>array(
                            'attributes'=>array('salestbl.invoice_id',),),
                            'pagination'=>array('pageSize'=>5,'params'=>$params),)); 
//-----------------------------------------------------dealer sales-----------------------------------------                         
                 $sql4 = "SELECT
dealersalestbl.invoice_id,
dealersalestbl.invoice_date,
brands.brand_name,
carmodel.model_name,
carcode.code_name,
carstbl.chass_no,
dealersalestbl.price,
dealerstbl.dealer_name,
dealersalestbl.car_factor,
dealersalestbl.sales_factor,
dealersalestbl.car_factor * dealersalestbl.sales_factor as car_points
FROM
dealersalestbl
INNER JOIN carstbl ON dealersalestbl.car_id = carstbl.car_id
INNER JOIN brands ON carstbl.brand_id = brands.brand_id
INNER JOIN carmodel ON carmodel.brand_id = brands.brand_id AND carstbl.model_id = carmodel.model_id
INNER JOIN carcode ON carcode.brand_id = brands.brand_id AND carcode.model_id = carmodel.model_id AND carstbl.code_id = carcode.code_id
INNER JOIN dealerstbl ON dealersalestbl.dealer_id = dealerstbl.dealer_id
where dealersalestbl.branch_id = $id and dealersalestbl.employee_id = $empid
and dealersalestbl.invoice_date >= '$start_date' and dealersalestbl.invoice_date <= '$end_date' ";                              
                $all4=Yii::app()->db->createCommand($sql4)->queryAll();  
                $dataProvider4=new CSqlDataProvider($sql4, 
                            array(
                            'keyField' => 'invoice_id',
                            'totalItemCount'=>count($all4),
                            'sort'=>array(
                            'attributes'=>array('dealersalestbl.invoice_id',),),
                            'pagination'=>array('pageSize'=>5,'params'=>$params),));                  
//-----------------------------------------------------Company sales-----------------------------------------                         
                 $sql5 = "SELECT
companysalestbl.invoice_id,
companysalestbl.invoice_date,
brands.brand_name,
carmodel.model_name,
carcode.code_name,
carstbl.chass_no,
companysalestbl.price,
companiestbl.company_name,
companysalestbl.car_factor,
companysalestbl.sales_factor,
companysalestbl.car_factor * companysalestbl.sales_factor as car_points
FROM
companysalestbl
INNER JOIN carstbl ON companysalestbl.car_id = carstbl.car_id
INNER JOIN brands ON carstbl.brand_id = brands.brand_id
INNER JOIN carmodel ON carmodel.brand_id = brands.brand_id AND carstbl.model_id = carmodel.model_id
INNER JOIN carcode ON carcode.brand_id = brands.brand_id AND carcode.model_id = carmodel.model_id AND carstbl.code_id = carcode.code_id
INNER JOIN companiestbl ON companysalestbl.company_id = companiestbl.company_id
where companysalestbl.branch_id = $id and companysalestbl.employee_id = $empid
and companysalestbl.invoice_date >= '$start_date' and companysalestbl.invoice_date <= '$end_date' ";                              
                 $all5=Yii::app()->db->createCommand($sql5)->queryAll(); 
                 $dataProvider5=new CSqlDataProvider($sql5, 
                            array(
                           'keyField' => 'invoice_id',
                           'totalItemCount'=>count($all5),
                            'sort'=>array(
                            'attributes'=>array('companysalestbl.invoice_id',),),
                            'pagination'=>array('pageSize'=>5,'params'=>$params),));                                
//---------------------------------------------------------------------المكالمات الواردة---------------------------------------------     
                 $sql6 = "SELECT
callstbl.call_id,
callstbl.call_date,
callstbl.call_time,
callstbl.car_data,
callstbl.customer,
callstbl.mobile,
callstbl.service_branch_id,
employees.employee_name,
callstbl.area,
howtbl.how_name,
callstbl.notes
FROM
callstbl
INNER JOIN employees ON employees.employee_id = callstbl.call_employee_id
INNER JOIN howtbl ON callstbl.how_id = howtbl.how_id
where callstbl.branch_id = $id and callstbl.service_employee_id = $empid
and callstbl.call_date >= '$start_date' and callstbl.call_date <= '$end_date' ";                    
                $all6=Yii::app()->db->createCommand($sql6)->queryAll(); 
                $dataProvider6=new CSqlDataProvider($sql6, 
                            array(
                            'keyField' => 'call_id',
                            'totalItemCount'=>count($all6),
                            'sort'=>array(
                            'attributes'=>array('callstbl.call_id',),),
                            'pagination'=>array('pageSize'=>5,'params'=>$params),)); 
                                                
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
                $all7=Yii::app()->db->createCommand($sql7)->queryAll();  
                $dataProvider7=new CSqlDataProvider($sql7, 
                            array(
                           'keyField' => 'visit_id',
                           'totalItemCount'=>count($all7),
                            'sort'=>array(
                            'attributes'=>array('visitstbl.visit_id',),),
                            'pagination'=>array('pageSize'=>5,'params'=>$params),)); 
                               
//--------------------------------------------------الشكاوى-----------------------------------------------                
                 $sql8 = "SELECT
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
where complaintstbl.branch_id = $id and complaintstbl.employee_id = $empid
and complaintstbl.complaint_date >= '$start_date' and complaintstbl.complaint_date <= '$end_date' ";       
                $all8=Yii::app()->db->createCommand($sql8)->queryAll();  
                $dataProvider8=new CSqlDataProvider($sql8, 
                            array(
                            'keyField' => 'complaint_id',
                            'totalItemCount'=>count($all8),
                            'sort'=>array(
                            'attributes'=>array('complaintstbl.complaint_id',),),
                            'pagination'=>array('pageSize'=>5,'params'=>$params),)); 
                                                 
                $this->render('getdata',array('id'=>$_REQUEST['id'],'dataProvider1' => $dataProvider1 , 'dataProvider2' => $dataProvider2 , 'dataProvider3' => $dataProvider3 , 'dataProvider4' => $dataProvider4 ,'dataProvider5' => $dataProvider5  ,'dataProvider6' => $dataProvider6 ,'dataProvider7' => $dataProvider7,'dataProvider8' => $dataProvider8));
                		
	}
        
}
