<?php 
     $this->widget('zii.widgets.grid.cgridview', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(                     
                     'invoice_id',                      
                     'invoice_date', 
                     'brand_name',                            
                     'model_name',
                     'chass_no',
                     'company_name',
                    ),         
));

     ?>