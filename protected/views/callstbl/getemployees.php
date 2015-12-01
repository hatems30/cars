<?php echo CHtml::label(Yii::t('data', 'الموظف المسئول'),'',array("class"=>"col-sm-3")); ?>

<div class="col-sm-3" dir =rtl>                 

<?php echo CHtml::dropDownList('Callstbl[service_employee_id]', $service_employee_id, CHtml::listData($data, "employee_id", "employee_name"),array("id"=>'Callstbl_employee_id',"class" => "form-control")); ?>

 </div>



