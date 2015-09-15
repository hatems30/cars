<?php echo CHtml::label(Yii::t('data', 'car'),'',array("class"=>"col-sm-3","dir"=>"rtl")); ?>

           
 <div class="col-sm-3" >                 

<?php echo CHtml::dropDownList('Paperstbl[car_id]', $car_id, CHtml::listData($data, "car_id", "chass_no"),array("id"=>'Paperstbl_car_id',"class" => "form-control")); ?>

</div>
