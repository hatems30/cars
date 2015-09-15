<?php 
     $this->widget('zii.widgets.grid.cgridview', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(                     
                     'car_id',                      
                     'brand_name', 
                     'model_name',
                     'code_name',
                     'color_name',   
                     'car_year',
                     'chass_no',
                     'store_name',
                     'off_price',
                     array('name'=>'بيع مباشر','type' => 'raw','value'=>'CHtml::link($data[\'car_id\'],array("/salestbl/create","car_id"=>$data[\'car_id\'],"branch_id"=>$_REQUEST["id"]))'), 
                     array('name'=>'تحويل لفرع اخر','type' => 'raw','value'=>'CHtml::link($data[\'car_id\'],array("/innersaletbl/create","car_id"=>$data[\'car_id\'],"branch_id"=>$_REQUEST["id"]))'), 
                     array('name'=>'بيع شركات','type' => 'raw','value'=>'CHtml::link($data[\'car_id\'],array("/companysalestbl/create","car_id"=>$data[\'car_id\'],"branch_id"=>$_REQUEST["id"]))'), 
                     array('name'=>'بيع موزعين','type' => 'raw','value'=>'CHtml::link($data[\'car_id\'],array("/dealersalestbl/create","car_id"=>$data[\'car_id\'],"branch_id"=>$_REQUEST["id"]))'), 
                     array('name'=>'حجز سيارة','type' => 'raw','value'=>'CHtml::link($data[\'car_id\'],array("/holdtbl/create","car_id"=>$data[\'car_id\'],"branch_id"=>$_REQUEST["id"]))'), 
                    ),         
));
?>