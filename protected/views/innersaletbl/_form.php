<?php
/* @var $this InnersaletblController */
/* @var $model Innersaletbl */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'innersaletbl-form',
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
               <div class="col-sm-7"><b><font size="5" color="blue">التحويل بين الفروع</font></b></div>           
               
           </div>
           </div>
  <div class="panel-body">
      
        <div class="container-fluid">
	<div class="row">
                <div class ="col-sm-3" >
		<?php echo $form->labelEx($model,'trs_date'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>    
		<?php echo $form->dateField($model,'trs_date',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'trs_date'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'from_branch_id'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
	        <?php
                if (isset($_REQUEST['branch_id']))
                {    
                    echo $form->dropDownList($model,'from_branch_id', CHtml::listData(Branchs::model()->findAllByAttributes(array('branch_id'=>$_REQUEST['branch_id'])), 'branch_id', 'branch_name'),array('class'=>'form-control') );                  
                }
                else
                {
                    echo $form->dropDownList($model,'from_branch_id', CHtml::listData(Branchs::model()->findAll(), 'branch_id', 'branch_name'),array('class'=>'form-control') );                  
                }
                ?>
		<?php echo $form->error($model,'from_branch_id'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'to_branch_id'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->dropDownList($model,'to_branch_id', CHtml::listData(Branchs::model()->findAll(), 'branch_id', 'branch_name'),array('class'=>'form-control','empty'=>'') ); ?>
		<?php echo $form->error($model,'to_branch_id'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'car_id'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		 <?php
                     if (isset($_REQUEST['car_id']))
                     {
                         echo $form->dropDownList($model,'car_id', CHtml::listData(Carstbl::model()->findAllByAttributes(array('car_id'=>$_REQUEST['car_id'])) , 'car_id', 'chass_no'),array('class'=>'form-control'));                         
                     }
                     else
                     {
                         echo $form->dropDownList($model,'car_id', CHtml::listData(Carstbl::model()->findAll() , 'car_id', 'chass_no'),array('class'=>'form-control'));
                     }
                     echo $form->error($model,'car_id');                      
                ?>
		<?php echo $form->error($model,'car_id'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'price'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->textField($model,'price',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'price'); ?>
                </div>
	</div>
        <div class="row">
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'notes'); ?>
                </div>
                <div class ="col-sm-9"> 
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50 , 'class'=>'form-control') ); ?>
		<?php echo $form->error($model,'notes'); ?>
                </div>
	</div>

	<div class ="col-sm-3">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'اضافة' : 'حفظ' , array('class'=>'btn btn-default' , 'style'=>'font-size:18px')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->