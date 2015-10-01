<?php
/* @var $this StoresController */
/* @var $model Stores */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'stores-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        
    <div  id="panel" class="panel panel-default">
                        <div class="panel-heading">
               <div class="row">
               <div class="col-sm-7"><b><font size="5" color="blue">اماكن التخزين</font></b></div>           
               
           </div>
           </div>
    <div class="panel-body">      
        <div class="container-fluid">            
	<div class="row">
                <div class ="col-sm-3" >	
		<?php echo $form->labelEx($model,'store_name'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>	
		<?php echo $form->textField($model,'store_name',array('size'=>60,'maxlength'=>255 , 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'store_name'); ?>
                </div>
	</div>
	<div class="row">
                <div class ="col-sm-3">	
		<?php echo $form->labelEx($model,'branch_id'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>	
		<?php echo $form->dropDownList($model,'branch_id', CHtml::listData(Branchs::model()->findAll(), 'branch_id', 'branch_name'),array("class"=>"form-control" , 'empty'=>''));  ?>
		<?php echo $form->error($model,'branch_id'); ?>
                </div>
	</div>
	<div class ="col-sm-3">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'اضافة' : 'حفظ' , array('class'=>'btn btn-default' , 'style'=>'font-size:18px')); ?>
	</div>

<?php $this->endWidget(); ?>

        </div>
    </div>
    </div>
    </body>
</html>
</div><!-- form -->