<div class="col-sm-12" dir="rtl">
    <font size="5">  مبيعات النقدي</font>
</div>
<?php 
     $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider1,
    'columns'=>array(                     
                     
                     array('name'=>'مسلسل', 'type' => 'raw' , 'value'=> '$data[\'invoice_id\']'), 
                     array('name'=>'التاريخ', 'type' => 'raw' , 'value'=> '$data[\'invoice_date\']'),         
                     array('name'=>'الماركة', 'type' => 'raw' , 'value'=> '$data[\'brand_name\']'), 
                     array('name'=>'الموديل', 'type' => 'raw' , 'value'=> '$data[\'model_name\']'), 
                     array('name'=>'رقم الشاسيه', 'type' => 'raw' , 'value'=> '$data[\'chass_no\']'), 
                     array('name'=>'السعر', 'type' => 'raw' , 'value'=> '$data[\'cach_price\']'), 
                     array('name'=>'المعامل', 'type' => 'raw' , 'value'=> '$data[\'factor\']'),
                     array('name'=>'الوزن النسبي للسيارة', 'type' => 'raw' , 'value'=> '$data[\'car_factor\']'),
                     array('name'=>'عدد نقاط السيارة', 'type' => 'raw' , 'value'=> '$data[\'car_points\']'),                                                                                                  
                    ),            
));
  $total_cach_points = 0 ;    
foreach($dataProvider1->getData() as $data)
{
   $total_cach_points = $total_cach_points + $data['car_points'];    
}


?>
<div class="col-sm-2">
    <?php echo CHtml::textField('total_cach_points', $total_cach_points , array('class'=>'form-control'));     ?>
</div>

<div class="col-sm-12" dir="rtl">
    <font size="5">  مبيعات القسط المباشر</font>
</div>    
<?php
     $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider2,
    'columns'=>array(                     
                     
                     array('name'=>'مسلسل', 'type' => 'raw' , 'value'=> '$data[\'invoice_id\']'), 
                     array('name'=>'التاريخ', 'type' => 'raw' , 'value'=> '$data[\'invoice_date\']'),         
                     array('name'=>'الماركة', 'type' => 'raw' , 'value'=> '$data[\'brand_name\']'), 
                     array('name'=>'الموديل', 'type' => 'raw' , 'value'=> '$data[\'model_name\']'), 
                     array('name'=>'رقم الشاسيه', 'type' => 'raw' , 'value'=> '$data[\'chass_no\']'), 
                     array('name'=>'السعر', 'type' => 'raw' , 'value'=> '$data[\'cach_price\']'), 
                     array('name'=>'المعامل', 'type' => 'raw' , 'value'=> '$data[\'factor\']'),
                     array('name'=>'الوزن النسبي للسيارة', 'type' => 'raw' , 'value'=> '$data[\'car_factor\']'),
                     array('name'=>'عدد نقاط السيارة', 'type' => 'raw' , 'value'=> '$data[\'car_points\']'),                                                                                                    
                    ),         
));    
  $total_premium_points = 0 ;    
foreach($dataProvider2->getData() as $data)
{
   $total_premium_points = $total_premium_points + $data['car_points'];    
}

 ?>

<div class="col-sm-2">
    <?php echo CHtml::textField('total_premium_points', $total_premium_points , array('class'=>'form-control'));     ?>
</div>


<div class="col-sm-12" dir="rtl">
    <font size="5">  مبيعات البنوك</font>
</div>
<?php
     $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider3,
    'columns'=>array(                     
                     
                        array('name'=>'مسلسل', 'type' => 'raw' , 'value'=> '$data[\'invoice_id\']'), 
                        array('name'=>'التاريخ', 'type' => 'raw' , 'value'=> '$data[\'invoice_date\']'),         
                        array('name'=>'الماركة', 'type' => 'raw' , 'value'=> '$data[\'brand_name\']'), 
                        array('name'=>'الموديل', 'type' => 'raw' , 'value'=> '$data[\'model_name\']'), 
                        array('name'=>'رقم الشاسيه', 'type' => 'raw' , 'value'=> '$data[\'chass_no\']'), 
                        array('name'=>'السعر', 'type' => 'raw' , 'value'=> '$data[\'bank_price\']'), 
                        array('name'=>'البنك', 'type' => 'raw' , 'value'=> '$data[\'bank_name\']'), 
                        array('name'=>'معامل البنك', 'type' => 'raw' , 'value'=> '$data[\'factor\']'),
                        array('name'=>'الوزن النسبي للسيارة', 'type' => 'raw' , 'value'=> '$data[\'car_factor\']'),
                        array('name'=>'عدد نقاط السيارة', 'type' => 'raw' , 'value'=> '$data[\'car_points\']'),                                                                                                    
                    ),         
));       
  $total_banks_points = 0 ;    
foreach($dataProvider3->getData() as $data)
{
   $total_banks_points = $total_banks_points + $data['car_points'];    
}  
?>
<div class="row">    
<div class="col-sm-2">
    <?php echo CHtml::textField('total_banks_points', $total_banks_points , array('class'=>'form-control'));     ?>
</div>
</div>
<?php 

$total_points = $total_cach_points + $total_premium_points + $total_banks_points;

?>
</br>
<div class="row">
<div class="col-sm-2">
    <?php echo CHtml::textField('total_points', $total_points , array('class'=>'form-control'));     ?>
</div>    
</div>