<?php

class FullsalesreportController extends Controller
{
	
	public $layout='//layouts/column1';


	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}
	public function accessRules()
	{
            $cont = Yii::app()->controller->id;
            $user_name = Yii::app()->user->username;
            $sql = "SELECT userpertbl.per_type
                    FROM userpertbl
                    INNER JOIN `user` ON userpertbl.user_id = `user`.id
                    INNER JOIN controllers ON userpertbl.controller_id = controllers.controller_id 
                    where `user`.username= '$user_name' and controllers.controller_code_name ='$cont' limit 1";
            $connection = Yii::app()->db;   // assuming you have configured a "db" connection
            $command = $connection->createCommand($sql);
            $data = $command->queryAll($sql);
            if (isset($data[0]['per_type']) && !empty($data[0]['per_type'])) 
                {            
                    $per_type = $data[0]['per_type'];
                    if ($per_type == 'ReadWrite') 
                        {
                            return array(
                                        array('allow', // allow authenticated user to perform 'create' and 'update' actions
                                              'actions' => array('create', 'update', 'admin', 'delete', 'view','Getdata'),
                                              'users' => array('@'),),
                                        array('deny', // deny all users
                                              'users' => array('*'),),
                                        );
                        } 
                    elseif ($per_type == 'Read') 
                        {
                           return array(
                                        array('allow', // allow authenticated user to perform 'create' and 'update' actions
                                              'actions' => array('view', 'admin'),
                                              'users' => array('@'),),
                                        array('deny', // deny all users
                                              'users' => array('*'),),
                                        );
                        }
                } 
            else 
                {
                    return array(
                                array('deny', // deny all users
                                      'users' => array('@'),),
                                );
                }
        }
        
	public function actionView()
	{
		$this->render('index');
		
	}

	public function actionGetdata()
	{
	            $this->layout = false;
		    $id = $_REQUEST['id'];    
                    $date_from = $_REQUEST['date_from'];
                    $date_to = $_REQUEST['date_to']; 
                    if ($date_to < $date_from)
                    {
                        echo "<div class='col-sm-8'><b><font size='5' color='red'>عفوا تاريخ البداية اكبر من تاريخ النهاية</font></b></div>";
                        exit;
                    }
                    $sql = "SELECT
carstbl.brand_id ,
carstbl.model_id ,
carstbl.code_id ,
brands.brand_name,
carmodel.model_name,
carcode.code_name,
COUNT(brands.brand_name) as total
FROM
carstbl
INNER JOIN brands ON carstbl.brand_id = brands.brand_id
INNER JOIN carmodel ON carmodel.brand_id = brands.brand_id AND carstbl.model_id = carmodel.model_id
INNER JOIN carcode ON carcode.brand_id = brands.brand_id AND carcode.model_id = carmodel.model_id AND carstbl.code_id = carcode.code_id
GROUP BY carstbl.code_id
ORDER BY brands.brand_name , carmodel.model_name
";                                                                  
                    $all=Yii::app()->db->createCommand($sql)->queryAll();                     
                    foreach ($all as $k=>$v)
                    {
                     $br_id = $all[$k]['brand_id'] ;
                     $mo_id = $all[$k]['model_id'] ;
                     $co_id = $all[$k]['code_id'] ;
                     $direct_sales = 0 ;
                     $dealer_sales = 0 ;
                     $company_sales = 0 ;  
                     $total_first= 0 ; 
                     $total_in = 0 ;
                     $inner_in_sales = 0 ;  
                     $cach_sales = 0 ; 
                     $bank_sales = 0 ;
                     $premium_sales = 0 ;
                     $dealer_sales = 0 ; 
                     $company_sales = 0 ;
                     $inner_out_sales = 0 ;
                     
                      $sql_total_in_first = "SELECT carstbl.brand_id, carstbl.model_id, carstbl.code_id 
                                             FROM carstbl
                                             where carstbl.brand_id = $br_id and carstbl.model_id = $mo_id and carstbl.code_id = $co_id
                                             and carstbl.branch_id = $id and carstbl.add_date < '$date_from' ";
                      $all_total_in_first = Yii::app()->db->createCommand($sql_total_in_first)->queryAll(); 
                      $total_in_first = count($all_total_in_first);                         
                                
                      $sql_cach_sales_first = "SELECT carstbl.brand_id, carstbl.model_id, carstbl.code_id 
                                         FROM carstbl INNER JOIN salestbl ON salestbl.car_id = carstbl.car_id 
                                         where carstbl.brand_id = $br_id and carstbl.model_id = $mo_id and carstbl.code_id = $co_id
                                         and salestbl.finance_type = 'نقدي' and salestbl.branch_id = $id and salestbl.invoice_date < '$date_from'";
                      $all_cach_sales_first = Yii::app()->db->createCommand($sql_cach_sales_first)->queryAll(); 
                      $cach_sales_first = count($all_cach_sales_first); 

                      $sql_bank_sales_first = "SELECT carstbl.brand_id, carstbl.model_id, carstbl.code_id 
                                         FROM carstbl INNER JOIN salestbl ON salestbl.car_id = carstbl.car_id 
                                         where carstbl.brand_id = $br_id and carstbl.model_id = $mo_id and carstbl.code_id = $co_id
                                         and salestbl.finance_type = 'بنك' and salestbl.branch_id = $id and salestbl.invoice_date < '$date_from'";
                      $all_bank_sales_first = Yii::app()->db->createCommand($sql_bank_sales_first)->queryAll(); 
                      $bank_sales_first = count($all_bank_sales_first); 
                      
                      $sql_premium_sales_first = "SELECT carstbl.brand_id, carstbl.model_id, carstbl.code_id 
                                         FROM carstbl INNER JOIN salestbl ON salestbl.car_id = carstbl.car_id 
                                         where carstbl.brand_id = $br_id and carstbl.model_id = $mo_id and carstbl.code_id = $co_id
                                         and salestbl.finance_type = 'قسط مباشر' and salestbl.branch_id = $id and salestbl.invoice_date < '$date_from'";
                      $all_premium_sales_first = Yii::app()->db->createCommand($sql_premium_sales_first)->queryAll(); 
                      $premium_sales_first = count($all_premium_sales_first);                       
           
                      $sql_dealer_sales_first = "SELECT carstbl.brand_id, carstbl.model_id, carstbl.code_id
                                         FROM carstbl INNER JOIN dealersalestbl ON dealersalestbl.car_id = carstbl.car_id 
                                         where carstbl.brand_id = $br_id and carstbl.model_id = $mo_id and carstbl.code_id = $co_id
                                         and dealersalestbl.branch_id = $id and dealersalestbl.invoice_date < '$date_from'";
                      $all_dealer_sales_first = Yii::app()->db->createCommand($sql_dealer_sales_first)->queryAll(); 
                      $dealer_sales_first = count($all_dealer_sales_first);
                      
                      $sql_company_sales_first = "SELECT carstbl.brand_id, carstbl.model_id, carstbl.code_id
                                         FROM carstbl INNER JOIN companysalestbl ON companysalestbl.car_id = carstbl.car_id 
                                         where carstbl.brand_id = $br_id and carstbl.model_id = $mo_id and carstbl.code_id = $co_id
                                         and companysalestbl.branch_id=$id and companysalestbl.invoice_date < '$date_from' ";
                      $all_company_sales_first = Yii::app()->db->createCommand($sql_company_sales_first)->queryAll();  
                      $company_sales_first = count($all_company_sales_first);  
                      
                      $sql_inner_out_sales_first = "SELECT carstbl.brand_id, carstbl.model_id, carstbl.code_id
                                         FROM carstbl INNER JOIN innersaletbl ON innersaletbl.car_id = carstbl.car_id 
                                         where carstbl.brand_id = $br_id and carstbl.model_id = $mo_id and carstbl.code_id = $co_id 
                                        and innersaletbl.from_branch_id = $id and innersaletbl.trs_date < '$date_from'";
                      $all_inner_out_sales_first = Yii::app()->db->createCommand($sql_inner_out_sales_first)->queryAll();  
                      $inner_out_sales_first = count($all_inner_out_sales_first); 
                      
                      $sql_inner_in_sales_first = "SELECT carstbl.brand_id, carstbl.model_id, carstbl.code_id
                                         FROM carstbl INNER JOIN innersaletbl ON innersaletbl.car_id = carstbl.car_id 
                                         where carstbl.brand_id = $br_id and carstbl.model_id = $mo_id and carstbl.code_id = $co_id 
                                        and innersaletbl.to_branch_id = $id and innersaletbl.trs_date < '$date_from' ";
                      $all_inner_in_sales_first = Yii::app()->db->createCommand($sql_inner_in_sales_first)->queryAll();  
                      $inner_in_sales_first = count($all_inner_in_sales_first);                       

//------------------------------------------------------------------------------------
                      $sql_total_in = "SELECT carstbl.brand_id, carstbl.model_id, carstbl.code_id 
                                         FROM carstbl
                                         where carstbl.brand_id = $br_id and carstbl.model_id = $mo_id and carstbl.code_id = $co_id
                                               and carstbl.branch_id = $id and carstbl.add_date >= '$date_from' and carstbl.add_date <= '$date_to' ";
                      $all_total_in = Yii::app()->db->createCommand($sql_total_in)->queryAll(); 
                      $total_in = count($all_total_in);                      
                                
                      $sql_cach_sales = "SELECT carstbl.brand_id, carstbl.model_id, carstbl.code_id 
                                         FROM carstbl INNER JOIN salestbl ON salestbl.car_id = carstbl.car_id 
                                         where carstbl.brand_id = $br_id and carstbl.model_id = $mo_id and carstbl.code_id = $co_id
                                         and salestbl.finance_type = 'نقدي' and salestbl.branch_id = $id and salestbl.invoice_date >= '$date_from' and salestbl.invoice_date <= '$date_to'";
                      $all_cach_sales = Yii::app()->db->createCommand($sql_cach_sales)->queryAll(); 
                      $cach_sales = count($all_cach_sales); 

                      $sql_bank_sales = "SELECT carstbl.brand_id, carstbl.model_id, carstbl.code_id 
                                         FROM carstbl INNER JOIN salestbl ON salestbl.car_id = carstbl.car_id 
                                         where carstbl.brand_id = $br_id and carstbl.model_id = $mo_id and carstbl.code_id = $co_id
                                         and salestbl.finance_type = 'بنك' and salestbl.branch_id = $id and salestbl.invoice_date >= '$date_from'and salestbl.invoice_date <= '$date_to'";
                      $all_bank_sales = Yii::app()->db->createCommand($sql_bank_sales)->queryAll(); 
                      $bank_sales = count($all_bank_sales); 
                      
                      $sql_premium_sales = "SELECT carstbl.brand_id, carstbl.model_id, carstbl.code_id 
                                         FROM carstbl INNER JOIN salestbl ON salestbl.car_id = carstbl.car_id 
                                         where carstbl.brand_id = $br_id and carstbl.model_id = $mo_id and carstbl.code_id = $co_id
                                         and salestbl.finance_type = 'قسط مباشر' and salestbl.branch_id = $id and salestbl.invoice_date >= '$date_from' and salestbl.invoice_date <= '$date_to' ";
                      $all_premium_sales = Yii::app()->db->createCommand($sql_premium_sales)->queryAll(); 
                      $premium_sales = count($all_premium_sales);                       
           
                      $sql_dealer_sales = "SELECT carstbl.brand_id, carstbl.model_id, carstbl.code_id
                                         FROM carstbl INNER JOIN dealersalestbl ON dealersalestbl.car_id = carstbl.car_id 
                                         where carstbl.brand_id = $br_id and carstbl.model_id = $mo_id and carstbl.code_id = $co_id
                                         and dealersalestbl.branch_id = $id and dealersalestbl.invoice_date >= '$date_from' and dealersalestbl.invoice_date <= '$date_to' ";
                      $all_dealer_sales = Yii::app()->db->createCommand($sql_dealer_sales)->queryAll(); 
                      $dealer_sales = count($all_dealer_sales);
                      
                      $sql_company_sales = "SELECT carstbl.brand_id, carstbl.model_id, carstbl.code_id
                                         FROM carstbl INNER JOIN companysalestbl ON companysalestbl.car_id = carstbl.car_id 
                                         where carstbl.brand_id = $br_id and carstbl.model_id = $mo_id and carstbl.code_id = $co_id 
                                        and companysalestbl.branch_id = $id and companysalestbl.invoice_date >= '$date_from' and companysalestbl.invoice_date <= '$date_to' ";
                      $all_company_sales = Yii::app()->db->createCommand($sql_company_sales)->queryAll();  
                      $company_sales = count($all_company_sales);
                      
                      $sql_inner_out_sales = "SELECT carstbl.brand_id, carstbl.model_id, carstbl.code_id
                                         FROM carstbl INNER JOIN innersaletbl ON innersaletbl.car_id = carstbl.car_id 
                                         where carstbl.brand_id = $br_id and carstbl.model_id = $mo_id and carstbl.code_id = $co_id 
                                        and innersaletbl.from_branch_id = $id and innersaletbl.trs_date >= '$date_from' and innersaletbl.trs_date <= '$date_to' ";
                      $all_inner_out_sales = Yii::app()->db->createCommand($sql_inner_out_sales)->queryAll();  
                      $inner_out_sales = count($all_inner_out_sales); 
                      
                      $sql_inner_in_sales = "SELECT carstbl.brand_id, carstbl.model_id, carstbl.code_id
                                         FROM carstbl INNER JOIN innersaletbl ON innersaletbl.car_id = carstbl.car_id 
                                         where carstbl.brand_id = $br_id and carstbl.model_id = $mo_id and carstbl.code_id = $co_id 
                                        and innersaletbl.to_branch_id = $id and innersaletbl.trs_date >= '$date_from' and innersaletbl.trs_date <= '$date_to' ";
                      $all_inner_in_sales = Yii::app()->db->createCommand($sql_inner_in_sales)->queryAll();  
                      $inner_in_sales = count($all_inner_in_sales);                       
                      
                      $total_first = ($total_in_first + $inner_in_sales_first ) - ($cach_sales_first + $bank_sales_first + $premium_sales_first + $dealer_sales_first + $company_sales_first + $inner_out_sales_first); 
                      $params[$k]['brand_name']= $all[$k]['brand_name'];
                      $params[$k]['model_name']= $all[$k]['model_name'];
                      $params[$k]['code_name']= $all[$k]['code_name'];                       
                      $params[$k]['first_total']= $total_first ;                      
                      $params[$k]['total_in']= $total_in ;
                      $params[$k]['inner_in_sales']= $inner_in_sales ;
                      $params[$k]['cach_sales']= $cach_sales ;
                      $params[$k]['bank_sales']= $bank_sales ;
                      $params[$k]['premium_sales']= $premium_sales ;
                      $params[$k]['dealer_sales']= $dealer_sales ;
                      $params[$k]['company_sales']= $company_sales ;
                      $params[$k]['inner_out_sales']= $inner_out_sales ;
                      $params[$k]['final_total']= ($params[$k]['first_total'] + $total_in + $inner_in_sales ) - ($cach_sales + $bank_sales + $premium_sales + $dealer_sales + $company_sales + $inner_out_sales);
                    }                    
                    $this->render('getdata',array('params' => $params));                   	      
        }
}
