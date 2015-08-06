<?php
/* @var $this CarstblController */
/* @var $model Carstbl */
/* @var $form CActiveForm */
?>

<div class="form" dir='rtl'>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'carstbl-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
            
		
		<?php //echo $form->textField($model,'brand_id'); ?>
		<?php echo $form->labelEx($model,'brand_id'); ?>
                <?php echo $form->dropDownList($model,'brand_id', CHtml::listData(brands::model()->findAll(), 'brand_id', 'brand_name')); ?>
                <?php echo $form->error($model,'brand_id'); ?>  
                           
	</div>

	<div class="row">
            <!--
		<?php echo $form->labelEx($model,'model_id'); ?>
		<?php echo $form->textField($model,'model_id'); ?>
		<?php echo $form->error($model,'model_id'); ?>
            -->
            <?php echo 'موديل السيارة' ?>
            <?php echo $form->dropDownList($model,'model_id', CHtml::listData(carmodel::model()->findAll(), 'model_id', 'model_name')); ?>
	</div>

	<div class="row">
	        <!--	
                <?php echo $form->labelEx($model,'color_id'); ?> 
            
		<?php echo $form->textField($model,'color_id'); ?>
		<?php echo $form->error($model,'color_id'); ?>
                -->
            <?php echo 'لــون السيارة' ?>
            <?php echo $form->dropDownList($model,'color_id', CHtml::listData(colors::model()->findAll(), 'color_id', 'color_name')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'chass_no'); ?>
		<?php echo $form->textField($model,'chass_no',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'chass_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'motor_no'); ?>
		<?php echo $form->textField($model,'motor_no',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'motor_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'off_price'); ?>
		<?php echo $form->textField($model,'off_price'); ?>
		<?php echo $form->error($model,'off_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cost_price'); ?>
		<?php echo $form->textField($model,'cost_price'); ?>
		<?php echo $form->error($model,'cost_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sale_price'); ?>
		<?php echo $form->textField($model,'sale_price'); ?>
		<?php echo $form->error($model,'sale_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'car_code'); ?>
		<?php echo $form->textField($model,'car_code',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'car_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'car_spec'); ?>
		<?php echo $form->textField($model,'car_spec',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'car_spec'); ?>
	</div>

	<div class="row">
            <!--
		<?php echo $form->labelEx($model,'branch_id'); ?>
		<?php echo $form->textField($model,'branch_id'); ?>
		<?php echo $form->error($model,'branch_id'); ?>
            -->
            <?php echo 'الفرع' ?>
            <?php echo $form->dropDownList($model,'branch_id', CHtml::listData(branchs::model()->findAll(), 'branch_id', 'branch_name')); ?>            
        </div>

	<div class="row">
           
		<?php echo $form->labelEx($model,'store_id'); ?>          
            <?php echo $form->dropDownList($model,'store_id', CHtml::listData(stores::model()->findAll(), 'store_id', 'store_name')); ?>  
            		<?php echo $form->error($model,'store_id'); ?>
	</div>

	<div class="row">
            <!--
		<?php // echo $form->labelEx($model,'supplier_id'); ?>
		<?php //echo $form->textField($model,'supplier_id'); ?>
		
            -->
            <?php echo '<b>المورد</b>' ?>
            <?php echo $form->dropDownList($model,'supplier_id', CHtml::listData(suppliers::model()->findAll(), 'supplier_id', 'supplier_name')); ?>  
            <?php echo $form->error($model,'supplier_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->


