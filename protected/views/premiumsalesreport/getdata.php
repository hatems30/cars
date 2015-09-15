<?php 
     $this->widget('zii.widgets.grid.cgridview', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(                     
                     'invoice_id',                      
                     'invoice_date', 
                     'brand_name',                            
                     'model_name',
                     'chass_no',
                     'downpayment',
                     'monthly_premium',
                     'months_count',
                      'interest_rate',         
'insurance_comp_name',
'insurance_type',
'insurance_amount',
'insurance_rate',
'customer_name',          
                    ),         
));
  
     ?>