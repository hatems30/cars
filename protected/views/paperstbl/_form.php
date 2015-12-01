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
                             <div class="panel-heading">
               <div class="row">
               <div class="col-sm-7"><b><font size="5" color="blue">تبليغ الاوراق</font></b></div>           
               
           </div>
           </div>
           <div class="panel-body">
           <div class="container-fluid">


	<div class="row">
                
            <div class ="col-md-3">		
                <?php echo $form->labelEx($model,'paper_date'); ?>
            </div>
                <div class ="col-md-3" dir="rtl">
		<?php                    
                    $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                                                          'name'=>'Paperstbl[paper_date]', 
                                                                          'model' => $model,
                                                                          'id' => 'Paperstbl_paper_date'       ,             
                                                                          'value' => $model->paper_date,
                                                                          'options'=>array( 'showButtonPanel'=>true,'dateFormat'=>'yy-mm-dd',),
                                                                          'htmlOptions'=>array('class'=>'form-control','readonly'=>'true'),
                                                                        ));                                           
                ?>
		<?php echo $form->error($model,'paper_date'); ?>
                </div>
	</div>

	<div class="row">
            <div class ="col-md-3">	
		<?php echo $form->labelEx($model,'branch_id'); ?>
            </div>
            <div class ="col-md-3" dir="rtl">	
		<?php echo $form->dropDownList($model,'branch_id', CHtml::listData(Branchs::model()->findAll(), 'branch_id', 'branch_name'),array("class"=>"form-control" , "empty"=>" "));  ?>
		<?php echo $form->error($model,'branch_id'); ?>
            </div>
	</div>

	<div class="row">
            <div class ="col-md-3">
		<?php echo $form->labelEx($model,'paper_type'); ?>
            </div>
            <div class ="col-md-3" dir="rtl">
		<?php echo $form->dropDownList($model,'paper_type',array("داخلي"=>"داخلي","خارجي"=>"خارجي"),array('class'=>'form-control' )); ?>
		<?php echo $form->error($model,'paper_type'); ?>
            </div>
	</div>

	<div class="row">
            <div class ="col-md-3">
		<?php echo $form->labelEx($model,'car_id'); ?>
            </div>
            <div class ="col-md-3" dir="rtl">
		<?php echo $form->dropDownList($model,'car_id', CHtml::listData(Carstbl::model()->findAll(), 'car_id', 'chass_no'),array("class"=>"form-control" , "empty"=>" "));  ?>
		<?php echo $form->error($model,'car_id'); ?>
            </div>
	</div>
<div id="supplier-hidden" class="hidden">
	<div class="row">
            <div class ="col-md-3">
		<?php echo $form->labelEx($model,'supplier_id'); ?>
            </div>
            <div class ="col-md-3" dir="rtl">
		<?php echo $form->dropDownList($model,'supplier_id', CHtml::listData(Suppliers::model()->findAll(), 'supplier_id', 'supplier_name'),array("class"=>"form-control" , "empty"=>" "));  ?>
		<?php echo $form->error($model,'supplier_id'); ?>
            </div>
	</div>
</div>
<div id ="tobranch-hidden" class="hidden">
	<div class="row">
            <div class ="col-md-3">
		<?php echo $form->labelEx($model,'to_branch_id'); ?>
            </div>
            <div class ="col-md-3" dir="rtl">
		<?php echo $form->dropDownList($model,'to_branch_id', CHtml::listData(Branchs::model()->findAll(), 'branch_id', 'branch_name'),array("class"=>"form-control" , "empty"=>" "));  ?>
		<?php echo $form->error($model,'to_branch_id'); ?>
            </div>
	</div>
</div>

	<div class="row">
            <div class ="col-md-3">
		<?php echo $form->labelEx($model,'paper_status'); ?>
            </div>
            <div class ="col-md-3" dir="rtl">
		<?php echo $form->dropDownList($model,'paper_status',array("قيد الاجراء"=>"قيد الاجراء","جاهزة"=>"جاهزة"),array('class'=>'form-control' )); ?>
		<?php echo $form->error($model,'paper_status'); ?>
            </div>
	</div>

	<div class="row">
            <div class ="col-md-3">
		<?php echo $form->labelEx($model,'notes'); ?>
            </div>
            <div class ="col-md-9" dir="rtl">
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50 , 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'notes'); ?>
            </div>
	</div>

	<div class ="col-md-3">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'اضافة' : 'حفظ' , array('class'=>'btn btn-default' , 'style'=>'font-size:18px')); ?>
	</div>
           </div>
           </div>
       </div>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->

<script type="text/javascript">
          $('#Paperstbl_paper_type').on('change',function(){                        
               if($(this).val() === "داخلي")
               {               
                                 
                  $("#tobranch-hidden").removeClass('hidden');
                  $("#supplier-hidden").addClass('hidden');
               }
               else if ($(this).val() === "خارجي")
               {               
                  $("#supplier-hidden").removeClass('hidden');
                  $("#tobranch-hidden").addClass('hidden');
               }          
              });
    $(document).ready(function(){     
     $('#Paperstbl_paper_type').change();
          });
          
</script>

