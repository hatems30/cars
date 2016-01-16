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
                       <div class="panel-heading">
               <div class="row">
               <div class="col-sm-7"><b><font size="5" color="blue">حجز صيانة</font></b></div>           
               
           </div>
           </div>
           <div class="panel-body">
           <div class="container-fluid">
	<div class="row">
                
            <div class ="col-md-3">
                <?php echo $form->labelEx($model,'m_hold_date'); ?>                
            </div>
            <div class ="col-md-3" dir="rtl">
                <?php
		                  $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                                                          'name'=>'Maintenancetbl[m_hold_date]', 
                                                                          'model' => $model,
                                                                          'id' => 'Maintenancetbl_m_hold_date'       ,             
                                                                          'value' => $model->m_hold_date,
                                                                          'options'=>array( 'showButtonPanel'=>true,'dateFormat'=>'yy-mm-dd',),
                                                                          'htmlOptions'=>array('class'=>'form-control','readonly'=>'true'),
                                                                        ));                                           
                ?>
		<?php echo $form->error($model,'m_hold_date'); ?>
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
            
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'employee_id'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>                    
		<?php 
                        if($this->action->Id=='update')                         
                       {
                            echo $form->textField($model,'employee_id' ,array('class'=>'form-control' , 'class'=>'hidden'));                       
                            echo $form->textField(Employees::model()->findByAttributes(array('employee_id' => $model->employee_id)),'employee_name' ,array('class'=>'form-control' , 'readonly'=>'true'));
		            echo $form->error($model,'employee_id');     
                       } 
                       elseif ($this->action->Id=='create')
                       {
                            $user_name = Yii::app()->user->username;
                            $emps = Employees::model()->findBySql("SELECT employees.employee_id FROM `user` INNER JOIN employees ON `user`.employee_id = employees.employee_id where `user`.username ='$user_name' LIMIT 1" , 'employee_id');                                                                                                                                        
                            echo $form->textField($model,'employee_id' ,array('class'=>'form-control' , 'class'=>'hidden' , 'value'=>$emps['employee_id']));                       
                            echo $form->textField(Employees::model()->findBysql("SELECT employees.employee_id,employees.employee_name FROM `user` INNER JOIN employees ON `user`.employee_id = employees.employee_id where `user`.username ='$user_name' LIMIT 1"),'employee_name' ,array('class'=>'form-control' , 'readonly'=>'true'));                           
		            echo $form->error($model,'employee_id');  
                       }
                ?>  		
                <?php echo $form->error($model,'employee_id'); ?>                    
                </div>              
	</div>

	<div class="row">
            <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'customer_id'); ?>
            </div>
            <div class ="col-sm-3" dir =rtl>
		<?php echo $form->dropDownList($model,'customer_id', CHtml::listData(Customers::model()->findAll(), 'customer_id', 'customer_name') ,array('empty'=> '', 'class'=>'form-control')); ?>  
		<?php echo $form->error($model,'customer_id'); ?>
            </div>
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
		<?php echo $form->labelEx($model,'m_type'); ?>
             </div>
            <div class ="col-sm-3" dir="rtl">
		<?php echo $form->textField($model,'m_type',array('size'=>60,'maxlength'=>255 , 'class'=>'form-control' )); ?>
		<?php echo $form->error($model,'m_type'); ?>
            </div>
            <div class ="col-sm-3">              
		<?php echo $form->labelEx($model,'m_center_id'); ?>
            </div>
            <div class ="col-sm-3" dir="rtl">  
		<?php echo $form->dropDownList($model,'m_center_id', CHtml::listData(Mcenterstbl::model()->findAll(), 'm_center_id', 'm_center_name') ,array('empty'=> '', 'class'=>'form-control')); ?>  
		<?php echo $form->error($model,'m_center_id'); ?>
            </div>
	</div>

	<div class="row">
            <div class ="col-sm-3"> 
		<?php echo $form->labelEx($model,'m_date'); ?>
            </div>
            <div class ="col-sm-3" dir="rtl"> 
		<?php
		                  $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                                                          'name'=>'Maintenancetbl[m_date]', 
                                                                          'model' => $model,
                                                                          'id' => 'Maintenancetbl_m_date'       ,             
                                                                          'value' => $model->m_date,
                                                                          'options'=>array( 'showButtonPanel'=>true,'dateFormat'=>'yy-mm-dd',),
                                                                          'htmlOptions'=>array('class'=>'form-control','readonly'=>'true'),
                                                                        ));                                           
                ?>
		<?php echo $form->error($model,'m_date'); ?>
            </div>
	</div>
	<div class="row">
            <div class ="col-sm-3"> 
		<?php echo $form->labelEx($model,'notes'); ?>
            </div>
            <div class ="col-sm-6" dir="rtl"> 
		<?php echo $form->textField($model,'notes',array('size'=>60,'maxlength'=>255 , 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'notes'); ?>
            </div>
	</div>

	<div class ="col-md-3">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'اضافة' : 'حفظ' , array('class'=>'btn btn-default' , 'style'=>'font-size:18px')); ?>
	</div>

<?php $this->endWidget(); ?>
           </div>
           </div>
       </div>
</div>
</div><!-- form -->