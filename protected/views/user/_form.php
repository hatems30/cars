<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
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
               <div class="col-sm-7"><b><font size="5" color="blue">بيانات المستخدمين</font></b></div>           
               
           </div>
           </div>
  <div class="panel-body">
      
        <div class="container-fluid">
	<div class="row">
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'username'); ?>
                </div>
                <div class ="col-sm-3" dir="rtl">
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'username'); ?>
                </div>	
                <div class ="col-sm-3"> 
		<?php echo $form->labelEx($model,'password'); ?>
                </div>
                <div class ="col-sm-3"> 
		<?php //echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>128)); ?>
                <?php echo $form->textField($model,'password',array('size'=>60,'maxlength'=>128 , 'class'=>'form-control' )); ?>
		<?php echo $form->error($model,'password'); ?>
                </div>
	</div>

        <div class="row">
                <div class ="col-sm-3" >
		<?php echo $form->labelEx($model,'branch_id'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->dropDownList($model,'branch_id', CHtml::listData(Branchs::model()->findAll(), 'branch_id', 'branch_name'),array("class"=>"form-control" , 'empty'=>''));  ?>
		<?php echo $form->error($model,'branch_id'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'employee_id'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>    
		<?php echo $form->dropDownList($model,'employee_id', CHtml::listData(Employees::model()->findAll(), 'employee_id', 'employee_name') , array('empty'=>'' ,'class'=>'form-control' )); ?>  
                <?php echo $form->error($model,'employee_id'); ?>                    
                </div>     
                
        </div>

        <div class="row">
	<div class ="col-sm-3"> 
	    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save' , array('class'=>'btn btn-default')); ?>
        </div>
            <div class ="col-sm-3" dir =rtl>    
            <?php if (isset($model->id ) && !empty($model->id))
            {
                ?>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=userpertbl/admin&view=admin&id=<?php echo $model->id ?>">تعديل الصلاحيات</a>
            
            <?php
            }
            ?>            
	</div>
        </div>

<?php $this->endWidget(); ?>
  </div>
</div>
</div>
</div><!-- form -->