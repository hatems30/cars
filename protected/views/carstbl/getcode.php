<?php echo CHtml::label(Yii::t('data', 'code'),'',array("class"=>"col-sm-2" , "dir"=>"rtl")); ?>

<div class="col-sm-4" >                 

<?php echo CHtml::dropDownList('Carstbl[code_id]', $code_id, CHtml::listData($data, "code_id", "code_name"),array("id"=>'Carstbl_code_id',"class" => "form-control")); ?>

 </div>



