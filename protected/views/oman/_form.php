<?php
/* @var $this OmanController */
/* @var $model Oman */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'oman-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'oman_id'); ?>
		<?php echo $form->textField($model,'oman_id'); ?>
		<?php echo $form->error($model,'oman_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'oman_name'); ?>
		<?php echo $form->textField($model,'oman_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'oman_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->