<?php
/* @var $this OutstocktblController */
/* @var $model Outstocktbl */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'outstocktbl-form',
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
               <div class="col-sm-7"><b><font size="5" color="blue">Stock خارجي</font></b></div>           
               
           </div>
           </div>
  <div class="panel-body">
      
        <div class="container-fluid">
	<div class="row">
                
            <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'car_name'); ?>                
            </div>
            <div class ="col-sm-3" dir =rtl>
		<?php echo $form->textField($model,'car_name',array('size'=>60,'maxlength'=>255 , 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'car_name'); ?>                
            </div>
	</div>

	<div class="row">
            <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'car_color'); ?>
            </div>
            <div class ="col-sm-3" dir =rtl>
		<?php echo $form->textField($model,'car_color',array('size'=>60,'maxlength'=>255 , 'class'=>'form-control' )); ?>
		<?php echo $form->error($model,'car_color'); ?>
            </div>
	</div>

	<div class="row">
            <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'notes'); ?>
            </div>
            <div class ="col-sm-3" dir="rtl">
		<?php echo $form->textField($model,'notes',array('size'=>60,'maxlength'=>255 , 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'notes'); ?>
            </div>
	</div>

	<div class="col-sm-3">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'اضافة' : 'حفظ' , array('class'=>'btn btn-default' , 'style'=>'font-size:18px')); ?>
	</div>

<?php $this->endWidget(); ?>
        </div>
  </div>
  </div>
</div>
</div><!-- form -->
