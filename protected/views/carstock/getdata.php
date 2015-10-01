<?php 
     $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    //'filter'=> array(''),         
    'columns'=>array(                     
                     'car_id',                      
                     array('name'=>'الماركة', 'type' => 'raw' , 'value'=> '$data[\'brand_name\']'),  
                     array('name'=>'الموديل', 'type' => 'raw' , 'value'=> '$data[\'model_name\']'),                     
                     array('name'=>'الكود', 'type' => 'raw' , 'value'=> '$data[\'code_name\']'),  
                     array('name'=>'اللون', 'type' => 'raw' , 'value'=> '$data[\'color_name\']'),  
                     array('name'=>'السنة', 'type' => 'raw' , 'value'=> '$data[\'car_year\']'),  
                     array('name'=>'الشاسيه', 'type' => 'raw' , 'value'=> '$data[\'chass_no\']'),                       
                     //array('name'=>'مكان التخزين', 'type' => 'raw' , 'value'=> '$data[\'store_name\']'),
                     array('name'=>'السعر الرسمي', 'type' => 'raw' , 'value'=> '$data[\'off_price\']'),                     
                     array('name'=>'مبيعات العملاء','type' => 'raw','value'=>'CHtml::link($data[\'car_id\'],array("/salestbl/create","car_id"=>$data[\'car_id\'],"branch_id"=>$_REQUEST["id"]))'), 
                     array('name'=>'تحويل لفرع اخر','type' => 'raw','value'=>'CHtml::link($data[\'car_id\'],array("/innersaletbl/create","car_id"=>$data[\'car_id\'],"branch_id"=>$_REQUEST["id"]))'), 
                     array('name'=>'بيع شركات','type' => 'raw','value'=>'CHtml::link($data[\'car_id\'],array("/companysalestbl/create","car_id"=>$data[\'car_id\'],"branch_id"=>$_REQUEST["id"]))'), 
                     array('name'=>'مبيعات التجاري','type' => 'raw','value'=>'CHtml::link($data[\'car_id\'],array("/dealersalestbl/create","car_id"=>$data[\'car_id\'],"branch_id"=>$_REQUEST["id"]))'),                      
                     array('name'=>'حجز سيارة','type' => 'raw','value'=>'CHtml::link($data[\'car_id\'],array("/holdtbl/create","car_id"=>$data[\'car_id\'],"branch_id"=>$_REQUEST["id"]))'),                      
                    ),         
));
?>