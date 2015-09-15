<?php 
     $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(                     
                     'invoice_id',                      
                     'invoice_date',                      
                     'brand_name', 
                     'model_name',
                     'chass_no',
                     'cach_price',
                     'insurance_comp_name',
                     'insurance_type',
                     'insurance_amount',
                     'insurance_rate',                     
                    ),         
));
?>