<div class="panel panel-default">
    <div class="panel-heading" dir =rtl>
        <div class="row">
            <div class="col-sm-7"><b><font size="5" color="blue">Car Page</font></b></div>                          
        </div>
    </div>
    <div class="panel-body">
         <div class="container-fluid">         
                <div class ="row">
                    <div class ="col-sm-1">
                         رقم الشاسيه
                    </div>
                    <div class ="col-sm-3">
                         <?php
                           echo   CHtml::textField('chass_no' , '',array('class'=>'form-control'));
                          ?>
                    </div>                                  
                    <div class ="col-sm-3">
                       <button id="mybutton" class="btn btn-default"> Get Car Data  </button> 
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
                  url: "<?php echo Yii::app()->request->baseUrl; ?>/"+"index.php?r=Carpage/Getdata",
                  data:{"id":$('#chass_no').val()},
                  method:'POST',
                  success:function(data){$('#ajax').html(data);}                 
              });
          })
      })
      
      
</script>


        

