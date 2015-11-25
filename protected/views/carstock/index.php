<div class="panel panel-default">
    <div class="panel-heading" dir =rtl>
        <div class="row">
            <div class="col-sm-7"><b><font size="5" color="blue">السيارات المتاحة</font></b></div>                          
        </div>
    </div>
    <div class="panel-body">
        <div class="container-fluid">         
            <div class ="row">
                <div class ="col-sm-1" dir =rtl>
                    الفرع
                </div>
                <div class ="col-sm-3">
                    <?php
                        $models = Branchs::model()->findAll(array('order' => 'branch_name'));
                        $list = CHtml::listData($models, 'branch_id', 'branch_name');
                        echo CHtml::dropDownList('branchs', $models, $list,array('empty' => '' , 'class'=>'form-control')); 
                     ?>
                </div>   
                <div class ="col-sm-1"  dir =rtl>
                    الماركة
                </div>
                <div class ="col-sm-3">
                    <?php
                        $models = Brands::model()->findAll(array('order' => 'brand_name'));
                        $list = CHtml::listData($models, 'brand_id', 'brand_name');
                        echo CHtml::dropDownList('brands', $models, $list,array('empty' => '' , 'class'=>'form-control')); 
                     ?>
                </div>   
                <div id ="ajax_models">                                
                </div>                 
            </div>
            </br>  
            <div class="row">
                <div class="col-sm-4" dir =rtl>
                    <button id="mybutton" class="btn btn-default"><b>عرض السيارات المتاحة</b></button>     
                </div>
                    
            </div>
            
        <span id ="ajax">
          
        </span>

        <span id ="code-ajax">
            
        </span>
            
        </div>
</div>
</div>
<script type ="text/javascript">

    $(function(){
        
        
          $('#brands').on('change',function(){  
              
              if($(this).val() !==''){
                  $.ajax({
                  url: "<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Carstock/Getmodels",
                  data:{"id":$(this).val()},
                  method:'POST',
                   success:function(data){$('#ajax_models').html(data);}                                
              });
              }
 
          })
          
           
      }) ;
      
          $(function(){
          $('#mybutton').on('click',function(){
              
           //alert ($('#branchs').val());
                          
              $.ajax({                  
                  url: "<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Carstock/Getdata",
                  data:{"id":$('#branchs').val() , "brand_id":$('#brands').val() ,"model_id":$('#carmodels').val() },
                  method:'POST',
                  success:function(data){$('#ajax').html(data);}                 
              });
          })
      });   
     
      
</script>


