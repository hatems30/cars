<?php
/* @var $this CarstblController */
/* @var $model Carstbl */
/* @var $form CActiveForm */
?>


<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'carstbl-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

       <div class="panel panel-default"> 
                       <div class="panel-heading">
               <div class="row">
               <div class="col-sm-7"><b><font size="5" color="blue">بيانات السيارات</font></b></div>           
               
           </div>
           </div>
           <div class="panel-body">
           <div class="container-fluid">
	<div class="row">
                <div class ="col-md-3">
		<?php echo $form->labelEx($model,'brand_id'); ?>
                </div>
                <div class ="col-md-3" dir="rtl">
		<?php echo $form->dropDownList($model,'brand_id', CHtml::listData(Brands::model()->findAll(), 'brand_id', 'brand_name'),array("class"=>"form-control" , 'empty'=>''));  ?>
		<?php echo $form->error($model,'brand_id'); ?>
                </div>
            <div id ="ajax_models">
                
                
            </div>                              
	</div>
                                         </br>
	<div class="row">
	        <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'car_spec'); ?>
                </div>
                <div class ="col-sm-3" dir="rtl">
		<?php echo $form->textField($model,'car_spec',array('size'=>60,'maxlength'=>255 , "class"=>"form-control")); ?>
		<?php echo $form->error($model,'car_spec'); ?>
                </div>
                <div id="code-ajax">
                
                </div>
	</div>
                          </br>
	<div class="row">
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'color_id'); ?>
                </div>
                <div class ="col-sm-3" dir="rtl">
		<?php echo $form->dropDownList($model,'color_id', CHtml::listData(Colors::model()->findAll(), 'color_id', 'color_name'),array("class"=>"form-control"));  ?>
		<?php echo $form->error($model,'color_id'); ?>
                </div>
	        <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'car_year'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->textField($model,'car_year',array('size'=>4,'maxlength'=>4 ,  "class"=>"form-control" )); ?>
		<?php echo $form->error($model,'car_year'); ?>
                </div>
	</div>
                          </br>

	<div class="row">
                <div class ="col-sm-3" >
		<?php echo $form->labelEx($model,'chass_no'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->textField($model,'chass_no',array('size'=>60,'maxlength'=>255 , "class"=>"form-control" )); ?>
		<?php echo $form->error($model,'chass_no'); ?>
                </div>
	        <div class ="col-sm-3" >
		<?php echo $form->labelEx($model,'motor_no'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->textField($model,'motor_no',array('size'=>60,'maxlength'=>255 , "class"=>"form-control")); ?>
		<?php echo $form->error($model,'motor_no'); ?>
                </div>
	</div>
                          </br>

	<div class="row">
                <div class ="col-sm-3" >
		<?php echo $form->labelEx($model,'branch_id'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->dropDownList($model,'branch_id', CHtml::listData(Branchs::model()->findAll(), 'branch_id', 'branch_name'),array("class"=>"form-control" , 'empty'=>''));  ?>
		<?php echo $form->error($model,'branch_id'); ?>
                </div>
	        <div id ="ajax_stores">
                
                
                </div>   
	</div>
                                          </br>
	<div class="row">
                <div class ="col-sm-3" >
		<?php echo $form->labelEx($model,'supplier_id'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->dropDownList($model,'supplier_id', CHtml::listData(Suppliers::model()->findAll(), 'supplier_id', 'supplier_name'),array("class"=>"form-control" , "empty"=>" "));  ?>
		<?php echo $form->error($model,'supplier_id'); ?>
                </div>
	        <div class ="col-sm-3" >
		<?php echo $form->labelEx($model,'add_date'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>		
                <?php echo $form->dateField($model,'add_date',array("class" => "form-control")); ?>
		<?php echo $form->error($model,'add_date'); ?>
                </div>
	</div>
                                      </br>
<?php
           $cont = Yii::app()->controller->id;
            $user_name = Yii::app()->user->username;
            $sql = "SELECT userpertbl.per_type
                    FROM userpertbl
                    INNER JOIN `user` ON userpertbl.user_id = `user`.id
                    INNER JOIN controllers ON userpertbl.controller_id = controllers.controller_id 
                    where `user`.username= '$user_name' and controllers.controller_code_name ='carprice' limit 1";
            $connection = Yii::app()->db;   // assuming you have configured a "db" connection
            $command = $connection->createCommand($sql);
            $data = $command->queryAll($sql);
            if (isset($data[0]['per_type']) && !empty($data[0]['per_type'])) 
                {            
                    $per_type = $data[0]['per_type'];
                    if ($per_type == 'ReadWrite') 
                        {                        
?>
	<div class="row">
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'cost_price'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->textField($model,'cost_price',array("class"=>"form-control")); ?>
		<?php echo $form->error($model,'cost_price'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'off_price'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->textField($model,'off_price' ,array("class"=>"form-control") ); ?>
		<?php echo $form->error($model,'off_price'); ?>
                </div>
	</div>
                                           </br>
	<div class="row">
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'sale_price_from'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->textField($model,'sale_price_from' ,array("class"=>"form-control") ); ?>
		<?php echo $form->error($model,'sale_price_from'); ?>
                </div>
	        <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'sale_price_to' ); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->textField($model,'sale_price_to' ,array("class"=>"form-control") ); ?>
		<?php echo $form->error($model,'sale_price_to'); ?>
                </div>
	</div>
  <?php
                }}
  ?>
                                             </br>
	<div class="row">
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'notes'); ?>
                </div>
                <div class ="col-sm-9" dir =rtl> 
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50 , 'class'=>'form-control') ); ?>
		<?php echo $form->error($model,'notes'); ?>
                </div>
	</div>                                 
	<div class ="col-sm-3">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'اضافة' : 'حفظ' , array('class'=>'btn btn-default' , 'style'=>'font-size:18px')); ?>
	</div>

<?php $this->endWidget(); ?>
           </div>
           </div>
           </div>
       </div>
        <script type ="text/javascript">             
   
   
    $(function(){
        
        
          $('#Carstbl_brand_id').on('change',function(){  
              
              if($(this).val() !==''){
                  $.ajax({
                  url: "<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Carstbl/Getmodels",
                  data:{"id":$(this).val(),"model_id":"<?php echo $model->model_id ?>"},
                  method:'POST',
                   success:function(data){$('#ajax_models').html(data);}                                
              });
              }
 
          })
          
           
      }) 
   
    $(function(){
        
        
              $('#content').on('change','#Carstbl_model_id',function(){   
                  
             
              $.ajax({
                  url: "<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Carstbl/Getcode",
                  data:{"id":$(this).val(),"code_id":"<?php echo $model->code_id ?>"},
                  method:'POST',
                  success:function(data){$('#code-ajax').html(data);}                 
              });
          });
          
           
      })       
          $(function(){
          $('#Carstbl_branch_id').on('change',function(){  
              
              if($(this).val() !==''){
                  $.ajax({
                  url: "<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Carstbl/Getstores",
                  data:{"id":$(this).val(),"store_id":"<?php echo $model->store_id ?>"},
                  method:'POST',
                   success:function(data){$('#ajax_stores').html(data);}                                
              });
              }
 
          })
          
           
      }) 
 
      
     $(document).ready(function(){
     
    $('#Carstbl_brand_id').change();
    $('#Carstbl_branch_id').change();
    $('#Carstbl_model_id').change();
    })
        </script>