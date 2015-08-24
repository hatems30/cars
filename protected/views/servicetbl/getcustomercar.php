<?php echo CHtml::label(Yii::t('data', 'Chass Number'),'',array("class"=>"col-sm-4 control-label")); ?>

                     
 <div class="col-sm-8" >                 

<?php echo CHtml::dropDownList('Servicetbl[car_id]', $car_id, CHtml::listData($data, "car_id", "chass_no"),array("id"=>'Servicetbl_car_id',"class" => "form-control dd")); ?>

</div>
