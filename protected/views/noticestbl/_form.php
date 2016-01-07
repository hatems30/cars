<?php
/* @var $this NoticestblController */
/* @var $model Noticestbl */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'noticestbl-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data',),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

       <div class="panel panel-default"> 
                  <div class="panel-heading">
               <div class="row">
               <div class="col-sm-7"><b><font size="5" color="blue">اشعارات</font></b></div>           
               
           </div>
           </div>         
           <div class="panel-body">
           <div class="container-fluid">        
            <div class="row">     
               <div class ="col-sm-3"> 
		<?php echo $form->labelEx($model,'notes_date'); ?>
               </div>
                <div class ="col-sm-3">
		<?php
		                    $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                                                          'name'=>'Noticestbl[notes_date]', 
                                                                          'model' => $model,
                                                                          'id' => 'Noticestbl_notes_date'       ,             
                                                                          'value' => $model->notes_date,
                                                                          'options'=>array( 'showButtonPanel'=>true,'dateFormat'=>'yy-mm-dd',),
                                                                          'htmlOptions'=>array('class'=>'form-control','readonly'=>'true'),
                                                                        ));                                           
                    ?>
		<?php echo $form->error($model,'notes_date'); ?>           
                </div>
	    </div>
	<div class="row">
            <div class ="col-sm-3" >
		<?php echo $form->labelEx($model,'desc'); ?>
            </div>
            <div class ="col-sm-3" >
		<?php echo $form->textField($model,'desc',array('size'=>60,'maxlength'=>255 , 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'desc'); ?>
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

	<div class ="col-sm-3">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'اضافة' : 'حفظ' , array('class'=>'btn btn-default' , 'style'=>'font-size:18px')); ?>
	</div>

<?php $this->endWidget(); ?>
           </div>
           </div>
       </div>
</div>
</div><!-- form -->