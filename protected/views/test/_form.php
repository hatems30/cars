<?php
/* @var $this TestController */
/* @var $model Test */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'test-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255 , 'onChange'=>'change_send(this.value)' )); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
<!------------------------------------------------------------------------------------>
<div class="row">
        <?php echo $form->labelEx($model,'image'); ?>
        <?php echo CHtml::activeFileField($model, 'image'); ?>  // by this we can upload image
        <?php echo $form->error($model,'image'); ?>
</div>
<?php //if($model->isNewRecord !='1'){ ?>
<div class="row">
     <?php echo CHtml::image(Yii::app()->request->baseUrl.'/test/'.$model->image,"image",array("width"=>200)); ?>
</div
<?php //} ?>
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>




<?php
$this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'name'=>'datepicker-date-format',    
  //  'value'=>date('d/m/Y'),
    'options'=>array(        
        'showButtonPanel'=>true,
        'dateFormat'=>'yy-mm-dd',//Date format 'mm/dd/yy','yy-mm-dd','d M, y','d MM, y','DD, d MM, yy'
    ),
    'htmlOptions'=>array('style'=>'' , 'readonly'=>'true'),
));
?>
<?php $this->endWidget(); ?>

</div><!-- form -->

<script type ="text/javascript">                   
jQuery(document).ready(
    function()
    {
        jQuery("#Test_name").lostfocus(subtract_fields);
     //   jQuery("#field1").change(subtract_fields);

        function subtract_fields()
        {
          alert(('#Test_name').val());
        }
    }
);
        </script>
           <script type="text/javascript">
        function GetChar (event){
            var keyCode = ('which' in event) ? event.which : event.keyCode;
            
           // alert ("The Unicode key code is: " + keyCode + " mahmoud");
            var jobValue = document.getElementById('test_name').value
            alert(jobValue);
        }
    </script>
</head>
<body>
    <input size="40" value="Write a character into this field!" onkeydown="GetChar (event);"/>
</body