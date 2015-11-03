<?php 

     $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(    
        
                     array('name'=>'مسلسل', 'type' => 'raw' , 'value'=> '$data[\'offer_id\']'),  
                     array('name'=>'التاريخ', 'type' => 'raw' , 'value'=> '$data[\'offer_date\']'),  
                     array('name'=>'الماركة', 'type' => 'raw' , 'value'=> '$data[\'brand_name\']'),  
                     array('name'=>'الموديل', 'type' => 'raw' , 'value'=> '$data[\'model_name\']'),                       
                     array('name'=>'الكــود', 'type' => 'raw' , 'value'=> '$data[\'code_name\']'),    
                     array('name'=>'المندوب', 'type' => 'raw' , 'value'=> '$data[\'employee_name\']'),    
                     array('name'=>'البنك', 'type' => 'raw' , 'value'=> '$data[\'bank_name\']'),    
                     array('name'=>'موظف البنك', 'type' => 'raw' , 'value'=> '$data[\'banker\']'),                                                    
                     array('name'=>'العميل', 'type' => 'raw' , 'value'=> '$data[\'customer_name\']'),
                     array('name'=>'حالة العرض', 'type' => 'raw' , 'value'=> '$data[\'offer_status\']'),            
      
                    ),         
));


     ?>