


<?php echo CHtml::label(Yii::t('data', 'الموديل'),'',array("class"=>"col-sm-3")); ?>

<div class="col-sm-3" dir="rtl" >                 

<?php echo CHtml::dropDownList('Carstbl[model_id]', $model_id, CHtml::listData($data, "model_id", "model_name"),array("id"=>'Carstbl_model_id',"class" => "form-control","empty" => " ")); ?>

 </div>



