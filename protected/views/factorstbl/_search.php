<?php
/* @var $this FactorstblController */
/* @var $model Factorstbl */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'factor_id'); ?>
		<?php echo $form->textField($model,'factor_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cach_factor'); ?>
		<?php echo $form->textField($model,'cach_factor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'premium_factor'); ?>
		<?php echo $form->textField($model,'premium_factor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dealer_factor'); ?>
		<?php echo $form->textField($model,'dealer_factor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'company_factor'); ?>
		<?php echo $form->textField($model,'company_factor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->