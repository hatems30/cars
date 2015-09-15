<?php
/* @var $this CallstblController */
/* @var $model Callstbl */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'call_id'); ?>
		<?php echo $form->textField($model,'call_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'call_date'); ?>
		<?php echo $form->textField($model,'call_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'call_time'); ?>
		<?php echo $form->textField($model,'call_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'car_data'); ?>
		<?php echo $form->textField($model,'car_data',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'call_employee_id'); ?>
		<?php echo $form->textField($model,'call_employee_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'customer'); ?>
		<?php echo $form->textField($model,'customer',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'service_employee_id'); ?>
		<?php echo $form->textField($model,'service_employee_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'area'); ?>
		<?php echo $form->textField($model,'area',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'how'); ?>
		<?php echo $form->textField($model,'how',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->