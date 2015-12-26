<div class="panel panel-default">
    <div class="panel-heading" dir =rtl>
        <div class="row">
            <div class="col-sm-7"><b><font size="5" color="blue">احصائية باجمالي المبيعات</font></b></div>                          
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
                  url: "<?php echo Yii::app()->request->baseUrl; ?>/"+"index.php?r=Fullsalesreport/Getdata",
                  data:{"id":$('#branchs').val()},
                  method:'POST',
                  success:function(data){$('#ajax').html(data);}                 
              });
          })
      })
      
      
</script>


        

