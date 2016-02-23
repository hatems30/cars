<?php
/* @var $this UserpertblController */
/* @var $model Userpertbl */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'userpertbl-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

       <div class="panel panel-default"> 
                       <div class="panel-heading">
               <div class="row">
               <div class="col-sm-7"><b><font size="5" color="blue">الصلاحيات </font></b></div>           
               
           </div>
           </div>
           <div class="panel-body">
           <div class="container-fluid">
	<div class="row">
                <div class ="col-md-3">
		<?php echo $form->labelEx($model,'user_id'); ?>
                </div>
                <div class ="col-md-3" dir="rtl">
		<?php echo $form->dropDownList($model,'user_id', CHtml::listData(User::model()->findAll(), 'id', 'username'),array("class"=>"form-control" , 'empty'=>''));  ?>
		<?php echo $form->error($model,'user_id'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-md-3">
		<?php echo $form->labelEx($model,'controller_id'); ?>
                </div>
                <div class ="col-md-3" dir="rtl">
		<?php echo $form->dropDownList($model,'controller_id', CHtml::listData(Controllers::model()->findAll(array('order' => 'controller_form_name')), 'controller_id', 'controller_form_name'),array("class"=>"form-control" , 'empty'=>''));  ?>
		<?php echo $form->error($model,'controller_id'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-md-3">
		<?php echo $form->labelEx($model,'per_type'); ?>
                </div>
                <div class ="col-md-3" dir="rtl">
		<?php echo $form->dropDownList($model,'per_type',array("ReadWrite"=>"ReadWrite","Add"=>"Add","Read"=>"Read" ,"edit"=>"edit","Deny"=>"Deny"),array('empty'=>'' ,'class'=>'form-control' )); ?>
		<?php echo $form->error($model,'per_type'); ?>
                </div>
	</div>

	<div class ="col-md-3">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save' , array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>
           </div>
           </div>
       </div>
</div>
</div><!-- form -->