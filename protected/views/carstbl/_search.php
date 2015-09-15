<?php
/* @var $this CarstblController */
/* @var $model Carstbl */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'car_id'); ?>
		<?php echo $form->textField($model,'car_id'); ?>
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
		<?php echo $form->label($model,'car_spec'); ?>
		<?php echo $form->textField($model,'car_spec',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'color_id'); ?>
		<?php echo $form->textField($model,'color_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'car_year'); ?>
		<?php echo $form->textField($model,'car_year',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'chass_no'); ?>
		<?php echo $form->textField($model,'chass_no',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'motor_no'); ?>
		<?php echo $form->textField($model,'motor_no',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'branch_id'); ?>
		<?php echo $form->textField($model,'branch_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'store_id'); ?>
		<?php echo $form->textField($model,'store_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'supplier_id'); ?>
		<?php echo $form->textField($model,'supplier_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'add_date'); ?>
		<?php echo $form->textField($model,'add_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cost_price'); ?>
		<?php echo $form->textField($model,'cost_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'off_price'); ?>
		<?php echo $form->textField($model,'off_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sale_price_from'); ?>
		<?php echo $form->textField($model,'sale_price_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sale_price_to'); ?>
		<?php echo $form->textField($model,'sale_price_to'); ?>
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