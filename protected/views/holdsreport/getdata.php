<?php 

     $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(    
        
                     array('name'=>'مسلسل', 'type' => 'raw' , 'value'=> '$data[\'hold_id\']'),  
                     array('name'=>'التاريخ', 'type' => 'raw' , 'value'=> '$data[\'hold_date\']'),  
                     array('name'=>'الماركة', 'type' => 'raw' , 'value'=> '$data[\'brand_name\']'),  
                     array('name'=>'الموديل', 'type' => 'raw' , 'value'=> '$data[\'model_name\']'),                       
                     array('name'=>'الكــود', 'type' => 'raw' , 'value'=> '$data[\'code_name\']'),    
                     array('name'=>'المندوب', 'type' => 'raw' , 'value'=> '$data[\'employee_name\']'),
                     array('name'=>'العميل', 'type' => 'raw' , 'value'=> '$data[\'customer_name\']'),        
                     array('name'=>'رقم الشاسيه', 'type' => 'raw' , 'value'=> '$data[\'chass_no\']'),    
                     array('name'=>'نوع البيع', 'type' => 'raw' , 'value'=> '$data[\'sale_type\']'),                                                    
                     array('name'=>'السعر', 'type' => 'raw' , 'value'=> '$data[\'price\']'),            
                     array('name'=>'مقدم الحجز', 'type' => 'raw' , 'value'=> '$data[\'hold_amount\']'),           
      
                    ),         
));


     ?>