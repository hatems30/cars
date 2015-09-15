<?php
/* @var $this BankofferstblController */
/* @var $model Bankofferstbl */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'offer_id'); ?>
		<?php echo $form->textField($model,'offer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'offer_date'); ?>
		<?php echo $form->textField($model,'offer_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'customer_id'); ?>
		<?php echo $form->textField($model,'customer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'brand_id'); ?>
		<?php echo $form->textField($model,'brand_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'model_id'); ?>
		<?php echo $form->textField($model,'model_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_id'); ?>
		<?php echo $form->textField($model,'code_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bank_id'); ?>
		<?php echo $form->textField($model,'bank_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'banker'); ?>
		<?php echo $form->textField($model,'banker',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'branch_id'); ?>
		<?php echo $form->textField($model,'branch_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_id'); ?>
		<?php echo $form->textField($model,'employee_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'offer_status'); ?>
		<?php echo $form->textField($model,'offer_status',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'results'); ?>
		<?php echo $form->textArea($model,'results',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'notes'); ?>
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->