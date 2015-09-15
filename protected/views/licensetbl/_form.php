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
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


       <div class="panel panel-default"> 
                       <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><b><font size="5" color="blue">التراخيص</font></b></div>           
               
           </div>
           </div>
           <div class="panel-body">
           <div class="container-fluid">
	<div class="row">
                <div class ="col-md-3" dir =rtl>
		<?php echo $form->labelEx($model,'branch_id'); ?>
                </div>
                <div class ="col-md-3">
		<?php echo $form->dropDownList($model,'branch_id', CHtml::listData(Branchs::model()->findAll(), 'branch_id', 'branch_name'),array("class"=>"form-control" , 'empty'=>''));  ?>
		<?php echo $form->error($model,'branch_id'); ?>
                </div>
	</div>

	<div class="row">
            <div id="ajax-car">
                
            </div>
	</div>

	<div class="row">
                <div class ="col-md-3" dir =rtl>
		<?php echo $form->labelEx($model,'employee_id'); ?>
                </div>
                <div class ="col-md-3">
		<?php echo $form->dropDownList($model,'employee_id', CHtml::listData(Employees::model()->findAll(), 'employee_id', 'employee_name'),array("class"=>"form-control" , 'empty'=>''));  ?>
		<?php echo $form->error($model,'employee_id'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-md-3" dir =rtl>
		<?php echo $form->labelEx($model,'traffic_id'); ?>
                </div>
                <div class ="col-md-3">
		<?php echo $form->dropDownList($model,'traffic_id', CHtml::listData(Traffictbl::model()->findAll(), 'traffic_id', 'traffic_name'),array("class"=>"form-control" , 'empty'=>''));  ?>
		<?php echo $form->error($model,'traffic_id'); ?>
                </div>
                    
	</div>

	<div class="row">
                <div class ="col-md-3" dir =rtl>
		<?php echo $form->labelEx($model,'super_employee_id'); ?>
                </div>
                <div class ="col-md-3">
		<?php echo $form->dropDownList($model,'super_employee_id', CHtml::listData(Employees::model()->findAll(), 'employee_id', 'employee_name'),array("class"=>"form-control" , 'empty'=>''));  ?>
		<?php echo $form->error($model,'super_employee_id'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-md-3" dir =rtl>
		<?php echo $form->labelEx($model,'notes'); ?>
                </div>
                <div class ="col-md-3">
		<?php echo $form->textField($model,'notes',array('size'=>60,'maxlength'=>255 , 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'notes'); ?>
                </div>
	</div>

	<div class ="col-md-3" dir =rtl>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save' , array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script type ="text/javascript">      
    $(function(){
        
        
          $('#Licensetbl_branch_id').on('change',function(){                  
              if($(this).val() !==''){
                  $.ajax({
                  url: "<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Licensetbl/Getcar",
                  data:{"id":$(this).val(),"car_id":"<?php echo $model->car_id ?>",},
                  method:'POST',
                   success:function(data){$('#ajax-car').html(data);}                                
              });
              }
          })                     
      })               
     $(document).ready(function(){     
    $('#Licensetbl_branch_id').change();    
    })
        </script>