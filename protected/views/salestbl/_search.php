<?php
/* @var $this SalestblController */
/* @var $model Salestbl */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'invoice_id'); ?>
		<?php echo $form->textField($model,'invoice_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'invoice_date'); ?>
		<?php echo $form->textField($model,'invoice_date'); ?>
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
		<?php echo $form->label($model,'car_id'); ?>
		<?php echo $form->textField($model,'car_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'customer_id'); ?>
		<?php echo $form->textField($model,'customer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'finance_type'); ?>
		<?php echo $form->textField($model,'finance_type',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cach_price'); ?>
		<?php echo $form->textField($model,'cach_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'downpayment'); ?>
		<?php echo $form->textField($model,'downpayment'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monthly_premium'); ?>
		<?php echo $form->textField($model,'monthly_premium'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'months_count'); ?>
		<?php echo $form->textField($model,'months_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'interest_rate'); ?>
		<?php echo $form->textField($model,'interest_rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bank_id'); ?>
		<?php echo $form->textField($model,'bank_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transfer_amount'); ?>
		<?php echo $form->textField($model,'transfer_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bank_down_amount'); ?>
		<?php echo $form->textField($model,'bank_down_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'expenses'); ?>
		<?php echo $form->textField($model,'expenses'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'insurance_comp_id'); ?>
		<?php echo $form->textField($model,'insurance_comp_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'insurance_type'); ?>
		<?php echo $form->textField($model,'insurance_type',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'insurance_amount'); ?>
		<?php echo $form->textField($model,'insurance_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'insurance_rate'); ?>
		<?php echo $form->textField($model,'insurance_rate'); ?>
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