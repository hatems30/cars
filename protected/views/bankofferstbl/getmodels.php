<?php echo CHtml::label(Yii::t('data', 'model'),'',array("class"=>"col-sm-3" , "dir"=>"rtl")); ?>

<div class="col-sm-3" >                 

<?php echo CHtml::dropDownList('Bankofferstbl[model_id]', $model_id, CHtml::listData($data, "model_id", "model_name"),array("id"=>'Bankofferstbl_model_id',"class" => "form-control","empty" => " ")); ?>

 </div>



