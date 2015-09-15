<?php
/* @var $this CarcodeController */
/* @var $model Carcode */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'carcode-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        
<!DOCTYPE html>
<html>
    <head>
        
    </head>

    <body>	
    <div class="panel panel-default">
                  <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><b><font size="5" color="blue">الاكــواد</font></b></div>           
               
           </div>
           </div>
    <div class="panel-body">      
        <div class="container-fluid">
            
	<div class="row">
            <div class ="col-sm-3" dir="rtl">
		<?php echo $form->labelEx($model,'code_name'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->textField($model,'code_name',array('size'=>60,'maxlength'=>255 , 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'code_name'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'brand_id'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'brand_id', CHtml::listData(Brands::model()->findAll(), 'brand_id', 'brand_name'),array('empty'=>'' , 'class'=>'form-control'));  ?>
		<?php echo $form->error($model,'brand_id'); ?>	
                </div>
                <div id ="ajax_models">
		
                </div>
	</div>

                          </br>
	<div class="row">
                <div class ="col-sm-3" dir =rtl> 	       
         	<?php echo $form->labelEx($model,'code_01'); ?>
                </div>
                <div class ="col-sm-3">
                <?php echo $form->dropDownList($model,'code_01', array("يدوي"=>"يدوي","اتوماتيك"=>"اتوماتيك","ستيبترونيك"=>"ستيبترونيك"),array('empty'=>'',"class" => "form-control")); ?>                         
		<?php echo $form->error($model,'code_01'); ?>
                </div>
	

	        <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_02'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_02', array("لون السيارة"=>"لون السيارة","كروم"=>"كروم","سوداء"=>"سوداء"),array('empty'=>'',"class" => "form-control")); ?>                         
		<?php echo $form->error($model,'code_02'); ?>
                </div>
        </div>

	<div class="row">      
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_03'); ?>
                </div>
             
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_03', array("عادي"=>"عادي","ريموت"=>"ريموت","بصمة"=>"بصمة"),array('empty'=>'',"class" => "form-control")); ?>                         
		<?php echo $form->error($model,'code_03'); ?>
                </div>
	        <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_04'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_04', array("عادي"=>"عادي","ابانوس"=>"ابانوس"),array('empty'=>'',"class" => "form-control dd")); ?>                         
		<?php echo $form->error($model,'code_04'); ?>
                </div>
        </div>

	<div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_05'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_05', array("يدوي"=>"يدوي","كهرباء2"=>"كهرباء2","كهرباء4"=>"كهرباء4"),array('empty'=>'',"class" => "form-control dd")); ?>                         
		<?php echo $form->error($model,'code_05'); ?>
                </div>

	        <div class ="col-sm-3" dir =rtl> 
		<?php echo $form->labelEx($model,'code_06'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_06', array("لايوجد"=>"لايوجد","يوجد"=>"يوجد","بانوراما"=>"بانوراما"),array("class" => "form-control dd")); ?>                         
		<?php echo $form->error($model,'code_06'); ?>
                </div>
	</div>
	<div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_07'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_07', array("عادي"=>"عادي","الكتروني"=>"الكتروني","هيدروليك"=>"هيدروليك"),array('empty'=>'',"class" => "form-control dd")); ?>                         
		<?php echo $form->error($model,'code_07'); ?>
                </div>
	        <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_08'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_08', array("لايوجد"=>"لايوجد","نيكل"=>"نيكل","عادية"=>"عادية"),array("class" => "form-control dd")); ?>                         
		<?php echo $form->error($model,'code_08'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_09'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_09', array("لايوجد"=>"لايوجد","يوجد"=>"يوجد"),array("class" => "form-control")); ?>                         
		<?php echo $form->error($model,'code_09'); ?>
                </div>
	        <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_10'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_10', array("لايوجد"=>"لايوجد","يوجد"=>"يوجد"),array("class" => "form-control")); ?>                         
		<?php echo $form->error($model,'code_10'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_11'); ?>		
                </div>
                <div class ="col-sm-3">
                <?php echo $form->dropDownList($model,'code_11', array("لايوجد"=>"لايوجد","يوجد"=>"يوجد"),array("class" => "form-control")); ?>                         
		<?php echo $form->error($model,'code_11'); ?>
                </div>
	        <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_12'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_12', array("لايوجد"=>"لايوجد","يوجد"=>"يوجد"),array("class" => "form-control")); ?>                         
		<?php echo $form->error($model,'code_12'); ?>
                </div>    
	</div>

	<div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_13'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_13', array("لايوجد"=>"لايوجد","يوجد"=>"يوجد"),array("class" => "form-control")); ?>   
		<?php echo $form->error($model,'code_13'); ?>
                </div>
	        <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_14'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_14', array("لايوجد"=>"لايوجد","يوجد"=>"يوجد"),array("class" => "form-control")); ?>   
		<?php echo $form->error($model,'code_14'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_15'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_15', array("لايوجد"=>"لايوجد","يوجد"=>"يوجد"),array("class" => "form-control")); ?>   
		<?php echo $form->error($model,'code_15'); ?>
                </div>
	        <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_16'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_16', array("لايوجد"=>"لايوجد","يوجد"=>"يوجد"),array("class" => "form-control")); ?>   
		<?php echo $form->error($model,'code_16'); ?>
                </div>
	</div>
                         
	<div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_17'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_17', array("لايوجد"=>"لايوجد","يوجد"=>"يوجد"),array("class" => "form-control")); ?>   
		<?php echo $form->error($model,'code_17'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_18'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->dropDownList($model,'code_18', array("لايوجد"=>"لايوجد","يوجد"=>"يوجد"),array("class" => "form-control")); ?>   
		<?php echo $form->error($model,'code_18'); ?>
                </div>
	</div>
                         
	<div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_19'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_19', array("لايوجد"=>"لايوجد","يوجد"=>"يوجد"),array("class" => "form-control")); ?>   
		<?php echo $form->error($model,'code_19'); ?>
                </div>
	        <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_20'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_20', array("لايوجد"=>"لايوجد","يوجد"=>"يوجد"),array("class" => "form-control")); ?>   
		<?php echo $form->error($model,'code_20'); ?>
                </div>
	</div>
                  
	<div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_21'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_21', array("لايوجد"=>"لايوجد","يوجد"=>"يوجد"),array("class" => "form-control")); ?>   
		<?php echo $form->error($model,'code_21'); ?>
                </div>
	        <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_22'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_22', array("لايوجد"=>"لايوجد","يوجد"=>"يوجد"),array("class" => "form-control")); ?>   
		<?php echo $form->error($model,'code_22'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_23'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_23', array("لايوجد"=>"لايوجد","يوجد"=>"يوجد"),array("class" => "form-control")); ?>   
		<?php echo $form->error($model,'code_23'); ?>
                </div>
	        <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_24'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_24', array("لايوجد"=>"لايوجد","يوجد"=>"يوجد"),array("class" => "form-control")); ?> 
		<?php echo $form->error($model,'code_24'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_25'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_25', array("لايوجد"=>"لايوجد","يوجد"=>"يوجد"),array("class" => "form-control")); ?> 
		<?php echo $form->error($model,'code_25'); ?>	
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_26'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_26', array("لايوجد"=>"لايوجد","يوجد"=>"يوجد"),array("class" => "form-control")); ?> 
		<?php echo $form->error($model,'code_26'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_27'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_27', array("لايوجد"=>"لايوجد","يوجد"=>"يوجد"),array("class" => "form-control")); ?> 
		<?php echo $form->error($model,'code_27'); ?>
                </div>
	        <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_28'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_28', array("لايوجد"=>"لايوجد","يوجد"=>"يوجد"),array("class" => "form-control")); ?> 
		<?php echo $form->error($model,'code_28'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_29'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_29', array("لايوجد"=>"لايوجد","يوجد"=>"يوجد"),array("class" => "form-control")); ?> 
		<?php echo $form->error($model,'code_29'); ?>
                </div>
	        <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_30'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_30', array("لايوجد"=>"لايوجد","يوجد"=>"يوجد"),array("class" => "form-control")); ?> 
		<?php echo $form->error($model,'code_30'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_31'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_31', array("لايوجد"=>"لايوجد","يوجد"=>"يوجد"),array("class" => "form-control")); ?> 
		<?php echo $form->error($model,'code_31'); ?>
                </div>
	        <div class ="col-sm-3" dir =rtl>  
		<?php echo $form->labelEx($model,'code_32'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_32', array("لايوجد"=>"لايوجد","يوجد"=>"يوجد"),array("class" => "form-control")); ?> 
		<?php echo $form->error($model,'code_32'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_33'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_33', array("لايوجد"=>"لايوجد","يوجد"=>"يوجد"),array("class" => "form-control")); ?> 
		<?php echo $form->error($model,'code_33'); ?>	
                </div>
               <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_34'); ?>
               </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_34', array("لايوجد"=>"لايوجد","يوجد"=>"يوجد"),array("class" => "form-control")); ?> 
		<?php echo $form->error($model,'code_34'); ?>
                </div>
        </div>

        <div class="row">    
	        <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_35'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_35', array("لايوجد"=>"لايوجد","يوجد"=>"يوجد"),array("class" => "form-control")); ?> 
		<?php echo $form->error($model,'code_35'); ?>
                </div>
	        <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_36'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'code_36', array("لايوجد"=>"لايوجد","يوجد"=>"يوجد"),array("class" => "form-control")); ?> 
		<?php echo $form->error($model,'code_36'); ?>
                </div>
	</div>

	<div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_37'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->textField($model,'code_37',array('size'=>10,'maxlength'=>10 ,'class'=>'form-control' )); ?>
		<?php echo $form->error($model,'code_37'); ?>
                </div>
	        <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_38'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->textField($model,'code_38',array('size'=>10,'maxlength'=>10 ,'class'=>'form-control' )); ?>
		<?php echo $form->error($model,'code_38'); ?>
                </div>
	</div>

	<div class="row">
               <div class ="col-sm-3" dir =rtl> 
		<?php echo $form->labelEx($model,'code_39'); ?>
               </div>
               <div class ="col-sm-3">
		<?php echo $form->textField($model,'code_39',array('size'=>10,'maxlength'=>10 ,'class'=>'form-control' )); ?>
		<?php echo $form->error($model,'code_39'); ?>
               </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'code_40'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->textField($model,'code_40',array('size'=>10,'maxlength'=>10 ,'class'=>'form-control' )); ?>
		<?php echo $form->error($model,'code_40'); ?>
                </div>
	</div>
	<div class="row buttons">
                <div class ="col-sm-3">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-default')); ?>
                </div>
	</div>

<?php $this->endWidget(); ?>
    </div>
    </div>
    </div>
    </body>
</html>
<script type ="text/javascript">             
   
   
    $(function(){
        
        
          $('#Carcode_brand_id').on('change',function(){  
              
              if($(this).val() !==''){
                  $.ajax({
                  url: "<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Carcode/Getmodels",
                  data:{"id":$(this).val(),"model_id":"<?php echo $model->model_id ?>"},
                  method:'POST',
                   success:function(data){$('#ajax_models').html(data);}                             
              });
              }
 
          })
          
           
      }) 
    $(document).ready(function(){
     $('#Carcode_brand_id').change();
     
          });
          
</script>
