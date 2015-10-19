<?php 
     $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array( 
  
         
        
                     array('name'=>'مسلسل', 'type' => 'raw' , 'value'=> '$data[\'call_id\']'), 
                     array('name'=>'التاريخ', 'type' => 'raw' , 'value'=> '$data[\'call_date\']'), 
                     array('name'=>'الوقت', 'type' => 'raw' , 'value'=> '$data[\'call_time\']'), 
                     array('name'=>'بيانات السيارة', 'type' => 'raw' , 'value'=> '$data[\'car_data\']'), 
                     array('name'=>'موظف الاتصال', 'type' => 'raw' , 'value'=> '$data[\'employee_name\']'), 
                     array('name'=>'العميل', 'type' => 'raw' , 'value'=> '$data[\'customer\']'), 
                     array('name'=>'الموبايل', 'type' => 'raw' , 'value'=> '$data[\'mobile\']'),       
                     array('name'=>'المنطقة', 'type' => 'raw' , 'value'=> '$data[\'area\']'),
                     array('name'=>'طريقة الاتصال', 'type' => 'raw' , 'value'=> '$data[\'how\']'),
                     array('name'=>'تسجيل المتابعة','type' => 'raw','value'=>'CHtml::link($data[\'call_id\'],array("/callstbl/update","id"=>$data[\'call_id\']))'), 
         
                     
                    ),         
      
));

     ?>