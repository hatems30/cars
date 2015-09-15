<?php
/* @var $this PaperstblController */
/* @var $model Paperstbl */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'paperstbl-form',
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
               <div class="col-sm-6"><b><font size="5" color="blue">تبليغ الاوراق</font></b></div>           
               
           </div>
           </div>
           <div class="panel-body">
           <div class="container-fluid">
	<div class="row">
                <div class ="col-md-3" dir =rtl>
		<?php echo $form->labelEx($model,'paper_date'); ?>
                </div>
                <div class ="col-md-3">
		<?php echo $form->dateField($model,'paper_date',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'paper_date'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-md-3" dir =rtl>
		<?php echo $form->labelEx($model,'sale_type'); ?>
                </div>
                <div class ="col-md-3">
		<?php echo $form->dropDownList($model,'sale_type',array("بيع مباشر"=>"بيع مباشر","موزعين"=>"موزعين","شركات"=>"شركات"),array('empty'=>'' ,'class'=>'form-control' )); ?>
		<?php echo $form->error($model,'sale_type'); ?>
                </div>            
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
		<?php echo $form->labelEx($model,'supplier_id'); ?>
                </div>
                <div class ="col-md-3">
		<?php echo $form->dropDownList($model,'supplier_id', CHtml::listData(Suppliers::model()->findAll(), 'supplier_id', 'supplier_name'),array("class"=>"form-control" , "empty"=>" "));  ?>
		<?php echo $form->error($model,'supplier_id'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-md-3" dir =rtl>
		<?php echo $form->labelEx($model,'paper_status'); ?>
                </div>
                <div class ="col-md-3">
		<?php echo $form->dropDownList($model,'paper_status',array("قيد الاجراء"=>"قيد الاجراء","جاهزة"=>"جاهزة"),array('empty'=>'' ,'class'=>'form-control' )); ?>
		<?php echo $form->error($model,'paper_status'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-md-3" dir =rtl>
		<?php echo $form->labelEx($model,'notes'); ?>
                </div>
                <div class ="col-md-9">
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50 , 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'notes'); ?>
                </div>
	</div>

	<div class ="col-md-3" dir =rtl>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save' , array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>
           </div>
           </div>
       </div>
</div><!-- form -->

<script type ="text/javascript">             
   
   
    $(function(){
        
        
          $('#Paperstbl_branch_id').on('change',function(){   
              if($(this).val() !==''){
                  $.ajax({
                  url: "<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Paperstbl/Getcar",
                  data:{"id":$(this).val(),"car_id":"<?php echo $model->car_id ?>","sale_type":$('#Paperstbl_sale_type').val()},
                  method:'POST',
                   success:function(data){$('#ajax-car').html(data);}                                
              });
              }
          })                     
      })               
     $(document).ready(function(){     
    $('#Paperstbl_branch_id').change();    
    })
        </script>