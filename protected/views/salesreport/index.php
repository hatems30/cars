           

<?php

$models = Branchs::model()->findAll(array('order' => 'branch_name'));
 

$list = CHtml::listData($models, 'branch_id', 'branch_name');
echo 'Branch: ';
echo CHtml::dropDownList('branchs', $models, $list,array('empty' => '(Select Branch'));



echo ' Date From: ';
echo CHtml::dateField('datefrom');

     
echo ' Date To: ';
echo CHtml::dateField('dateto');
 
 
?>

<button id="mybutton"> Get Branch Sales  </button> 

<script type ="text/javascript">

      
          $(function(){
          $('#mybutton').on('click',function(){
              
             // alert ($('#branchs').val());
                          
              $.ajax({
                  url: "<?php echo Yii::app()->request->baseUrl; ?>/"+"index.php?r=Salesreport/Getdata",
                  data:{"id":$('#branchs').val()},
                  method:'POST',
                  success:function(data){$('#ajax').html(data);}                 
              });
          })
      })
      
      
</script>


        
        <span id ="ajax">
          
        </span>
