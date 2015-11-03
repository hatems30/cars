</br>
<div class="col-sm-10" dir =rtl>    
    <b> <font size="4" color="blue">مبيعات النقدي</font></b>
</div>
<?php 
     $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider1,
    'columns'=>array(                                                               
        array('name'=>'مسلسل', 'type' => 'raw' , 'value'=> '$data[\'invoice_id\']'),                     
        array('name'=>'التاريخ', 'type' => 'raw' , 'value'=> '$data[\'invoice_date\']'),                              
        array('name'=>'الماركة', 'type' => 'raw' , 'value'=> '$data[\'brand_name\']'),                      
        array('name'=>'الموديل', 'type' => 'raw' , 'value'=> '$data[\'model_name\']'),                      
        array('name'=>'الكود', 'type' => 'raw' , 'value'=> '$data[\'code_name\']'), 
        array('name'=>'رقم الشاسيه', 'type' => 'raw' , 'value'=> '$data[\'chass_no\']'),                     
        array('name'=>'الوزن النسبي', 'type' => 'raw' , 'value'=> '$data[\'factor\']'),                                                        
        array('name'=>'السعر', 'type' => 'raw' , 'value'=> '$data[\'car_price\']'),                      
        array('name'=>'العميل', 'type' => 'raw' , 'value'=> '$data[\'customer_name\']'),                       
        array('name'=>'المعامل', 'type' => 'raw' , 'value'=> '$data[\'cach_factor\']'),                     
        array('name'=>'عدد نقاط السيارة', 'type' => 'raw' , 'value'=> '$data[\'car_points\']'),                                                                                                  
                    ),            
));
     
  $total_cach_points = 0 ;    
foreach($dataProvider1->getData() as $data)
{
   $total_cach_points = $total_cach_points + $data['car_points'];    
}   
?>
<div class="row">
        
    <div class="col-sm-2" dir =rtl>    
        <?php echo CHtml::textField('total_cach_points', $total_cach_points , array('class'=>'form-control'));     ?>    
    </div>  
    <div class="col-sm-2">
        <b>اجمالي نقاط مبيعات النقدي</b>
    </div>
  
</div>

</br>

<div class="col-sm-10" dir="rtl">    
    <b> <font size="4" color="blue">مبيعات القسط المباشر</font></b>
</div> 
<?php
     $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider2,
    'columns'=>array(                     
        array('name'=>'مسلسل', 'type' => 'raw' , 'value'=> '$data[\'invoice_id\']'),                     
        array('name'=>'التاريخ', 'type' => 'raw' , 'value'=> '$data[\'invoice_date\']'),                              
        array('name'=>'الماركة', 'type' => 'raw' , 'value'=> '$data[\'brand_name\']'),                      
        array('name'=>'الموديل', 'type' => 'raw' , 'value'=> '$data[\'model_name\']'),                      
        array('name'=>'الكود', 'type' => 'raw' , 'value'=> '$data[\'code_name\']'), 
        array('name'=>'رقم الشاسيه', 'type' => 'raw' , 'value'=> '$data[\'chass_no\']'),                     
        array('name'=>'الوزن النسبي', 'type' => 'raw' , 'value'=> '$data[\'factor\']'),                                                        
        array('name'=>'السعر', 'type' => 'raw' , 'value'=> '$data[\'car_price\']'),                      
        array('name'=>'العميل', 'type' => 'raw' , 'value'=> '$data[\'customer_name\']'),                       
        array('name'=>'المعامل', 'type' => 'raw' , 'value'=> '$data[\'premium_factor\']'),                     
        array('name'=>'عدد نقاط السيارة', 'type' => 'raw' , 'value'=> '$data[\'car_points\']'),                                                                                                    
                    ),         
));    
  $total_premium_points = 0 ;    
foreach($dataProvider2->getData() as $data)
{
   $total_premium_points = $total_premium_points + $data['car_points'];    
}

 ?>
<div class="row">
        
    <div class="col-sm-2" dir =rtl>    
        <?php echo CHtml::textField('total_premium_points', $total_premium_points , array('class'=>'form-control'));     ?>    
    </div>  
    <div class="col-sm-2">
        <b>اجمالي نقاط  القسط المباشر</b>
    </div>
  
</div>
<div class="col-sm-10" dir="rtl">    
    <b> <font size="4" color="blue">مبيعات البنوك</font></b>
</div>
<?php
     $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider3,
    'columns'=>array(                     
                     
                        
        array('name'=>'مسلسل', 'type' => 'raw' , 'value'=> '$data[\'invoice_id\']'),                         
        array('name'=>'التاريخ', 'type' => 'raw' , 'value'=> '$data[\'invoice_date\']'),                                 
        array('name'=>'الماركة', 'type' => 'raw' , 'value'=> '$data[\'brand_name\']'),                         
        array('name'=>'الموديل', 'type' => 'raw' , 'value'=> '$data[\'model_name\']'), 
        array('name'=>'الموديل', 'type' => 'raw' , 'value'=> '$data[\'code_name\']'),                         
        array('name'=>'رقم الشاسيه', 'type' => 'raw' , 'value'=> '$data[\'chass_no\']'),                         
        array('name'=>'السعر', 'type' => 'raw' , 'value'=> '$data[\'car_price\']'),                         
        array('name'=>'البنك', 'type' => 'raw' , 'value'=> '$data[\'bank_name\']'),                         
        array('name'=>'معامل البنك', 'type' => 'raw' , 'value'=> '$data[\'bank_factor\']'),                        
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
        
    <div class="col-sm-2" dir =rtl>    
        <?php echo CHtml::textField('total_banks_points', $total_banks_points , array('class'=>'form-control'));     ?>    
    </div>  
    <div class="col-sm-2">
        <b>اجمالي نقاط مبيعات البنوك </b>
    </div>
  
</div>

<div class="col-sm-10" dir="rtl">    
    <b> <font size="4" color="blue">مبيعات التجاري</font></b>
</div>
<?php
     $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider4,
    'columns'=>array(                     
                        array('name'=>'مسلسل', 'type' => 'raw' , 'value'=> '$data[\'invoice_id\']'), 
                        array('name'=>'التاريخ', 'type' => 'raw' , 'value'=> '$data[\'invoice_date\']'),         
                        array('name'=>'الماركة', 'type' => 'raw' , 'value'=> '$data[\'brand_name\']'), 
                        array('name'=>'الموديل', 'type' => 'raw' , 'value'=> '$data[\'model_name\']'), 
                        array('name'=>'الكود', 'type' => 'raw' , 'value'=> '$data[\'code_name\']'),       
                        array('name'=>'رقم الشاسيه', 'type' => 'raw' , 'value'=> '$data[\'chass_no\']'), 
                        array('name'=>'السعر', 'type' => 'raw' , 'value'=> '$data[\'price\']'),                                 
                        array('name'=>'الموزع', 'type' => 'raw' , 'value'=> '$data[\'dealer_name\']'),
                        array('name'=>'الوزن النسبي', 'type' => 'raw' , 'value'=> '$data[\'factor\']'),    
                        array('name'=>'معامل البيع', 'type' => 'raw' , 'value'=> '$data[\'dealer_factor\']'),  
                        array('name'=>'عدد النقاط', 'type' => 'raw' , 'value'=> '$data[\'car_points\']'),   
                                                                                                
                    ),         
)); 
  $total_dealers_points = 0 ;    
foreach($dataProvider4->getData() as $data)
{
   $total_dealers_points = $total_dealers_points + $data['car_points'];    
}       
?>
<div class="row">
        
    <div class="col-sm-2" dir =rtl>    
        <?php echo CHtml::textField('total_dealers_points', $total_dealers_points , array('class'=>'form-control'));     ?>    
    </div>  
    <div class="col-sm-2">
        <b>اجمالي نقاط مبيعات التجاري </b>
    </div>
  
</div>

<div class="col-sm-10" dir="rtl">    
    <b> <font size="4" color="blue">مبيعات الشركات</font></b>
</div>
<?php
     $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider5,
    'columns'=>array(                     
                     
                        array('name'=>'مسلسل', 'type' => 'raw' , 'value'=> '$data[\'invoice_id\']'), 
                        array('name'=>'التاريخ', 'type' => 'raw' , 'value'=> '$data[\'invoice_date\']'),         
                        array('name'=>'الماركة', 'type' => 'raw' , 'value'=> '$data[\'brand_name\']'), 
                        array('name'=>'الموديل', 'type' => 'raw' , 'value'=> '$data[\'model_name\']'), 
                        array('name'=>'الكود', 'type' => 'raw' , 'value'=> '$data[\'code_name\']'),       
                        array('name'=>'رقم الشاسيه', 'type' => 'raw' , 'value'=> '$data[\'chass_no\']'), 
                        array('name'=>'السعر', 'type' => 'raw' , 'value'=> '$data[\'price\']'),                                 
                        array('name'=>'الشـركة', 'type' => 'raw' , 'value'=> '$data[\'company_name\']'),
                        array('name'=>'الوزن النسبي', 'type' => 'raw' , 'value'=> '$data[\'factor\']'),    
                        array('name'=>'معامل البيع', 'type' => 'raw' , 'value'=> '$data[\'company_factor\']'),  
                        array('name'=>'عدد النقاط', 'type' => 'raw' , 'value'=> '$data[\'car_points\']'),          
                    ),         
)); 
  $total_comp_points = 0 ;    
foreach($dataProvider5->getData() as $data)
{
   $total_comp_points = $total_comp_points + $data['car_points'];    
} 

?>
<div class="row">
        
    <div class="col-sm-2" dir =rtl>    
        <?php echo CHtml::textField('total_comp_points', $total_comp_points , array('class'=>'form-control'));     ?>    
    </div>  
    <div class="col-sm-2">
        <b>اجمالي نقاط مبيعات الشركات </b>
    </div>
  
</div>

<?php 
$total_points = $total_cach_points + $total_premium_points + $total_banks_points + $total_dealers_points + $total_comp_points ;
?>
<div class="row">
        
    <div class="col-sm-2" dir =rtl>    
        <?php echo CHtml::textField('total_points', $total_points , array('class'=>'form-control'));     ?>    
    </div>  
    <div class="col-sm-2">
        <b>اجمالي النقاط </b>
    </div>
  
</div>