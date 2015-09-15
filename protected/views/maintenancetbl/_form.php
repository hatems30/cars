<?php
/* @var $this MaintenancetblController */
/* @var $model Maintenancetbl */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'maintenancetbl-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<div class="panel panel-default">
                  <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><b><font size="5" color="blue">حجز الصيانة</font></b></div>           
               
           </div>
           </div>
  <div class="panel-body">
      
        <div class="container-fluid">
	<div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'m_hold_date'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dateField($model,'m_hold_date' , array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'m_hold_date'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'customer_name'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->textField($model,'customer_name',array('size'=>60,'maxlength'=>255 , 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'customer_name'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'car_data'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->textField($model,'car_data',array('size'=>60,'maxlength'=>255 , 'class'=>'form-control' )); ?>
		<?php echo $form->error($model,'car_data'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'m_type'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->textField($model,'m_type',array('size'=>60,'maxlength'=>255 , 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'m_type'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'m_center_id'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'m_center_id', CHtml::listData(Maintenancetbl::model()->findAll(), 'm_center_id', 'm_center_name'),array('class'=>'form-control') );  ?>
		<?php echo $form->error($model,'m_center_id'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'m_date'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dateField($model,'m_date' , array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'m_date'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'m_area'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->textField($model,'m_area',array('size'=>60,'maxlength'=>255 , 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'m_area'); ?>
                </div>
                    
	</div>

	<div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'notes'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->textField($model,'notes',array('size'=>60,'maxlength'=>255 , 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'notes'); ?>
                </div>
	</div>

	<div class ="col-sm-3" dir =rtl>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save' , array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->