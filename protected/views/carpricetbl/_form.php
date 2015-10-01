<?php
/* @var $this CarpricetblController */
/* @var $model Carpricetbl */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'carpricetbl-form',
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
               <div class="col-sm-7"><b><font size="5" color="blue">اسعار السيارات</font></b></div>           
               
           </div>
           </div>
  <div class="panel-body">
      
        <div class="container-fluid">
	<div class="row">
                <div class ="col-sm-3">	
		<?php echo $form->labelEx($model,'car_id'); ?>
                </div>
                <div class ="col-sm-3" dir="rtl">
		<?php echo $form->dropDownList($model,'car_id', CHtml::listData(Carstbl::model()->findAll() , 'car_id', 'chass_no'),array('class'=>'form-control'));?>
		<?php echo $form->error($model,'car_id'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3">	
		<?php echo $form->labelEx($model,'cost_price'); ?>
                </div>
                <div class ="col-sm-3" dir="rtl">
		<?php echo $form->textField($model,'cost_price' , array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'cost_price'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'off_price'); ?>
                </div>
                <div class ="col-sm-3" dir="rtl">
		<?php echo $form->textField($model,'off_price'  , array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'off_price'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'sale_price_from'); ?>
                </div>
                <div class ="col-sm-3" dir="rtl">
		<?php echo $form->textField($model,'sale_price_from'  , array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'sale_price_from'); ?>
                </div>
                <div class ="col-sm-3">  
		<?php echo $form->labelEx($model,'sale_price_to'); ?>
                </div>
                <div class ="col-sm-3" dir="rtl">
		<?php echo $form->textField($model,'sale_price_to'  , array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'sale_price_to'); ?>
                </div>
	</div>

                <div class ="col-sm-3"> 
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save' , array('class'=>'btn btn-default')); ?>
	        </div>

<?php $this->endWidget(); ?>
        </div>
  </div>
  </div>
</div><!-- form -->