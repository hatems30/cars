<?php
/* @var $this InnersaletblController */
/* @var $model Innersaletbl */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'trs_id'); ?>
		<?php echo $form->textField($model,'trs_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'trs_date'); ?>
		<?php echo $form->textField($model,'trs_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'from_branch_id'); ?>
		<?php echo $form->textField($model,'from_branch_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'to_branch_id'); ?>
		<?php echo $form->textField($model,'to_branch_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'car_id'); ?>
		<?php echo $form->textField($model,'car_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->