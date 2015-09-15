<?php
/* @var $this InscompsController */
/* @var $model Inscomps */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inscomps-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>	        
    <div  id="panel" class="panel panel-default">
                  <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><b><font size="5" color="blue">شركات التأمين</font></b></div>           
               
           </div>
           </div>
    <div class="panel-body">      
        <div class="container-fluid">            
	<div class="row">
                <div class ="col-sm-3" dir =rtl>	
		<?php echo $form->labelEx($model,'insurance_comp_name'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>	
		<?php echo $form->textField($model,'insurance_comp_name',array('size'=>60,'maxlength'=>255 , 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'insurance_comp_name'); ?>
                </div>
	</div>

	<div class ="col-sm-3" dir =rtl>	
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save' , array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

        </div>
    </div>
    </div>
    </body>
</html>
</div><!-- form -->