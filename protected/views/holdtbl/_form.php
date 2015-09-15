<?php
/* @var $this HoldtblController */
/* @var $model Holdtbl */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'holdtbl-form',
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
               <div class="col-sm-6"><b><font size="5" color="blue">حجز سيارة</font></b></div>           
               
           </div>
           </div>        
           <div class="panel-body">
           <div class="container-fluid">        
            <div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'hold_date'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dateField($model,'hold_date', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'hold_date'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'branch_id'); ?>
                </div>
                <div class ="col-sm-3">
                <?php
                if (isset($_REQUEST['branch_id']))
                {    
                    echo $form->dropDownList($model,'branch_id', CHtml::listData(Branchs::model()->findAllByAttributes(array('branch_id'=>$_REQUEST['branch_id'])), 'branch_id', 'branch_name'),array('class'=>'form-control') );                  
                }
                else
                {
                    echo $form->dropDownList($model,'branch_id', CHtml::listData(Branchs::model()->findAll(), 'branch_id', 'branch_name'),array('class'=>'form-control') );                  
                }
                ?>
		<?php echo $form->error($model,'branch_id'); ?>
                </div>

                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'employee_id'); ?>
                </div>
                <div class ="col-sm-3">
		<?php 
                    if (isset($_REQUEST['branch_id']))
                    {
                     echo $form->dropDownList($model,'employee_id', CHtml::listData(Employees::model()->findAllByAttributes(array('branch_id'=>$_REQUEST['branch_id'])), 'employee_id', 'employee_name') , array('empty'=>'' ,'class'=>'form-control' ));
                    }
                    else
                    {
                     echo $form->dropDownList($model,'employee_id', CHtml::listData(Employees::model()->findAll(), 'employee_id', 'employee_name') , array('empty'=>'' ,'class'=>'form-control' ));   
                    }
                ?>  
		<?php echo $form->error($model,'employee_id'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'customer_id'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'customer_id', CHtml::listData(Customers::model()->findAll(), 'customer_id', 'customer_name') ,array('empty'=> '', 'class'=>'form-control')); ?>  
		<?php echo $form->error($model,'customer_id'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'car_id'); ?>
                </div>
                <div class ="col-sm-3">
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
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'sale_type'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'sale_type',array("نقدي"=>"نقدي","قسط مباشر"=>"قسط مباشر" ,"بنك"=>"بنك"),array('empty'=>'' ,'class'=>'form-control' )); ?>
		<?php echo $form->error($model,'sale_type'); ?>
                </div>
        </div>
        <div id="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'price'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->textField($model,'price' , array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'price'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'hold_amount'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->textField($model,'hold_amount' , array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'hold_amount'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'notes'); ?>
                </div>
                <div class ="col-sm-9">
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50 , 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'notes'); ?>
                </div>
	</div>

	<div class ="col-sm-3" dir =rtl>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save' , array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->