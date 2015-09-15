<?php echo CHtml::label(Yii::t('data', 'model'),'',array("class"=>"col-sm-3" , "dir"=>"rtl")); ?>

<div class="col-sm-3" >                 

<?php echo CHtml::dropDownList('Carcode[model_id]', $model_id, CHtml::listData($data, "model_id", "model_name"),array("id"=>'Carcode_model_id',"class" => "form-control")); ?>

 </div>



