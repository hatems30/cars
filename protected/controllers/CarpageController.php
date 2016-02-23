<?php

class CarpageController extends Controller
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
                    $car_row = Carstbl::model()->findByAttributes(array('chass_no'=>$id));
                    $car = $car_row['car_id'];
                    if (empty($car))
                    {
                         echo "<div class='col-sm-8'><b><font size='5' color='red'>عفوا لا توجد سيارة بهذا الرقم</font></b></div>";
                        exit;
                    }

                 $sql = "SELECT
carstbl.car_id,
brands.brand_name,
carmodel.model_name,
carcode.code_name,
carstbl.car_spec,
colors.color_name,
carstbl.car_year,
carstbl.chass_no,
suppliers.supplier_name,
carstbl.add_date
FROM
carstbl
INNER JOIN carmodel ON carmodel.model_id = carstbl.model_id
INNER JOIN brands ON carstbl.brand_id = brands.brand_id AND carmodel.brand_id = brands.brand_id
INNER JOIN carcode ON carcode.brand_id = brands.brand_id AND carcode.model_id = carmodel.model_id AND carstbl.code_id = carcode.code_id
INNER JOIN colors ON carstbl.color_id = colors.color_id
INNER JOIN suppliers ON carstbl.supplier_id = suppliers.supplier_id AND carstbl.supplier_id = suppliers.supplier_id
where carstbl.chass_no = $id";                
                 $dataProvider=new CSqlDataProvider($sql, 
                            array(
                           'keyField' => 'car_id',
                           // 'totalItemCount'=>$count,
                            'sort'=>array(
                            'attributes'=>array(
                            'carstbl.car_id',
        ),
    ),
    'pagination'=>array(
        'pageSize'=>1000,
    ),
));
//echo "<pre>";
//print_r($dataProvider->data[0]['car_id']);
//exit;
//----------------------------------------------المبيعات----------------------------------------
                 
                 $sql1 = "
SELECT salestbl.invoice_id, salestbl.invoice_date, employees.employee_name, customers.customer_name as cust_name , salestbl.finance_type as sales_type
FROM salestbl
INNER JOIN employees ON salestbl.employee_id = employees.employee_id
INNER JOIN customers ON salestbl.customer_id = customers.customer_id
where  salestbl.car_id = $car       
UNION
SELECT companysalestbl.invoice_id, companysalestbl.invoice_date, employees.employee_name, companiestbl.company_name as cust_name , 'شركات' as sales_type
FROM companysalestbl
INNER JOIN employees ON companysalestbl.employee_id = employees.employee_id
INNER JOIN companiestbl ON companysalestbl.company_id = companiestbl.company_id
where  companysalestbl.car_id = $car       
UNION
SELECT dealersalestbl.invoice_id, dealersalestbl.invoice_date, employees.employee_name, dealerstbl.dealer_name as cust_name , 'تجاري' as sales_type
FROM dealersalestbl
INNER JOIN employees ON dealersalestbl.employee_id = employees.employee_id
INNER JOIN dealerstbl ON dealersalestbl.dealer_id = dealerstbl.dealer_id
where  dealersalestbl.car_id = $car";
 
                 $dataProvider1=new CSqlDataProvider($sql1, 
                            array(
                           'keyField' => 'invoice_id',
                           // 'totalItemCount'=>$count,
                            'sort'=>array(
                            'attributes'=>array(
                            'salestbl.invoice_id',
        ),
    ),
    'pagination'=>array(
        'pageSize'=>1000,
    ),
));  
//--------------------------------------------------------الاوراق-------------------------------------------------                 

                 $sql2 = "SELECT
paperstbl.paper_id,
paperstbl.paper_date,
paperstbl.paper_status,
paperstbl.notes
FROM
paperstbl
where paperstbl.car_id = $car";    
                 $dataProvider2=new CSqlDataProvider($sql2, 
                            array(
                           'keyField' => 'paper_id',
                           // 'totalItemCount'=>$count,
                            'sort'=>array(
                            'attributes'=>array(
                            'paperstbl.paper_id',
        ),
    ),
    'pagination'=>array(
        'pageSize'=>1000,
    ),
));    
//------------------------------------------------------------التراخيص-------------------------------------------                 

                 $sql3 = "SELECT
licensetbl.License_id,
licensetbl.license_date,
traffictbl.traffic_name,
employees.employee_name
FROM
licensetbl
INNER JOIN employees ON licensetbl.employee_id = employees.employee_id 
INNER JOIN traffictbl ON licensetbl.traffic_id = traffictbl.traffic_id
where licensetbl.car_id = $car";    
                 $dataProvider3=new CSqlDataProvider($sql3, 
                            array(
                           'keyField' => 'License_id',
                           // 'totalItemCount'=>$count,
                            'sort'=>array(
                            'attributes'=>array(
                            'licensetbl.License_id',
        ),
    ),
    'pagination'=>array(
        'pageSize'=>1000,
    ),
));        

//------------------------------------------------------------التحويل-------------------------------------------                 

                 $sql4 = "SELECT
innersaletbl.trs_id,
innersaletbl.trs_date,
from_br.branch_name as from_name ,
to_br.branch_name as to_name ,
employees.employee_name
FROM
innersaletbl
INNER JOIN branchs as from_br ON innersaletbl.from_branch_id = from_br.branch_id       
INNER JOIN branchs as to_br ON innersaletbl.to_branch_id = to_br.branch_id 
INNER JOIN employees  ON innersaletbl.employee_id = employees.employee_id
where innersaletbl.car_id = $car
ORDER BY innersaletbl.trs_date
";    
                 $dataProvider4=new CSqlDataProvider($sql4, 
                            array(
                           'keyField' => 'trs_id',
                           // 'totalItemCount'=>$count,
                            'sort'=>array(
                            'attributes'=>array(
                            'innersalestbl.trs_id',
        ),
    ),
    'pagination'=>array(
        'pageSize'=>1000,
    ),
));                   
                $this->render('getdata',array('dataProvider' => $dataProvider,'dataProvider1' => $dataProvider1 ,'dataProvider2' => $dataProvider2 , 'dataProvider3' => $dataProvider3 , 'dataProvider4' => $dataProvider4 ));
                		
	}
        
}
