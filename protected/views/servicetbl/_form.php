<?php
/* @var $this ServicetblController */
/* @var $model Servicetbl */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'servicetbl-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'service_date'); ?>
		<?php echo $form->DateField($model,'service_date'); ?>
		<?php echo $form->error($model,'service_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'service_type'); ?>
		<?php //echo $form->textField($model,'service_type',array('size'=>10,'maxlength'=>10)); ?>
                <?php echo $form->dropDownList($model,'service_type',array("صيانة"=>"صيانة","شكاوي"=>"شكاوي"),array('empty'=>'Select Customer Service')); ?>
		<?php echo $form->error($model,'service_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'customer_id'); ?>
		<?php echo $form->dropDownList($model,'customer_id', CHtml::listData(Customers::model()->findAll(), 'customer_id', 'customer_name') , array('empty'=>'select customer name')); ?>  
		<?php echo $form->error($model,'customer_id'); ?>
	</div>
        
                <script type ="text/javascript">             
    $(function(){
          $('#Servicetbl_customer_id').on('click',function(){  
              $.ajax({
                  url: "<?php echo Yii::app()->request->baseUrl; ?>/"+"index.php?r=Servicetbl/Getcustomercar",
                  data:{"id":$(this).val()},
                  method:'POST',
                   success:function(data){$('#ajax').html(data);}                                
              });
          })
      })                  
        </script>
   <span id="ajax">
            
            
        </span>
        
	<div class="row">
		<?php echo $form->labelEx($model,'car_id'); ?>
                <?php //echo $form->dropDownList($model,'car_id', CHtml::listData(Carstbl::model()->findAll(), 'car_id', 'chass_no')); ?>  
		<?php //echo $form->error($model,'car_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notes'); ?>
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'notes'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
                                       
<?php $this->endWidget(); ?>

</div><!-- form -->