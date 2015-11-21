<?php  
     $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array( 
  
         
        
                     array('name'=>'مسلسل', 'type' => 'raw' , 'value'=> '$data[\'complaint_id\']'), 
                     array('name'=>'التاريخ', 'type' => 'raw' , 'value'=> '$data[\'complaint_date\']'), 
                     array('name'=>'الموظف المسئول', 'type' => 'raw' , 'value'=> '$data[\'employee_name\']'), 
                     array('name'=>'العميل', 'type' => 'raw' , 'value'=> '$data[\'customer_name\']'),        
                     array('name'=>'بيانات السيارة', 'type' => 'raw' , 'value'=> '$data[\'car_data\']'),                
                     array('name'=>'تفاصيل الشكوى', 'type' => 'raw' , 'value'=> '$data[\'complaint_detail\']'),                      
                     array('name'=>'ملاحظات', 'type' => 'raw' , 'value'=> '$data[\'notes\']'), 
               //      array('name'=>'طريقة الاتصال', 'type' => 'raw' , 'value'=> '$data[\'status\']'),
                     //array('name'=>'تسجيل المتابعة','type' => 'raw','value'=>'CHtml::link($data[\'call_id\'],array("/callstbl/update","id"=>$data[\'call_id\']))'),                               
                    ),         
      
));

     ?>