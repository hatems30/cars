<?php
/* @var $this CarpricetblController */
/* @var $model Carpricetbl */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'price_id'); ?>
		<?php echo $form->textField($model,'price_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'car_id'); ?>
		<?php echo $form->textField($model,'car_id'); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->