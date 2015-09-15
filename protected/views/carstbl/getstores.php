<?php echo CHtml::label(Yii::t('data', 'store'),'',array("class"=>"col-sm-2","dir"=>"rtl")); ?>

           
 <div class="col-sm-4" >                 

<?php echo CHtml::dropDownList('Carstbl[store_id]', $store_id, CHtml::listData($data, "store_id", "store_name"),array("id"=>'Carstbl_store_id',"class" => "form-control")); ?>

</div>
