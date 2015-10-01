<?php echo CHtml::label(Yii::t('data', 'مكان التخزين'),'',array("class"=>"col-sm-3")); ?>

           
<div class="col-sm-3" dir="rtl">                 

<?php echo CHtml::dropDownList('Carstbl[store_id]', $store_id, CHtml::listData($data, "store_id", "store_name"),array("id"=>'Carstbl_store_id',"class" => "form-control")); ?>

</div>
