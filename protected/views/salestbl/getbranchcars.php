
<?php echo CHtml::label(Yii::t('data', 'car_id'),'',array("class"=>"col-sm-3 control-label")); ?>

           
 <div class="col-sm-7" >                 

<?php echo CHtml::dropDownList('Salestbl[car_id]', $car_id, CHtml::listData($data, "car_id", "chass_no"),array("id"=>'Salestbl_car_id',"class" => "form-control dd" , 'empty'=>'select car')); ?>

</div>

