<div class="panel panel-default">
    <div class="panel-heading" dir =rtl>
        <div class="row">
            <div class="col-sm-6"><b><font size="5" color="blue">My Page</font></b></div>                          
        </div>
    </div>
    <div class="panel-body">      
        <div class="container-fluid">             
             <div class ="row">
                 <div class ="col-sm-1" dir =rtl>
                     <b>الفــرع</b>
                </div>
                <div class ="col-sm-3">
                     <?php
                         $models = Branchs::model()->findAll(array('order' => 'branch_name'));
                         $list = CHtml::listData($models, 'branch_id', 'branch_name');
                         echo CHtml::dropDownList('branchs', $models, $list,array( 'class'=>'form-control')); 
                      ?>
                </div>
                 <div class ="col-sm-1" dir =rtl>
                     <b>Sales</b> 
                </div>
                <div class ="col-sm-3">
                     <?php                         
                             $empid = User::model()->findByAttributes(array('username'=>Yii::app()->user->username),'employee_id');                                   
                             $models = Employees::model()->findallByAttributes(array('employee_id'=>$empid['employee_id']));
                             $list = CHtml::listData($models, 'employee_id', 'employee_name');
                             echo CHtml::dropDownList('employees', $models, $list,array( 'class'=>'form-control'));                              
                      ?>
                </div> 
                 <div class="col-sm-2" dir="rtl">
                     <?php
                             $mah = User::model()->findByAttributes(array('username'=>Yii::app()->user->username),'employee_id');                                   
                             $tar=  Employees::model()->findByAttributes(array('employee_id'=>$mah['employee_id']),'target');                             
                             echo chtml::textField('target',$tar['target'],array('class'=>'form-control' , 'readonly'=>'true'));
                      ?>
                 </div>
             </div>    
            </br>
            <div class="row">
                <div class ="col-sm-1" dir =rtl>
                     From
                </div>
                <div class ="col-sm-3">
                     <?php //echo CHtml::dateField('date_from','',array("class"=>"form-control")) ?>
                    <?php                    
                    $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                                                          'name'=>'start_date',                                                                                                                                                          
                                                                          'value' => date('Y-m-d'),
                                                                          'options'=>array( 'showButtonPanel'=>true,'dateFormat'=>'yy-mm-dd',),
                                                                          'htmlOptions'=>array('class'=>'form-control','readonly'=>'true'),
                                                                        ));                                           
                    ?>                    
                </div>
    
                <div class ="col-sm-1" dir="rtl">
                     To
                </div>
                <div class ="col-sm-3">                     
                    <?php                    
                    $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                                                          'name'=>'end_date',                                                                                                                                                          
                                                                          'value' => date('Y-m-d'),
                                                                          'options'=>array( 'showButtonPanel'=>true,'dateFormat'=>'yy-mm-dd',),
                                                                          'htmlOptions'=>array('class'=>'form-control','readonly'=>'true'),
                                                                        ));                                           
                    ?>                              
                </div>            
            <div class ="col-sm-3">
                 <button id="mybutton" class="btn btn-default"> Get Data  </button> 
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
              
             // alert ($('#branchs').val());
                          
              $.ajax({
                  url: "<?php echo Yii::app()->request->baseUrl; ?>/"+"index.php?r=Employeepage/Getdata",
                  data:{"id":$('#branchs').val() ,"start_date":$('#start_date').val() ,"end_date":$('#end_date').val() , "empid":$('#employees').val()},
                  method:'POST',
                  success:function(data)
                          {
                                 $('#ajax').html(data);    
                                 //alert("success");
                                                                                      
                          }                 
              });
          })
      })
      
      
</script>
        
        <span id ="ajax">
          
        </span>
