<?php
/* @var $this CallstblController */
/* @var $model Callstbl */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'callstbl-form',
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
               <div class="col-sm-7"><b><font size="5" color="blue">المكالمات</font></b></div>           
               
           </div>
           </div>
  <div class="panel-body">
      
        <div class="container-fluid">
	<div class="row">
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'call_date'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
                    <?php
		                    $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                                                          'name'=>'Callstbl[call_date]', 
                                                                          'model' => $model,
                                                                          'id' => 'Callstbl_call_date'       ,             
                                                                          'value' => $model->call_date,
                                                                          'options'=>array( 'showButtonPanel'=>true,'dateFormat'=>'yy-mm-dd',),
                                                                          'htmlOptions'=>array('class'=>'form-control','readonly'=>'true'),
                                                                        ));                                           
                    ?>
		<?php echo $form->error($model,'call_date'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'call_time'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
                    <?php
                    /*
		                    $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                                                          'name'=>'Callstbl[call_time]', 
                                                                          'model' => $model,
                                                                          'id' => 'Callstbl_call_time'       ,             
                                                                          'value' => $model->call_date,
                                                                          'options'=>array( 'showButtonPanel'=>true,'dateFormat'=>'H:M:S',),
                                                                          'htmlOptions'=>array('class'=>'form-control'),
                                                                        ));                                           
                     * 
                     */
                    ?>
                    <?php echo $form->timeField($model,'call_time',array('size'=>60,'maxlength'=>255 , 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'call_time'); ?>
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
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'call_employee_id'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->dropDownList($model,'call_employee_id', CHtml::listData(Employees::model()->findAll(), 'employee_id', 'employee_name') , array('empty'=>'' ,'class'=>'form-control' )); ?>
		<?php echo $form->error($model,'call_employee_id'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'customer'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->textField($model,'customer',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'customer'); ?>
                </div>
                    
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'mobile'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->textField($model,'mobile',array('size'=>60,'maxlength'=>255 , 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'mobile'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3"> 
		<?php echo $form->labelEx($model,'service_employee_id'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl> 
		<?php echo $form->dropDownList($model,'service_employee_id', CHtml::listData(Employees::model()->findAll(), 'employee_id', 'employee_name') , array('empty'=>'' ,'class'=>'form-control' )); ?>
		<?php echo $form->error($model,'service_employee_id'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3"> 
		<?php echo $form->labelEx($model,'area'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->textField($model,'area',array('size'=>60,'maxlength'=>255 , 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'area'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'how'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->dropDownList($model,'how',array("Facebook"=>"Facebook","E_mail"=>"E_mail","Call"=>"Call"),array('class'=>'form-control' )); ?>
		<?php echo $form->error($model,'how'); ?>
                </div>
	</div>
	<div class="row" class="disabled">
                <div class ="col-sm-3"> 
		<?php echo $form->labelEx($model,'status'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->dropDownList($model,'status',array("مفتوح"=>"مفتوح","مغلق"=>"مغلق"),array('class'=>'form-control' )); ?>
		<?php echo $form->error($model,'status'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'status_date'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
                    <?php
		                    $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                                                          'name'=>'Callstbl[status_date]', 
                                                                          'model' => $model,
                                                                          'id' => 'Callstbl_status_date'       ,             
                                                                          'value' => $model->status_date,
                                                                          'options'=>array( 'showButtonPanel'=>true,'dateFormat'=>'yy-mm-dd',),
                                                                          'htmlOptions'=>array('class'=>'form-control','readonly'=>'true'),
                                                                        ));                                           
                    ?>
		<?php echo $form->error($model,'status_date'); ?>
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
        </div>
  </div>
  </div>
</div>
</div><!-- form -->