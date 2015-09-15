<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
        
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>        
<body>




<div class="container-fluid">
<div class="form" style="margin:10px auto; width:50%">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
<h1>Login</h1>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
            <div class="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'username'); ?>
            </div>
            <div class="col-sm-6">
		<?php echo $form->textField($model,'username' , array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'username'); ?>
            </div>
	</div>
</br>

	<div class="row">
                <div class="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'password'); ?>
                </div>
                <div class="col-sm-6">
		<?php echo $form->passwordField($model,'password' ,array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'password'); ?>
                </div>
		
	</div>
        <div class="row">
	<div class="row rememberMe">
                <div class="col-sm-6">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
                </div>
	</div>
        </div>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Login' , array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>
</div>
</div><!-- form -->

</body>
</html>
