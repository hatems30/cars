<?php echo CHtml::label(Yii::t('data', 'الموظف'),'',array("class"=>"col-sm-3")); ?>

<div class="col-sm-3" dir="rtl">                 

    <?php echo CHtml::dropDownList('Bankofferstbl[employee_id]', $employee_id, CHtml::listData($data, "employee_id", "employee_name"),array("id"=>'Bankofferstbl_employee_id',"class" => "form-control","empty" => " ")); ?>
    
 </div>



