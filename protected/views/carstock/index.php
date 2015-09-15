           
<div class ="row">
<div class ="col-sm-6">
<?php
$models = Branchs::model()->findAll(array('order' => 'branch_name')); 
$list = CHtml::listData($models, 'branch_id', 'branch_name');
echo CHtml::dropDownList('branchs', $models, $list,array('class'=>'form-control','empty' => '(Select Branch')); 
?>
</div>
<div class ="col-sm-3">    
<button id="mybutton" class="btn btn-default"> Get Branch Sales  </button> 
</div>
</div>
<script type ="text/javascript">

      
          $(function(){
          $('#mybutton').on('click',function(){
              
           //alert ($('#branchs').val());
                          
              $.ajax({                  
                  url: "<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=carstock/Getdata",
                  data:{"id":$('#branchs').val()},
                  method:'POST',
                  success:function(data){$('#ajax').html(data);}                 
              });
          })
      })
      
      
</script>


        
        <span id ="ajax">
          
        </span>
