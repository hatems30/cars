<?php
/* @var $this MaintenancetblController */
/* @var $model Maintenancetbl */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'m_hold_id'); ?>
		<?php echo $form->textField($model,'m_hold_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m_hold_date'); ?>
		<?php echo $form->textField($model,'m_hold_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'customer_name'); ?>
		<?php echo $form->textField($model,'customer_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'car_data'); ?>
		<?php echo $form->textField($model,'car_data',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m_type'); ?>
		<?php echo $form->textField($model,'m_type',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m_center_id'); ?>
		<?php echo $form->textField($model,'m_center_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m_date'); ?>
		<?php echo $form->textField($model,'m_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m_area'); ?>
		<?php echo $form->textField($model,'m_area',array('size'=>60,'maxlength'=>255)); ?>
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