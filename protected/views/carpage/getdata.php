<?php  
     $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(           
                     array('name'=>'كود', 'type' => 'raw' , 'value'=> '$data[\'car_id\']'), 
                     array('name'=>'الماركة', 'type' => 'raw' , 'value'=> '$data[\'brand_name\']'), 
                     array('name'=>'الموديل', 'type' => 'raw' , 'value'=> '$data[\'model_name\']'), 
                     array('name'=>'كود السيارة', 'type' => 'raw' , 'value'=> '$data[\'code_name\']'),        
                     array('name'=>'مواصفات السيارة', 'type' => 'raw' , 'value'=> '$data[\'car_spec\']'),                
                     array('name'=>'اللون', 'type' => 'raw' , 'value'=> '$data[\'color_name\']'), 
                     array('name'=>'السنة', 'type' => 'raw' , 'value'=> '$data[\'car_year\']'),       
                     array('name'=>'المورد', 'type' => 'raw' , 'value'=> '$data[\'supplier_name\']'),                
                     array('name'=>'تاريخ الاضافة', 'type' => 'raw' , 'value'=> '$data[\'add_date\']'),                                                     
                    ),         
      
));

     ?>

<?php  
     $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider1,
    'columns'=>array( 

                     array('name'=>'م', 'type' => 'raw' , 'value'=> '$data[\'invoice_id\']'), 
                     array('name'=>'تاريخ البيع', 'type' => 'raw' , 'value'=> '$data[\'invoice_date\']'), 
                     array('name'=>'الموظف', 'type' => 'raw' , 'value'=> '$data[\'employee_name\']'), 
                     array('name'=>'العميل', 'type' => 'raw' , 'value'=> '$data[\'cust_name\']'),        
                     array('name'=>'نوع البيع', 'type' => 'raw' , 'value'=> '$data[\'sales_type\']'),                                                                   
                    ),         
      
));

     ?>

<?php  
     $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider2,
    'columns'=>array( 

                     array('name'=>'م', 'type' => 'raw' , 'value'=> '$data[\'paper_id\']'), 
                     array('name'=>'تاريخ تبليغ الاوراق', 'type' => 'raw' , 'value'=> '$data[\'paper_date\']'), 
                     array('name'=>'حالة الاوراق', 'type' => 'raw' , 'value'=> '$data[\'paper_status\']'), 
                     array('name'=>'ملاحظات', 'type' => 'raw' , 'value'=> '$data[\'notes\']'),                                                                                             
                    ),         
      
));

     ?>


<?php  
     $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider3,
    'columns'=>array( 

                     array('name'=>'م', 'type' => 'raw' , 'value'=> '$data[\'License_id\']'), 
                     array('name'=>'تاريخ الترخيص', 'type' => 'raw' , 'value'=> '$data[\'license_date\']'), 
                     array('name'=>'وحدة المرور', 'type' => 'raw' , 'value'=> '$data[\'traffic_name\']'), 
                     array('name'=>'الموظف المسئول', 'type' => 'raw' , 'value'=> '$data[\'employee_name\']'),                                                                                             
                    ),         
      
));

     ?>