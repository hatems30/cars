<?php echo CHtml::label(Yii::t('data', 'employee'),'',array("class"=>"col-sm-3" , "dir"=>"rtl")); ?>

<div class="col-sm-3" >                 

<?php echo CHtml::dropDownList('Bankofferstbl[employee_id]', $employee_id, CHtml::listData($data, "employee_id", "employee_name"),array("id"=>'Bankofferstbl_employee_id',"class" => "form-control","empty" => " ")); ?>

 </div>
<?php

?>


