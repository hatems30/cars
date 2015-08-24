
<?php echo CHtml::label(Yii::t('data', 'sales_man_id'),'',array("class"=>"col-sm-3 control-label")); ?>

           
 <div class="col-sm-7" >                 

<?php echo CHtml::dropDownList('Salestbl[sales_man_id]', $sales_man_id , CHtml::listData($data, "sales_man_id", "sales_man_name"),array("id"=>'Salestbl_sales_man_id',"class" => "form-control dd" , 'empty'=>'')); ?>

</div>

