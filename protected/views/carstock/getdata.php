<?php 

$user_name = Yii::app()->user->username;
$emps = User::model()->findBySql("SELECT `user`.branch_id FROM `user` where `user`.username = '$user_name'");
$branch = $_REQUEST['id'] ;
if($branch==$emps['branch_id'])
{    
    
    
     $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    //'filter'=> array(''),   
    //"rowCssClassExpression=">'$data->deposit_type',     
    'columns'=>array(                     
                     'car_id',                      
                     array('name'=>'الماركة', 'type' => 'raw' , 'value'=> '$data[\'brand_name\']'),  
                     array('name'=>'الموديل', 'type' => 'raw' , 'value'=> '$data[\'model_name\']'),                     
                     array('name'=>'الكود', 'type' => 'raw' , 'value'=> '$data[\'code_name\']'),  
                     array('name'=>'اللون', 'type' => 'raw' , 'value'=> '$data[\'color_name\']'),  
                     array('name'=>'السنة', 'type' => 'raw' , 'value'=> '$data[\'car_year\']'),  
                     array('name'=>'الشاسيه', 'type' => 'raw' , 'value'=> '$data[\'chass_no\']'),                       
                     //array('name'=>'مكان التخزين', 'type' => 'raw' , 'value'=> '$data[\'store_name\']'),
                     array('name'=>'سعر البيع', 'type' => 'raw' , 'value'=> '$data[\'sale_price\']'),                     
                     array('name'=>'امانة', 'type' => 'raw' , 'value'=> '$data[\'deposit_type\']'),  
                     array('name'=>'طرف الامانة', 'type' => 'raw' , 'value'=> '$data[\'deposit_name\']'),  
                     array('name'=>'مبيعات العملاء','type' => 'raw','value'=>'CHtml::link($data[\'car_id\'],array("/salestbl/create","car_id"=>$data[\'car_id\'],"branch_id"=>$_REQUEST["id"]))'), 
                     array('name'=>'تحويل لفرع اخر','type' => 'raw','value'=>'CHtml::link($data[\'car_id\'],array("/innersaletbl/create","car_id"=>$data[\'car_id\'],"branch_id"=>$_REQUEST["id"]))'), 
                     array('name'=>'بيع شركات','type' => 'raw','value'=>'CHtml::link($data[\'car_id\'],array("/companysalestbl/create","car_id"=>$data[\'car_id\'],"branch_id"=>$_REQUEST["id"]))'), 
                     array('name'=>'مبيعات التجاري','type' => 'raw','value'=>'CHtml::link($data[\'car_id\'],array("/dealersalestbl/create","car_id"=>$data[\'car_id\'],"branch_id"=>$_REQUEST["id"]))'),                      
                     array('name'=>'حجز سيارة','type' => 'raw','value'=>'CHtml::link($data[\'car_id\'],array("/holdtbl/create","car_id"=>$data[\'car_id\'],"branch_id"=>$_REQUEST["id"]))'),                      
                     array('name'=>'مواصفات السيارة','type' => 'raw','value'=>'"<span class=\"link1\" data-toggle=\"modal\" data-target=\"#myModal\" data-id=\"".$data[\'code_id\']."\">".$data[\'car_id\']."</span>"'),       
                    ),         
));    

     
}
 else
{
       
      
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
                    ),         
));  
     
}

?>

<script type="text/javascript">
          
          $(function(){
          $('#content').on('click','.link1',function(){
              
         //  alert ($(this).data('id'));
                  $.ajax({                  
                  url: "<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Carstock/Getcode",
                  data:{"code_id":$(this).data('id')},
                  method:'POST',
                  success:function(data){$('#ajax-code').html(data);

    }                 
              });

          });
      });  
    </script>
    
    
 

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body" id="ajax-code">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>        
      </div>
    </div>
  </div>
</div>