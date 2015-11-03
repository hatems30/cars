<?php  
     $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array( 
  
         
        
                     array('name'=>'مسلسل', 'type' => 'raw' , 'value'=> '$data[\'visit_id\']'), 
                     array('name'=>'التاريخ', 'type' => 'raw' , 'value'=> '$data[\'visit_date\']'), 
                     array('name'=>'العميل', 'type' => 'raw' , 'value'=> '$data[\'customer_name\']'), 
                     array('name'=>'بيانات السيارة', 'type' => 'raw' , 'value'=> '$data[\'car_data\']'),                
                     array('name'=>'الموظف المسئول', 'type' => 'raw' , 'value'=> '$data[\'employee_name\']'), 
                     array('name'=>'تعليق الموظف المسئول', 'type' => 'raw' , 'value'=> '$data[\'emp_comment\']'), 
               //      array('name'=>'طريقة الاتصال', 'type' => 'raw' , 'value'=> '$data[\'status\']'),
                     //array('name'=>'تسجيل المتابعة','type' => 'raw','value'=>'CHtml::link($data[\'call_id\'],array("/callstbl/update","id"=>$data[\'call_id\']))'),                               
                    ),         
      
));

     ?>