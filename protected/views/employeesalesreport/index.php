<div class="panel panel-default">
    <div class="panel-heading" dir =rtl>
        <div class="row">
            <div class="col-sm-7"><b><font size="5" color="blue">تقرير مبيعات Sales </font></b></div>                          
        </div>
    </div>
    <div class="panel-body">      
        <div class="container-fluid">             
             <div class ="row"> 
                <div class="col-sm-3">
                     
                 </div>
                <span id ="ajax-employees">
          
                </span>  
                 <div class ="col-sm-3" dir="rtl">
                     <?php
                         $models = Branchs::model()->findAll(array('order' => 'branch_name'));
                         $list = CHtml::listData($models, 'branch_id', 'branch_name');
                         echo CHtml::dropDownList('branchs', $models, $list,array( 'class'=>'form-control')); 
                      ?>
                </div>
                 <div class ="col-sm-1">
                     <b>  الفرع</b>
                </div>  
             </div>
            </br>
            <div class="row">
                <div class ="col-sm-3">
                 <button id="mybutton" class="btn btn-default"> Get Branch Sales  </button> 
                </div>
                <div class ="col-sm-3" dir="rtl">                     
                    <?php                    
                    $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                                                          'name'=>'date_to',                                                                                                                                                          
                                                                          //'value' => date('yy-m-d'),
                                                                          'options'=>array( 'showButtonPanel'=>true,'dateFormat'=>'yy-mm-dd',),
                                                                          'htmlOptions'=>array('class'=>'form-control','readonly'=>'true'),
                                                                        ));                                           
                    ?>                              
                </div> 
                <div class ="col-sm-1">
                    <b> الى</b>
                </div>  
                <div class ="col-sm-3" dir="rtl">
                     <?php //echo CHtml::dateField('date_from','',array("class"=>"form-control")) ?>
                    <?php                    
                    $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                                                          'name'=>'date_from',                                                                                                                                                          
                                                                          //'value' => date('yy-m-d'),
                                                                          'options'=>array( 'showButtonPanel'=>true,'dateFormat'=>'yy-mm-dd',),
                                                                          'htmlOptions'=>array('class'=>'form-control','readonly'=>'true'),
                                                                        ));                                           
                    ?>                    
                </div>
                  <div class ="col-sm-1">
                      <b>  من</b>
                </div>       
        </div>
</div>
        <span id ="ajax">
          
        </span>
        </div>
  </div>
<script type ="text/javascript">

      
          $(function(){
          $('#mybutton').on('click',function(){
              $.ajax({
                  url: "<?php echo Yii::app()->request->baseUrl; ?>/"+"index.php?r=Employeesalesreport/Getdata",
                  data:{"id":$('#branchs').val() ,"start_date":$('#date_from').val() ,"end_date":$('#date_to').val() , "empid":$('#employees').val()},
                  method:'POST',
                  success:function(data){$('#ajax').html(data);}                 
              });
          });
          
          $('#branchs').on('change',function(){  
              if($(this).val() !==''){
                  $.ajax({
                  url: "<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Employeesalesreport/Getemployees",
                  data:{"id":$(this).val()},
                  method:'POST',
                   success:function(data){$('#ajax-employees').html(data);}                                
              });
              }
 
          });
          
      });
      

    $(document).ready(function(){
     $('#branchs').change();
     
          });
          
</script>


        
        <span id ="ajax">
          
        </span>
