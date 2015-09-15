<?php 
     $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(                     
                     'invoice_id',                      
                     'invoice_date', 
                     'brand_name',                            
                     'model_name',
                     'chass_no',
        /*    
'bank_name',
'transfer_amount',
'bank_down_amount',
'expenses',
'insurance_comp_name',
'insurance_type',
'insurance_amount',
'insurance_rate',
'customer_name',                */
                    ),         
));


     $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(                     
               /*      'invoice_id',                      
                     'invoice_date',                      
                     'brand_name', 
                     'model_name',
                     'chass_no',        */
'bank_name',
'transfer_amount',
'bank_down_amount',
'expenses',
'insurance_comp_name',
'insurance_type',
'insurance_amount',
'insurance_rate',
'customer_name',                
                    ),         
));     
     ?>