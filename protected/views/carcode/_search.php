<?php
/* @var $this CarcodeController */
/* @var $model Carcode */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'code_id'); ?>
		<?php echo $form->textField($model,'code_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_name'); ?>
		<?php echo $form->textField($model,'code_name',array('size'=>60,'maxlength'=>255)); ?>
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
		<?php echo $form->label($model,'code_01'); ?>
		<?php echo $form->textField($model,'code_01',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_02'); ?>
		<?php echo $form->textField($model,'code_02',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_03'); ?>
		<?php echo $form->textField($model,'code_03',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_04'); ?>
		<?php echo $form->textField($model,'code_04',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_05'); ?>
		<?php echo $form->textField($model,'code_05',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_06'); ?>
		<?php echo $form->textField($model,'code_06',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_07'); ?>
		<?php echo $form->textField($model,'code_07',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_08'); ?>
		<?php echo $form->textField($model,'code_08',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_09'); ?>
		<?php echo $form->textField($model,'code_09',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_10'); ?>
		<?php echo $form->textField($model,'code_10',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_11'); ?>
		<?php echo $form->textField($model,'code_11',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_12'); ?>
		<?php echo $form->textField($model,'code_12',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_13'); ?>
		<?php echo $form->textField($model,'code_13',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_14'); ?>
		<?php echo $form->textField($model,'code_14',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_15'); ?>
		<?php echo $form->textField($model,'code_15',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_16'); ?>
		<?php echo $form->textField($model,'code_16',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_17'); ?>
		<?php echo $form->textField($model,'code_17',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_18'); ?>
		<?php echo $form->textField($model,'code_18',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_19'); ?>
		<?php echo $form->textField($model,'code_19',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_20'); ?>
		<?php echo $form->textField($model,'code_20',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_21'); ?>
		<?php echo $form->textField($model,'code_21',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_22'); ?>
		<?php echo $form->textField($model,'code_22',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_23'); ?>
		<?php echo $form->textField($model,'code_23',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_24'); ?>
		<?php echo $form->textField($model,'code_24',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_25'); ?>
		<?php echo $form->textField($model,'code_25',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_26'); ?>
		<?php echo $form->textField($model,'code_26',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_27'); ?>
		<?php echo $form->textField($model,'code_27',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_28'); ?>
		<?php echo $form->textField($model,'code_28',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_29'); ?>
		<?php echo $form->textField($model,'code_29',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_30'); ?>
		<?php echo $form->textField($model,'code_30',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_31'); ?>
		<?php echo $form->textField($model,'code_31',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_32'); ?>
		<?php echo $form->textField($model,'code_32',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_33'); ?>
		<?php echo $form->textField($model,'code_33',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_34'); ?>
		<?php echo $form->textField($model,'code_34',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_35'); ?>
		<?php echo $form->textField($model,'code_35',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_36'); ?>
		<?php echo $form->textField($model,'code_36',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_37'); ?>
		<?php echo $form->textField($model,'code_37',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_38'); ?>
		<?php echo $form->textField($model,'code_38',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_39'); ?>
		<?php echo $form->textField($model,'code_39',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_40'); ?>
		<?php echo $form->textField($model,'code_40',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->