
<?php
/* @var $this BrandsController */
/* @var $model Brands */
/* @var $form CActiveForm */
?>
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'brands-form',
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
               <div class="col-sm-6"><b><font size="5" color="blue">الماركات</font></b></div>           
               
           </div>
           </div>
  <div class="panel-body">      
        <div class="container-fluid">
            <div class="row">
                 <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'brand_name'); ?>
                 </div>
                <div class ="col-sm-3">
		<?php echo $form->textField($model,'brand_name',array('class'=>'form-control' )); ?>
		<?php echo $form->error($model,'brand_name'); ?>
                </div>
            
                <div class ="col-sm-3" dir="rtl">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save' , array('class'=>'btn btn-default')); ?>
                </div>
	</div>
        </div>   
  </div>
  </div>
   
<?php $this->endWidget(); ?>
</div>