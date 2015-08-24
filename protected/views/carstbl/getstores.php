<?php echo CHtml::label(Yii::t('data', 'store'),'',array("class"=>"col-sm-4 control-label")); ?>

           
 <div class="col-sm-8" >                 

<?php echo CHtml::dropDownList('Carstbl[store_id]', $model_id, CHtml::listData($data, "store_id", "store_name"),array("id"=>'Carstbl_store_id',"class" => "form-control dd")); ?>

</div>
