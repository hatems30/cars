<?php 
    
  
if (count($dataProvider->getData()) != 0 )
{
     $this->widget('zii.widgets.grid.cgridview', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(
 'car_id', 'brand_name', 'model_name','color_name', )    
));   
    
}
else
{
    
    echo '<b><font color="red">عفوا السيارة مباعة من قبل</font>';
}
?>