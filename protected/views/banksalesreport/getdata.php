<?php 
     $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(                                          
                      array('name'=>'مسلسل', 'type' => 'raw' , 'value'=> '$data[\'invoice_id\']'),  
                      array('name'=>'التاريخ', 'type' => 'raw' , 'value'=> '$data[\'invoice_date\']'),                                          
                      array('name'=>'الماركة', 'type' => 'raw' , 'value'=> '$data[\'brand_name\']'),  
                      array('name'=>'الموديل', 'type' => 'raw' , 'value'=> '$data[\'model_name\']'),  
                      array('name'=>'رقم الشاسيه', 'type' => 'raw' , 'value'=> '$data[\'chass_no\']'),                       
                      array('name'=>'سعر السيارة', 'type' => 'raw' , 'value'=> '$data[\'bank_price\']'),         
                      array('name'=>'البنك', 'type' => 'raw' , 'value'=> '$data[\'bank_name\']'),
                      array('name'=>'مبلغ التحويل', 'type' => 'raw' , 'value'=> '$data[\'transfer_amount\']'),
                      array('name'=>'مقدم البنك', 'type' => 'raw' , 'value'=> '$data[\'bank_down_amount\']'),        
                      array('name'=>'مصاريف ادارية', 'type' => 'raw' , 'value'=> '$data[\'expenses\']'),        
                      array('name'=>'شركة التأمين', 'type' => 'raw' , 'value'=> '$data[\'insurance_comp_name\']'),  
                      array('name'=>'نوع التأمين', 'type' => 'raw' , 'value'=> '$data[\'insurance_type\']'),  
                      array('name'=>'قيمة التأمين', 'type' => 'raw' , 'value'=> '$data[\'insurance_amount\']'), 
                      array('name'=>'نسبة التأمين', 'type' => 'raw' , 'value'=> '$data[\'insurance_rate\']'), 
                      array('name'=>'العميل', 'type' => 'raw' , 'value'=> '$data[\'customer_name\']'), 

         
                    ),         
));
  
     ?>