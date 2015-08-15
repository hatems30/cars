<?php
/* @var $this InscompsController */
/* @var $model Inscomps */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'insurance_comp_id'); ?>
		<?php echo $form->textField($model,'insurance_comp_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'insurance_comp_name'); ?>
		<?php echo $form->textField($model,'insurance_comp_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->