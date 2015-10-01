<?php
/* @var $this UserpertblController */
/* @var $model Userpertbl */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'per_id'); ?>
		<?php echo $form->textField($model,'per_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'controller_id'); ?>
		<?php echo $form->textField($model,'controller_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_type'); ?>
		<?php echo $form->textField($model,'per_type',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->