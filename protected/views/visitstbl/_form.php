<?php
/* @var $this VisitstblController */
/* @var $model Visitstbl */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'visitstbl-form',
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
               <div class="col-sm-7"><b><font size="5" color="blue">الزيارات</font></b></div>           
               
           </div>
           </div>
    <div class="panel-body">      
        <div class="container-fluid">            
	<div class="row">
                <div class ="col-sm-3">	
		<?php echo $form->labelEx($model,'visit_date'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php                    
                    $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                                                          'name'=>'Visitstbl[visit_date]', 
                                                                          'model' => $model,
                                                                          'id' => 'Visitstbl_visit_date'       ,             
                                                                          'value' => $model->visit_date,
                                                                          'options'=>array( 'showButtonPanel'=>true,'dateFormat'=>'yy-mm-dd',),
                                                                          'htmlOptions'=>array('class'=>'form-control','readonly'=>'true'),
                                                                        ));                                           
                ?>
		<?php echo $form->error($model,'visit_date'); ?>
                </div>
	</div>
            <div class="row">
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'branch_id'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>		
                    <?php
                       if($this->action->Id=='update')                         
                       {
                            echo $form->textField($model,'branch_id' ,array('class'=>'form-control' , 'class'=>'hidden'));                       
                            echo $form->textField(Branchs::model()->findByAttributes(array('branch_id' => $model->branch_id)),'branch_name' ,array('class'=>'form-control' , 'readonly'=>'true'));
                       } 
                       elseif ($this->action->Id=='create')
                       {
                            $user_name = Yii::app()->user->username;
                            $emps = User::model()->findBySql("SELECT `user`.branch_id FROM `user` where `user`.username = '$user_name'");                              
                            echo $form->textField($model,'branch_id' ,array('class'=>'form-control' , 'class'=>'hidden' , 'value'=>$emps['branch_id']));                       
                            echo $form->textField(Branchs::model()->findByAttributes(array('branch_id'=>$emps['branch_id'])),'branch_name' ,array('class'=>'form-control' , 'readonly'=>'true'));                           
                       }
                ?>
                <?php echo $form->error($model,'branch_id'); ?>
                </div>   
            </div>
	<div class="row">
            <div class ="col-sm-3">	
		<?php echo $form->labelEx($model,'customer_name'); ?>
            </div>
            <div class ="col-sm-3" dir =rtl>
		<?php echo $form->textField($model,'customer_name',array('size'=>60,'maxlength'=>255 , 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'customer_name'); ?>
            </div>
	</div>

	<div class="row">
            <div class ="col-sm-3">	
		<?php echo $form->labelEx($model,'car_data'); ?>
            </div>
            <div class ="col-sm-3" dir =rtl>
		<?php echo $form->textField($model,'car_data',array('size'=>60,'maxlength'=>255 , 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'car_data'); ?>
            </div>
	</div>

	<div class="row">
            <div class ="col-sm-3">	
		<?php echo $form->labelEx($model,'employee_id'); ?>
            </div>
            <div class ="col-sm-3" dir =rtl>
                <?php $user_branch = Yii::app()->user->branch_id; ?>  
		<?php echo $form->dropDownList($model,'employee_id', CHtml::listData(Employees::model()->findAllByAttributes(array('branch_id'=>$user_branch)), 'employee_id', 'employee_name') , array('empty'=>'' ,'class'=>'form-control' )); ?>
		<?php echo $form->error($model,'employee_id'); ?>
            </div>
	</div>

	<div class="row">
            <div class ="col-sm-3">	
		<?php echo $form->labelEx($model,'emp_comment'); ?>
            </div>
            <div class ="col-sm-9" dir =rtl>
		<?php echo $form->textArea($model,'emp_comment',array('rows'=>6, 'cols'=>50 , 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'emp_comment'); ?>
            </div>
	</div>

        <div class ="col-md-3">    
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'اضافة' : 'حفظ' , array('class'=>'btn btn-default' , 'style'=>'font-size:18px')); ?>
	</div>
        </div>

<?php $this->endWidget(); ?>
        </div>
    </div>
    </div>
</div>
</div><!-- form -->