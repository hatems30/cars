<?php echo CHtml::label(Yii::t('data', 'model'),'',array("class"=>"col-sm-4 control-label")); ?>

           
 <div class="col-sm-8" >                 

<?php echo CHtml::dropDownList('Carstbl[model_id]', $model_id, CHtml::listData($data, "model_id", "model_name"),array("id"=>'Carstbl_model_id',"class" => "form-control dd")); ?>

</div>
