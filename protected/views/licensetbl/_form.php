<?php
/* @var $this LicensetblController */
/* @var $model Licensetbl */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'licensetbl-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data',),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<?php
$user = Yii::app()->user->username;
$user_data = User::model()->findByAttributes(array('username'=>$user));
$id = $user_data['branch_id'];
?>
       <div class="panel panel-default"> 
                       <div class="panel-heading">
               <div class="row">
               <div class="col-sm-7"><b><font size="5" color="blue">التراخيص</font></b></div>           
               
           </div>
           </div>
           <div class="panel-body">
           <div class="container-fluid">
	<div class="row">
                <div class ="col-md-3">
		<?php echo $form->labelEx($model,'branch_id'); ?>
                </div>
                <div class ="col-md-3" dir="rtl">
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
                <div class ="col-md-3">
		<?php echo $form->labelEx($model,'car_id'); ?>
                </div>
                <div class ="col-md-3" dir="rtl">
                    <?php
                    $sql_stat = "SELECT carstbl.car_id, carstbl.chass_no, '1' , '2' FROM carstbl where carstbl.branch_id = $id
                                 UNION
                                 SELECT carstbl.car_id, carstbl.chass_no, innersaletbl.trs_id, innersaletbl.trs_date 
                                 FROM carstbl INNER JOIN innersaletbl ON innersaletbl.car_id = carstbl.car_id where innersaletbl.to_branch_id = $id"                                       
                    ?>
		<?php echo $form->dropDownList($model,'car_id', CHtml::listData(Carstbl::model()->findAllBySql($sql_stat), 'car_id', 'chass_no'),array("class"=>"form-control" , 'empty'=>''));  ?>
		<?php echo $form->error($model,'car_id'); ?>
                </div>
	</div>
	<div class="row">
                <div class ="col-md-3">
		<?php echo $form->labelEx($model,'license_date'); ?>
                </div>
                <div class ="col-md-3" dir="rtl">
		<?php                    
                    $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                                                          'name'=>'Licensetbl[license_date]', 
                                                                          'model' => $model,
                                                                          'id' => 'Licensetbl_license_date'       ,             
                                                                          'value' => $model->license_date,
                                                                          'options'=>array( 'showButtonPanel'=>true,'dateFormat'=>'yy-mm-dd',),
                                                                          'htmlOptions'=>array('class'=>'form-control','readonly'=>'true'),
                                                                        ));                                           
                ?>
		<?php echo $form->error($model,'license_date'); ?>
                </div>
	</div>
	<div class="row">
                <div class ="col-md-3">
		<?php echo $form->labelEx($model,'employee_id'); ?>
                </div>
                <div class ="col-md-3" dir="rtl">
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
                <div class ="col-md-3">
		<?php echo $form->labelEx($model,'traffic_id'); ?>
                </div>
                <div class ="col-md-3" dir="rtl">
		<?php echo $form->dropDownList($model,'traffic_id', CHtml::listData(Traffictbl::model()->findAll(), 'traffic_id', 'traffic_name'),array("class"=>"form-control" , 'empty'=>''));  ?>
		<?php echo $form->error($model,'traffic_id'); ?>
                </div>
                    
	</div>

	<div class="row">
                <div class ="col-md-3">
		<?php echo $form->labelEx($model,'super_employee_id'); ?>
                </div>
                <div class ="col-md-3" dir="rtl">
		<?php echo $form->dropDownList($model,'super_employee_id', CHtml::listData(Employees::model()->findAll(), 'employee_id', 'employee_name'),array("class"=>"form-control" , 'empty'=>''));  ?>
		<?php echo $form->error($model,'super_employee_id'); ?>
                </div>
	</div>
        <div class="row">
                <div class="col-sm-3">
                <?php echo $form->labelEx($model,'image'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
                <?php echo CHtml::activeFileField($model, 'image'); ?>
                <?php echo $form->error($model,'image'); ?>
                </div>
                <div class ="col-sm-3">
                <?php //if($model->isNewRecord !='1'){ ?>
                <?php echo CHtml::image(Yii::app()->request->baseUrl.'/test/'.$model->image,"image",array("width"=>200)); ?>
                <?php //} ?>
                </div>
        </div>               
	<div class="row">
                <div class ="col-md-3">
		<?php echo $form->labelEx($model,'notes'); ?>
                </div>
                <div class ="col-md-3" dir="rtl">
		<?php echo $form->textField($model,'notes',array('size'=>60,'maxlength'=>255 , 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'notes'); ?>
                </div>
	</div>

	<div class ="col-md-3">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'اضافة' : 'حفظ' , array('class'=>'btn btn-default' , 'style'=>'font-size:18px')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
