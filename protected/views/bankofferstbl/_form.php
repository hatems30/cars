<?php
/* @var $this BankofferstblController */
/* @var $model Bankofferstbl */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bankofferstbl-form',
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
               <div class="col-sm-7"><b><font size="5" color="blue">عروض البنوك</font></b></div>           
               
           </div>
           </div>
           <div class="panel-body">
           <div class="container-fluid">
	<div class="row">
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'offer_date'); ?>
                </div>    
                <div class ="col-sm-3">
		<?php                    
                    $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                                                          'name'=>'Bankofferstbl[offer_date]', 
                                                                          'model' => $model,
                                                                          'id' => 'Bankofferstbl_offer_date'       ,             
                                                                          'value' => $model->offer_date,
                                                                          'options'=>array( 'showButtonPanel'=>true,'dateFormat'=>'yy-mm-dd',),
                                                                          'htmlOptions'=>array('class'=>'form-control','readonly'=>'true'),
                                                                        ));                                           
                ?>
		<?php echo $form->error($model,'offer_date'); ?>
                </div>
        
	</div>

	<div class="row">
                <div class ="col-md-3">
		<?php echo $form->labelEx($model,'customer_id'); ?>
                </div>
                <div class ="col-md-3"  dir =rtl>
		<?php echo $form->dropDownList($model,'customer_id', CHtml::listData(Customers::model()->findAll(), 'customer_id', 'customer_name'),array("class"=>"form-control" , 'empty'=>''));  ?>
		<?php echo $form->error($model,'customer_id'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-md-3">
		<?php echo $form->labelEx($model,'brand_id'); ?>
                </div>
                <div class ="col-md-3" dir =rtl>
		<?php echo $form->dropDownList($model,'brand_id', CHtml::listData(Brands::model()->findAll(), 'brand_id', 'brand_name'),array("class"=>"form-control" , 'empty'=>''));  ?>
		<?php echo $form->error($model,'brand_id'); ?>
                </div>
	</div>

	<div class="row">
            <div id="ajax-model">
                
            </div>
            <div id="ajax-code">
                
            </div>
	</div>

	<div class="row">
                <div class ="col-md-3">
		<?php echo $form->labelEx($model,'bank_id'); ?>
                </div>
                <div class ="col-md-3" dir =rtl>
		<?php echo $form->dropDownList($model,'bank_id', CHtml::listData(Banks::model()->findAll(), 'bank_id', 'bank_name'),array("class"=>"form-control" , 'empty'=>''));  ?>
		<?php echo $form->error($model,'bank_id'); ?>
                </div>
                <div class ="col-sm-3" >
		<?php echo $form->labelEx($model,'banker'); ?>
                </div>
                <div class ="col-md-3" dir =rtl>
		<?php echo $form->textField($model,'banker',array('size'=>60,'maxlength'=>255 , 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'banker'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'branch_id'); ?>
                </div>
                <div class ="col-sm-3"  dir =rtl>
		<?php echo $form->dropDownList($model,'branch_id', CHtml::listData(Branchs::model()->findAll(), 'branch_id', 'branch_name'),array("class"=>"form-control" , 'empty'=>''));  ?>
		<?php echo $form->error($model,'branch_id'); ?>
                </div>
                <div id="ajax_employee">
                    
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'offer_status'); ?>
                </div>
                <div class ="col-sm-3"  dir =rtl>
		<?php echo $form->dropDownList($model,'offer_status',array("موافقة"=>"موافقة","رفض"=>"رفض" ,"قيد الاجراء"=>"قيد الاجراء"),array('empty'=>'' ,'class'=>'form-control' )); ?>
		<?php echo $form->error($model,'offer_status'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-md-3">
		<?php echo $form->labelEx($model,'results'); ?>
                </div>
                <div class ="col-md-8"  dir =rtl>
		<?php echo $form->textArea($model,'results',array('rows'=>6, 'cols'=>50 , 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'results'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-md-3">
		<?php echo $form->labelEx($model,'notes'); ?>
                </div>
                <div class ="col-md-8"  dir =rtl>
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50 , 'class'=>'form-control' )); ?>
		<?php echo $form->error($model,'notes'); ?>
                </div>
	</div>

	<div class ="col-md-3" dir =rtl>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'اضافة' : 'حفظ' , array('class'=>'btn btn-default' , 'style'=>'font-size:18px')); ?>
	</div>

<?php $this->endWidget(); ?>
           </div>
           </div>
       </div>


</div><!-- form -->

<script type ="text/javascript">             
    $(function(){
        
        
            $('#Bankofferstbl_brand_id').on('change',function(){                   
              if($(this).val() !==''){
                  $.ajax({
                  url: "<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Bankofferstbl/Getmodels",
                  data:{"id":$(this).val(),"model_id":"<?php echo $model->model_id ?>"},
                  method:'POST',
                   success:function(data){
        console.log(data);               
        $('#ajax-model').html(data);}                                
              });
              }
 
          })
          
            $('#Bankofferstbl_branch_id').on('change',function(){                
              if($(this).val() !==''){
                  $.ajax({
                  url: "<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Bankofferstbl/Getemployee",
                  data:{"id":$(this).val(),"employee_id":"<?php echo $model->employee_id ?>"},
                  method:'POST',
                   success:function(data){$('#ajax_employee').html(data);}                                
              });
              }
 
          })
          
              $('#content').on('change','#Bankofferstbl_model_id',function(){                                  
              $.ajax({
                  url: "<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Bankofferstbl/Getcode",
                  data:{"id":$(this).val(),"code_id":"<?php echo $model->code_id ?>"},
                  method:'POST',
                  success:function(data){$('#ajax-code').html(data);}                 
              });
          });          
          
           
      })

     $(document).ready(function(){
     
    $('#Bankofferstbl_brand_id').change();
    $('#Bankofferstbl_branch_id').change();
    $('#Bankofferstbl_model_id').change();
    });
   
</script>