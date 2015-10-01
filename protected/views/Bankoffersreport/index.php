<div class="panel panel-default">
    <div class="panel-heading" dir =rtl>
        <div class="row">
            <div class="col-sm-6"><b><font size="5" color="blue">تقرير عروض البنك </font></b></div>                          
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
                        echo CHtml::dropDownList('branchs', $models, $list,array('empty' => '(Select Branch' , 'class'=>'form-control')); 
                     ?>
                </div>
                <div class ="col-sm-1">
                    Bank
                </div>
                <div class ="col-sm-3">
                    <?php
                        $models = Banks::model()->findAll(array('order' => 'bank_name'));
                        $list = CHtml::listData($models, 'bank_id', 'bank_name');
                        echo CHtml::dropDownList('banks', $models, $list,array('empty' => '' , 'class'=>'form-control')); 
                     ?>
                </div>   
                <div class ="col-sm-1">
                    status
                </div>
                <div class ="col-sm-3">
                    <?php
                        echo  CHtml::dropDownList('status', 'stat',array("موافقة"=>"موافقة","رفض"=>"رفض" ,"قيد الاجراء"=>"قيد الاجراء") , array ('class'=>'form-control'));
                        
                     ?>
                </div>                 
            </div>
            </br>
            <div class="row">
                <div class ="col-sm-1" dir =rtl>
                     From
                </div>
                <div class ="col-sm-3">
                     <?php echo CHtml::dateField('date_from','',array("class"=>"form-control")) ?>
                </div>
    
                <div class ="col-sm-1" dir="rtl">
                     To
                </div>
                <div class ="col-sm-3">
                     <?php echo CHtml::dateField('date_to' ,'',array("class"=>"form-control")) ?>
                </div>            
                <div class ="col-sm-4" dir =rtl>
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
              
       //    alert ($('#status').val());
       
                          
              $.ajax({
                  url: "<?php echo Yii::app()->request->baseUrl; ?>/"+"index.php?r=Bankoffersreport/Getdata",
                  data:{"id":$('#branchs').val() ,"date_from":$('#date_from').val() ,"date_to":$('#date_to').val() ,"bank_id":$('#banks').val(),"status":$('#status').val()},
                  method:'POST',
                  success:function(data){$('#ajax').html(data);}                 
              });
          })
      })
      
      
</script>


        

