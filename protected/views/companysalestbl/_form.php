<?php
/* @var $this CompanysalestblController */
/* @var $model Companysalestbl */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'companysalestbl-form',
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
               <div class="col-sm-7"><b><font size="5" color="blue">مبيعات الشركات</font></b></div>           
               
           </div>
           </div>
  <div class="panel-body">
      
        <div class="container-fluid">
	<div class="row">
            <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'invoice_date'); ?>
            </div>
            <div class ="col-sm-3" dir =rtl>    
		<?php echo $form->dateField($model,'invoice_date' ,array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'invoice_date'); ?>
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
                            echo $form->textField(Branchs::model()->findByAttributes(array('branch_id' => $model->branch_id)),'branch_name' ,array('class'=>'form-control'));
                       } 
                       elseif ($this->action->Id=='create')
                       {
                            $user_name = Yii::app()->user->username;
                            $emps = User::model()->findBySql("SELECT `user`.branch_id FROM `user` where `user`.username = '$user_name'");  
                            print_r($emps['branch_id']);
                            echo $form->textField($model,'branch_id' ,array('class'=>'form-control' , 'class'=>'hidden' , 'value'=>$emps['branch_id']));                       
                            echo $form->textField(Branchs::model()->findByAttributes(array('branch_id'=>$emps['branch_id'])),'branch_name' ,array('class'=>'form-control'));                           
                       }
                    ?>              
		<?php echo $form->error($model,'branch_id'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'employee_id'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>   
                    <?php
                       if($this->action->Id=='update')                         
                       {
                            echo $form->textField($model,'employee_id' ,array('class'=>'form-control' , 'class'=>'hidden'));                       
                            echo $form->textField(Employees::model()->findByAttributes(array('employee_id' => $model->employee_id)),'employee_name' ,array('class'=>'form-control'));                           
		            echo $form->error($model,'employee_id');     
                       } 
                       elseif ($this->action->Id=='create')
                       {
                            $user_name = Yii::app()->user->username;
                            $emps = Employees::model()->findBySql("SELECT employees.employee_id FROM `user` INNER JOIN employees ON `user`.employee_id = employees.employee_id where `user`.username ='$user_name' LIMIT 1" , 'employee_id');                                                                                                                                        
                            echo $form->textField($model,'employee_id' ,array('class'=>'form-control' , 'class'=>'hidden' , 'value'=>$emps['employee_id']));                       
                            echo $form->textField(Employees::model()->findBysql("SELECT employees.employee_id,employees.employee_name FROM `user` INNER JOIN employees ON `user`.employee_id = employees.employee_id where `user`.username ='$user_name' LIMIT 1"),'employee_name' ,array('class'=>'form-control'));                           
		            echo $form->error($model,'employee_id');  
                       }
                    ?>
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
                                       
                ?>
		<?php echo $form->error($model,'car_id'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'price'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->textField($model,'price' ,array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'price'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'company_id'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->dropDownList($model,'company_id', CHtml::listData(Companiestbl::model()->findAll(), 'company_id', 'company_name') , array('empty'=>'' ,'class'=>'form-control' ));    ?>
		<?php echo $form->error($model,'company_id'); ?>
                </div>
	</div>
            
	<div class="row">
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'cust_pic'); ?>
                </div>
                <div class ="col-sm-6" dir =rtl>
		<?php echo $form->textField($model,'cust_pic' ,array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'cust_pic'); ?>
                </div>
	</div>
            
	<div class="row">
                <div class ="col-sm-3" >                    
		<?php echo $form->labelEx($model,'notes'); ?>
                </div>
                <div class ="col-sm-9" dir =rtl>
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'notes'); ?>
                </div>
	</div>
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'confirm_stat'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
                <?php echo $form->dropDownList($model,'confirm_stat',array("غيرمعتمد"=>"غيرمعتمد","معتمد"=>"معتمد"),array('empty'=>'' , 'class'=>'form-control' )); ?>
		<?php echo $form->error($model,'confirm_stat'); ?>
                </div>
	<div class ="col-sm-3">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'اضافة' : 'حفظ' , array('class'=>'btn btn-default' , 'style'=>'font-size:18px')); ?>
	</div>

<?php $this->endWidget(); ?>
        </div>
  </div>
  </div>
</div><!-- form -->