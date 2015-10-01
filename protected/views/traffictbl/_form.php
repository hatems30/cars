<?php
/* @var $this TraffictblController */
/* @var $model Traffictbl */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'traffictbl-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <div  id="panel" class="panel panel-default">
                        <div class="panel-heading">
               <div class="row">
               <div class="col-sm-6"><b><font size="5" color="blue">وحدات المرور</font></b></div>           
               
           </div>
           </div>
    <div class="panel-body">      
        <div class="container-fluid">            
	<div class="row">
                <div class ="col-sm-3">	
		<?php echo $form->labelEx($model,'traffic_name'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>	
		<?php echo $form->textField($model,'traffic_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'traffic_name'); ?>
                </div>
	</div>

	<div class ="col-sm-3">	
		<?php echo $form->labelEx($model,'notes'); ?>
        </div>
            <div class ="col-sm-3" dir =rtl>	
		<?php echo $form->textField($model,'notes',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'notes'); ?>
            </div>
	</div>

	<div class ="col-sm-3">	
		<?php echo CHtml::submitButton($model->isNewRecord ? 'اضافة' : 'حفظ' , array('class'=>'btn btn-default' , 'style'=>'font-size:18px')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->