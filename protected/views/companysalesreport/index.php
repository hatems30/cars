<div class="panel panel-default">
    <div class="panel-heading" dir =rtl>
        <div class="row">
            <div class="col-sm-6"><b><font size="5" color="blue">تقرير مبيعات الشركات</font></b></div>                          
        </div>
    </div>
    <div class="panel-body">
         <div class="container-fluid">         
                <div class ="row">
                    <div class ="col-sm-1">
                         Branch
                    </div>
                    <div class ="col-sm-3">
                         <?php
                             $models = Branchs::model()->findAll(array('order' => 'branch_name'));
                             $list = CHtml::listData($models, 'branch_id', 'branch_name');
                             echo CHtml::dropDownList('branchs', $models, $list,array('empty' => '' , 'class'=>'form-control')); 
                          ?>
                    </div>
                    <div class ="col-sm-1">
                         Company
                    </div>
                    <div class ="col-sm-3">
                         <?php
                             $models = Companiestbl::model()->findAll(array('order' => 'company_name'));
                             $list = CHtml::listData($models, 'company_id', 'company_name');
                             echo CHtml::dropDownList('companies', $models, $list,array('empty' => '' , 'class'=>'form-control')); 
                          ?>
                    </div>                    
                </div>
            </br>
            <div class="row">
                <div class ="col-sm-1" dir =rtl>
                     From
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
    
                <div class ="col-sm-1" dir="rtl">
                     To
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
                <div class ="col-sm-3">
                     <button id="mybutton" class="btn btn-default"> Get Branch Sales  </button> 
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
                  url: "<?php echo Yii::app()->request->baseUrl; ?>/"+"index.php?r=Companysalesreport/Getdata",
                  data:{"id":$('#branchs').val() ,"company_id":$('#companies').val() ,"date_from":$('#date_from').val() ,"date_to":$('#date_to').val()},
                  method:'POST',
                  success:function(data){$('#ajax').html(data);}                 
              });
          })
      })
      
      
</script>


        

