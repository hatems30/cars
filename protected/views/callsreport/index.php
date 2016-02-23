<div class="panel panel-default">
    <div class="panel-heading" dir =rtl>
        <div class="row">
            <div class="col-sm-7"><b><font size="5" color="blue">تقرير المكالمات الواردة</font></b></div>                          
        </div>
    </div>
    <div class="panel-body">
         <div class="container-fluid">         
                <div class ="row"> 
                    <div class ="col-sm-2" dir="rtl">
                         <?php                                                           
                            $models = Howtbl::model()->findall();
                            $list = CHtml::listData($models, 'how_id', 'how_name');
                            echo CHtml::dropDownList('how', $models, $list,array( 'class'=>'form-control' , 'empty'=>'')); 
                          ?>
                    </div> 
                    <div class ="col-sm-2">
                        <b>طريقة الاتصال</b>                            
                    </div>
                    <div class ="col-sm-3" dir='rtl'>
                         <?php                                                                                        
                             $models = Employees::model()->findall(array('order' => 'employee_name'));
                             $list = CHtml::listData($models, 'employee_id', 'employee_name');
                             echo CHtml::dropDownList('employees', $models, $list,array( 'class'=>'form-control' , 'empty'=>'')); 
                          ?>
                    </div> 
                    <div class ="col-sm-1">
                        <b>المندوب</b>
                    </div>
                    <div class ="col-sm-3" dir='rtl'>
                         <?php
                             $models = Branchs::model()->findAll(array('order' => 'branch_name'));
                             $list = CHtml::listData($models, 'branch_id', 'branch_name');
                             echo CHtml::dropDownList('branchs', $models, $list,array('class'=>'form-control')); 
                          ?>
                    </div>
                    <div class ="col-sm-1">
                        <b>الفرع</b>
                    </div>
                </div>
            </br>
            <div class="row">              
                <div class ="col-sm-4">
                     <button id="mybutton" class="btn btn-default"> Get Branch Sales  </button> 
                </div>
                
                <div class ="col-sm-3">
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
                    <b>الى</b>
                </div>
                
                <div class ="col-sm-3">
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
                    <b>من</b>
                </div>
                
            </div>             
        <span id ="ajax">
          
        </span>

        </div>
  </div>
</div>

<script type ="text/javascript">

      
          $(function(){
          $('#mybutton').on('click',function(){
              
         // alert ($('#branchs').val());
                          
              $.ajax({
                  url: "<?php echo Yii::app()->request->baseUrl; ?>/"+"index.php?r=Callsreport/Getdata",
                  data:{"id":$('#branchs').val() , "employee_id":$('#employees').val() , "how_id":$('#how').val() ,"start_date":$('#date_from').val() ,"end_date":$('#date_to').val()},
                  method:'POST',
                  success:function(data){$('#ajax').html(data);}                 
              });
          })
      })
      
      
</script>


        

