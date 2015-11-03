<?php  
     $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(                                         
        array('name'=>'مسلسل', 'type' => 'raw' , 'value'=> '$data[\'car_id\']'),                      
        array('name'=>'الماركة', 'type' => 'raw' , 'value'=> '$data[\'brand_name\']'),                      
        array('name'=>'الموديل', 'type' => 'raw' , 'value'=> '$data[\'model_name\']'),                      
        array('name'=>'الكود', 'type' => 'raw' , 'value'=> '$data[\'code_name\']'),        
        array('name'=>'اللون', 'type' => 'raw' , 'value'=> '$data[\'color_name\']'),                             
        array('name'=>'السنة', 'type' => 'raw' , 'value'=> '$data[\'car_year\']'),                                     
        array('name'=>'رقم الشاسيه', 'type' => 'raw' , 'value'=> '$data[\'chass_no\']'), 
        array('name'=>'رقم الموتور', 'type' => 'raw' , 'value'=> '$data[\'motor_no\']'),                      
        array('name'=>'تاريخ الاستلام', 'type' => 'raw' , 'value'=> '$data[\'add_date\']'),                           
        array('name'=>'سعر التكلفة', 'type' => 'raw' , 'value'=> '$data[\'cost_price\']'),                                     
        array('name'=>'السعر الرسمي', 'type' => 'raw' , 'value'=> '$data[\'off_price\']'),
         
                     
                    ),         
      
));

     ?>