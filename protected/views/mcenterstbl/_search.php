<?php
/* @var $this McenterstblController */
/* @var $model Mcenterstbl */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'m_center_id'); ?>
		<?php echo $form->textField($model,'m_center_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m_center_name'); ?>
		<?php echo $form->textField($model,'m_center_name',array('size'=>60,'maxlength'=>255)); ?>
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