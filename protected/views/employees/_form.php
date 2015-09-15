<?php
/* @var $this EmployeesController */
/* @var $model Employees */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employees-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>	        
    <div  id="panel" class="panel panel-default">
                  <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><b><font size="5" color="blue">الموظفين</font></b></div>           
               
           </div>
           </div>
    <div class="panel-body">      
        <div class="container-fluid">            
	<div class="row">
                <div class ="col-sm-3" dir =rtl>	
		<?php echo $form->labelEx($model,'employee_name'); ?>
                </div>
                <div class ="col-md-9">
		<?php echo $form->textField($model,'employee_name',array('size'=>60,'maxlength'=>255 , 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'employee_name'); ?>
                </div>
        </div>
        <div class="row">    
	        <div class ="col-md-3" dir =rtl>
		<?php echo $form->labelEx($model,'employee_type'); ?>
                </div>
                <div class ="col-md-5">
                <?php echo $form->dropDownList($model,'employee_type',array("مبيعات"=>"مبيعات","تراخيص"=>"تراخيص" ,"خدمة عملاء"=>"خدمة عملاء"),array('empty'=>'' ,'class'=>'form-control' )); ?>    
		<?php echo $form->error($model,'employee_type'); ?>
                </div>
	</div>
	<div class="row">
                <div class ="col-md-3" dir =rtl>
		<?php echo $form->labelEx($model,'branch_id'); ?>
                </div>
                <div class ="col-md-5">
		<?php echo $form->dropDownList($model,'branch_id', CHtml::listData(Branchs::model()->findAll(), 'branch_id', 'branch_name') , array ("class" => "form-control")); ?>  
		<?php echo $form->error($model,'branch_id'); ?>
                </div>
	</div>
	<div class="row">
                <div class ="col-md-3" dir =rtl>
		<?php echo $form->labelEx($model,'manager_id'); ?>
                </div>
                <div class ="col-md-5">
		<?php echo $form->dropDownList($model,'manager_id', CHtml::listData(Employees::model()->findAll() , 'employee_id', 'employee_name') , array ('empty' => '' ,"class" => "form-control")); ?>
		<?php echo $form->error($model,'manager_id'); ?>
                </div>
	</div>
        <div class ="col-md-3">    
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save' , array('class'=>'btn btn-default')); ?>
	</div>
        </div>

<?php $this->endWidget(); ?>
        </div>
    </div>
    </div>
    </body>
</html>
</div>

