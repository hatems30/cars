<?php echo CHtml::label(Yii::t('data', 'الكود'),'',array("class"=>"col-sm-3")); ?>

<div class="col-sm-3" dir="rtl">                 

    <?php echo CHtml::dropDownList('Bankofferstbl[code_id]', $code_id, CHtml::listData($data, "code_id", "code_name"),array("id"=>'Bankofferstbl_code_id',"class" => "form-control")); ?>

 </div>



