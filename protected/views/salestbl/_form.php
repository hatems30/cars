<?php
/* @var $this SalestblController */
/* @var $model Salestbl */
/* @var $form CActiveForm */
?>
<!-- 
 -----------------------------------------------------------------------------------------------
-->



<!-- 
 -----------------------------------------------------------------------------------------------
-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'salestbl-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'invoice_date'); ?>
		<?php echo $form->dateField($model,'invoice_date',array('format'=>'yyyy-mm-dd')); ?>
		<?php echo $form->error($model,'invoice_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'branch_id'); ?>
		<?php //echo $form->textField($model,'branch_id'); ?>		
                <?php echo $form->dropDownList($model,'branch_id', CHtml::listData(Branchs::model()->findAll(), 'branch_id', 'branch_name')); ?>  
                <?php echo $form->error($model,'branch_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sales_man_id'); ?>
		<?php //echo $form->textField($model,'sales_man_id'); ?>
		<?php echo $form->error($model,'sales_man_id'); ?>
                <?php echo $form->dropDownList($model,'sales_man_id', CHtml::listData(Salesmantbl::model()->findAll(), 'sales_man_id', 'sales_man_name') , array('empty'=>'Select Sales Man')); ?>  
	</div>

	<div class="row">
		
            
                <?php echo $form->labelEx($model,'car_id'); ?>
		<?php //echo $form->textField($model,'car_id'); ?>
		<?php echo $form->error($model,'car_id'); ?>
                <?php                
                        echo $form->dropDownList(
                        $model,'car_id', 
                      //  CHtml::listData(Carstbl::model()->findAllByAttributes(array('soled' => 0)) , 'car_id', 'chass_no'),
                          CHtml::listData(Carstbl::model()->findAll() , 'car_id', 'chass_no'),
                        
                            array(
                                     'empty'    => 'Select Car',
                                                                   )                        
                        );                                           
                ?> 
            
        <script type ="text/javascript">

      

   
    
    $(function(){
          $('#Salestbl_car_id').on('change',function(){
             

             
              $.ajax({
                  url: "<?php echo Yii::app()->request->baseUrl; ?>/"+"index.php?r=salestbl/GetCarData",
                  data:{"id":$(this).val()},
                  method:'POST',
                  success:function(data){$('#ajax').html(data);}                 
              });
          })
      })
      
          $(function(){
          $('#buttonid').on('click',function(){
             
             //alert ('sjhgdksjh');
              
           $.ajax({
                  url:"http://localhost/cars/index.php?r=salestbl/updateajax",
                  data:{"id":$('#Salestbl_car_id').val()},
                  method:'POST',
                 // success:function(data){
                      //$('#ajax').html(data);
                 // }
                  
              });
          })
      })
      
      
        </script>
        
        <span id ="ajax">
          
        </span>

            
        </div>

	<div class="row">
		<?php echo $form->labelEx($model,'customer_id'); ?>		
                <?php echo $form->dropDownList($model,'customer_id', CHtml::listData(customers::model()->findAll(), 'customer_id', 'customer_name')); ?>  
               <?php echo $form->error($model,'customer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'finance_type'); ?>
		<?php //echo $form->textField($model,'finance_type',array('size'=>60,'maxlength'=>255)); ?>
                <?php echo $form->dropDownList($model,'finance_type',array("نقدي"=>"نقدي","قسط مباشر"=>"قسط مباشر" ,"بنك"=>"بنك","تجاري"=>"تجاري"  ),array('empty'=>'Select Value')); ?>
		<?php echo $form->error($model,'finance_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cach_price'); ?>
		<?php echo $form->textField($model,'cach_price'); ?>
		<?php echo $form->error($model,'cach_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'المقدم'); ?>
		<?php echo $form->textField($model,'downpayment'); ?>
		<?php echo $form->error($model,'downpayment'); ?>

        </div>  
        <div class="row">	
		<?php echo $form->labelEx($model,'monthly_premium'); ?>
		<?php echo $form->textField($model,'monthly_premium'); ?>
		<?php echo $form->error($model,'monthly_premium'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'months_count'); ?>
		<?php echo $form->textField($model,'months_count'); ?>
		<?php echo $form->error($model,'months_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'interest_rate'); ?>
		<?php echo $form->textField($model,'interest_rate'); ?>
		<?php echo $form->error($model,'interest_rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bank_id'); ?>
		<?php //echo $form->textField($model,'bank_id'); ?>
		<?php echo $form->error($model,'bank_id'); ?>
                <?php echo $form->dropDownList($model,'bank_id', CHtml::listData(Banks::model()->findAll(), 'bank_id', 'bank_name')); ?>  
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transfer_amount'); ?>
		<?php echo $form->textField($model,'transfer_amount'); ?>
		<?php echo $form->error($model,'transfer_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bank_down_amount'); ?>
		<?php echo $form->textField($model,'bank_down_amount'); ?>
		<?php echo $form->error($model,'bank_down_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'expenses'); ?>
		<?php echo $form->textField($model,'expenses'); ?>
		<?php echo $form->error($model,'expenses'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'insurance_comp_id'); ?>
		<?php echo $form->dropDownList($model,'insurance_comp_id', CHtml::listData(Inscomps::model()->findAll(), 'insurance_comp_id', 'insurance_comp_name')); ?>  
		<?php echo $form->error($model,'insurance_comp_id'); ?>
                
                
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'insurance_type'); ?>
		<?php //echo $form->textField($model, 'insurance_type'); ?>     
                <?php echo $form->dropDownList($model,'insurance_type',array("تحمل"=>"تحمل","بدون تحمل"=>"بدون تحمل"),array('empty'=>'Select Insurance Type')); ?>
		<?php echo $form->error($model,'insurance_type'); ?>
	</div>
        


	<div class="row">
		<?php echo $form->labelEx($model,'insurance_amount'); ?>
		<?php echo $form->textField($model,'insurance_amount'); ?>
		<?php echo $form->error($model,'insurance_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'insurance_rate'); ?>
		<?php echo $form->textField($model,'insurance_rate'); ?>
		<?php echo $form->error($model,'insurance_rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notes'); ?>
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'notes'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', 
                        array(
                            'id'=>'buttonid',
                        )
                        ); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->