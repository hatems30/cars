<?php
/* @var $this ComplaintstblController */
/* @var $model Complaintstbl */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'complaint_id'); ?>
		<?php echo $form->textField($model,'complaint_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'complaint_date'); ?>
		<?php echo $form->textField($model,'complaint_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_id'); ?>
		<?php echo $form->textField($model,'employee_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'customer_name'); ?>
		<?php echo $form->textField($model,'customer_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'car_data'); ?>
		<?php echo $form->textField($model,'car_data',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'complaint_detail'); ?>
		<?php echo $form->textField($model,'complaint_detail',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'notes'); ?>
		<?php echo $form->textField($model,'notes',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->