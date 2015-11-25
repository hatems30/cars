<?php
/* @var $this OutstocktblController */
/* @var $model Outstocktbl */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'outstocktbl-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data',),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <div  id="panel" class="panel panel-default">
                  
        <div class="panel-heading">               
            <div class="row">               
                <div class="col-sm-7"><b><font size="5" color="blue">Stock خارجي</font></b></div>                                     
            </div>           
        </div>
    <div class="panel-body">      
        <div class="container-fluid">            
	<div class="row">                
            <div class ="col-sm-3">	
		<?php echo $form->labelEx($model,'section_id'); ?>
            </div>
            <div class ="col-sm-3" dir="rtl">
		<?php
                     if($this->action->Id=='update')                         
                       {
                            echo $form->textField($model,'section_id' ,array('class'=>'form-control' , 'class'=>'hidden'));                       
                            echo $form->textField(Sectionstbl::model()->findByAttributes(array('section_id' => $model->section_id)),'section_name' ,array('class'=>'form-control' , 'readonly'=>'true'));
                       } 
                       elseif ($this->action->Id=='create')
                       {                         
                            echo $form->textField($model,'section_id' ,array('class'=>'form-control' , 'class'=>'hidden' , 'value'=>$_REQUEST['section_id']));                       
                            echo $form->textField(Sectionstbl::model()->findByAttributes(array("section_id"=>$_REQUEST['section_id'])),'section_name' ,array('class'=>'form-control' , 'readonly'=>'true'));
                       }                                          
                ?>
		<?php echo $form->error($model,'section_id'); ?>
            </div>
	</div>

	<div class="row">
            <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'car_name'); ?>
            </div>
            <div class ="col-sm-5" dir =rtl>
		<?php echo $form->textField($model,'car_name',array('size'=>60,'maxlength'=>255 , 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'car_name'); ?>
            </div>
	</div>

	<div class="row">
            <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'car_color'); ?>
            </div>
            <div class ="col-sm-5" dir =rtl>
		<?php echo $form->textField($model,'car_color',array('size'=>60,'maxlength'=>255 , 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'car_color'); ?>
            </div>
	</div>

	<div class="row">
            <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'car_price'); ?>
            </div>
            <div class ="col-sm-5" dir =rtl>
		<?php echo $form->textField($model,'car_price',array('size'=>60,'maxlength'=>255 , 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'car_price'); ?>
            </div>
	</div>

	<div class="row">
            <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'notes'); ?>
            </div>
            <div class ="col-sm-5" dir =rtl>
		<?php echo $form->textField($model,'notes',array('size'=>60,'maxlength'=>255 , 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'notes'); ?>
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
                <?php echo CHtml::image(Yii::app()->request->baseUrl.'/test/out/'.$model->image,"image",array("width"=>200)); ?>                                
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