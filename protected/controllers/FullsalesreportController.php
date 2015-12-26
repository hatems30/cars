<?php

class FullsalesreportController extends Controller
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
              //      $date_from = $_REQUEST['date_from'];
                //    $date_to = $_REQUEST['date_to'];                                 
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
GROUP BY carcode.code_name
ORDER BY brands.brand_name
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
                     
                      $sql_total_in = "SELECT carstbl.brand_id, carstbl.model_id, carstbl.code_id 
                                         FROM carstbl
                                         where carstbl.brand_id = $br_id and carstbl.model_id = $mo_id and carstbl.code_id = $co_id
                                               and carstbl.branch_id = $id ";
                      $all_total_in = Yii::app()->db->createCommand($sql_total_in)->queryAll(); 
                      $total_in = count($all_total_in);                      
                                
                      $sql_cach_sales = "SELECT carstbl.brand_id, carstbl.model_id, carstbl.code_id 
                                         FROM carstbl INNER JOIN salestbl ON salestbl.car_id = carstbl.car_id 
                                         where carstbl.brand_id = $br_id and carstbl.model_id = $mo_id and carstbl.code_id = $co_id and salestbl.finance_type = 'نقدي' ";
                      $all_cach_sales = Yii::app()->db->createCommand($sql_cach_sales)->queryAll(); 
                      $cach_sales = count($all_cach_sales); 

                      $sql_bank_sales = "SELECT carstbl.brand_id, carstbl.model_id, carstbl.code_id 
                                         FROM carstbl INNER JOIN salestbl ON salestbl.car_id = carstbl.car_id 
                                         where carstbl.brand_id = $br_id and carstbl.model_id = $mo_id and carstbl.code_id = $co_id and salestbl.finance_type = 'بنك'";
                      $all_bank_sales = Yii::app()->db->createCommand($sql_bank_sales)->queryAll(); 
                      $bank_sales = count($all_bank_sales); 
                      
                      $sql_premium_sales = "SELECT carstbl.brand_id, carstbl.model_id, carstbl.code_id 
                                         FROM carstbl INNER JOIN salestbl ON salestbl.car_id = carstbl.car_id 
                                         where carstbl.brand_id = $br_id and carstbl.model_id = $mo_id and carstbl.code_id = $co_id and salestbl.finance_type = 'قسط مباشر'";
                      $all_premium_sales = Yii::app()->db->createCommand($sql_premium_sales)->queryAll(); 
                      $premium_sales = count($all_premium_sales);                       
           
                      $sql_dealer_sales = "SELECT carstbl.brand_id, carstbl.model_id, carstbl.code_id
                                         FROM carstbl INNER JOIN dealersalestbl ON dealersalestbl.car_id = carstbl.car_id 
                                         where carstbl.brand_id = $br_id and carstbl.model_id = $mo_id and carstbl.code_id = $co_id";
                      $all_dealer_sales = Yii::app()->db->createCommand($sql_dealer_sales)->queryAll(); 
                      $dealer_sales = count($all_dealer_sales);
                      
                      $sql_company_sales = "SELECT carstbl.brand_id, carstbl.model_id, carstbl.code_id
                                         FROM carstbl INNER JOIN companysalestbl ON companysalestbl.car_id = carstbl.car_id 
                                         where carstbl.brand_id = $br_id and carstbl.model_id = $mo_id and carstbl.code_id = $co_id";
                      $all_company_sales = Yii::app()->db->createCommand($sql_company_sales)->queryAll();  
                      $company_sales = count($all_company_sales);
                      
                      
                      $params[$k]['brand_name']= $all[$k]['brand_name'];
                      $params[$k]['model_name']= $all[$k]['model_name'];
                      $params[$k]['code_name']= $all[$k]['code_name']; 
                      $params[$k]['total_in']= $total_in;
                      $params[$k]['cach_sales']= $cach_sales;
                      $params[$k]['bank_sales']= $bank_sales;
                      $params[$k]['premium_sales']= $premium_sales;
                      $params[$k]['dealer_sales']= $dealer_sales;
                      $params[$k]['company_sales']= $company_sales;
                      $params[$k]['final_total']= ($total_in) - ($cach_sales + $bank_sales + $premium_sales + $dealer_sales + $company_sales);
                    }
                //    print_r("<pre>");
                  //  print_r($params);
                    
                    $this->render('getdata',array('params' => $params));   
                		
	
        
        }
}
