<?php 
     $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(                                          
                     array('name'=>'مسلسل', 'type' => 'raw' , 'value'=> '$data[\'invoice_id\']'), 
                     array('name'=>'التاريخ', 'type' => 'raw' , 'value'=> '$data[\'invoice_date\']'), 
                     array('name'=>'الماركة', 'type' => 'raw' , 'value'=> '$data[\'brand_name\']'), 
                     array('name'=>'الموديل', 'type' => 'raw' , 'value'=> '$data[\'model_name\']'), 
                     array('name'=>'رقم الشاسيه', 'type' => 'raw' , 'value'=> '$data[\'chass_no\']'), 
                     array('name'=>'العميل', 'type' => 'raw' , 'value'=> '$data[\'company_name\']'),         
                     
                    ),         
));

     ?>