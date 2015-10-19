<?php
/* @var $this FactorstblController */
/* @var $model Factorstbl */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'factorstbl-form',
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
               <div class="col-sm-7"><b><font size="5" color="blue">معامل البيع</font></b></div>           
               
           </div>
           </div>
    <div class="panel-body">      
        <div class="container-fluid">            
	<div class="row">
                <div class ="col-sm-3">	
		<?php echo $form->labelEx($model,'cach_factor'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->textField($model,'cach_factor' , array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'cach_factor'); ?>
                </div>    
	</div>

	<div class="row">
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'premium_factor'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->textField($model,'premium_factor'  , array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'premium_factor'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'dealer_factor' ); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->textField($model,'dealer_factor'  , array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'dealer_factor'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'company_factor'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->textField($model,'company_factor'  , array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'company_factor'); ?>
                </div>
	</div>

	<div class="row">
	<div class ="col-sm-3">	
		<?php echo CHtml::submitButton($model->isNewRecord ? 'اضافة' : 'حفظ' , array('class'=>'btn btn-default' , 'style'=>'font-size:18px')); ?>
        </div>
	</div>      

<?php $this->endWidget(); ?>
        </div>
    </div>
    </div>
</div>
</div><!-- form -->