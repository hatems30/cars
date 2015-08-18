<div class="row">
    <div class="col-md-6">
   
        <?php
        $form = $this->beginWidget('CActiveForm', array(
           // 'enableClientValidation' => true,
            'id'=>'colors-form',
            'clientOptions' => array(
             //   'validateOnSubmit' => true,
            ),
            'htmlOptions' => array("class" => "form-horizontal")
        ));
        ?>


        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-btns">
                    <a href="" class="panel-close">×</a>
                    <a href="" class="minimize">−</a>
                </div>
                <h4 class="panel-title"><?php echo $model->isNewRecord ? Yii::t("data",'Add Brand') : Yii::t("data",'Update Color') ;?></h4>
            </div>
            <div class="panel-body">
                
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'invoice_date',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       	
                        <?php echo $form->textField($model,'invoice_date',array("class" => "form-control dd", "placeholder" => Yii::t("data","color_name"))); ?>
                        <?php echo $form->error($model,'invoice_date'); ?>                                 
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'branch_id',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                  
                        <?php echo $form->dropDownList($model,'branch_id', CHtml::listData(Branchs::model()->findAll(), 'branch_id', 'branch_name'),array("class" => "form-control dd")); ?>                         
                        <?php echo $form->error($model,'branch_id'); ?>                                 
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'sales_man_id',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                  
                        <?php echo $form->dropDownList($model,'sales_man_id', CHtml::listData(Salesmantbl::model()->findAll(), 'sales_man_id', 'sales_man_name'),array("class" => "form-control dd",'empty'=>'Select Sales Man')); ?>                         
                        <?php echo $form->error($model,'sales_man_id'); ?>                                 
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'car_id',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                  
                        <?php echo $form->dropDownList($model,'car_id', CHtml::listData(Carstbl::model()->findAll() , 'car_id', 'chass_no'),array("class" => "form-control dd",'empty'=>'Select Car')); ?>                         
                        <?php echo $form->error($model,'car_id'); ?>                                 
                    </div>
                    <span id ="ajax">
          
                    </span>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'customer_id',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                  
                        <?php echo $form->dropDownList($model,'customer_id', CHtml::listData(customers::model()->findAll(), 'customer_id', 'customer_name'),array("class" => "form-control dd",'empty'=>'')); ?>                         
                        <?php echo $form->error($model,'customer_id'); ?>                                 
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'finance_type',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                  
                        <?php echo $form->dropDownList($model,'finance_type', array("نقدي"=>"نقدي","قسط مباشر"=>"قسط مباشر" ,"بنك"=>"بنك","تجاري"=>"تجاري"  ),array('empty'=>'Select Value'),array("class" => "form-control dd",'empty'=>'')); ?>                         
                        <?php echo $form->error($model,'finance_type'); ?>                                 
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'cach_price',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       	
                        <?php echo $form->textField($model,'cach_price',array("class" => "form-control dd", "placeholder" => '')); ?>
                        <?php echo $form->error($model,'cach_price'); ?>                                 
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'downpayment',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       	
                        <?php echo $form->textField($model,'downpayment',array("class" => "form-control dd", "placeholder" => '')); ?>
                        <?php echo $form->error($model,'downpayment'); ?>                                 
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'monthly_premium',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       	
                        <?php echo $form->textField($model,'monthly_premium',array("class" => "form-control dd", "placeholder" => '')); ?>
                        <?php echo $form->error($model,'monthly_premium'); ?>                                 
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'months_count',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       	
                        <?php echo $form->textField($model,'months_count',array("class" => "form-control dd", "placeholder" => '')); ?>
                        <?php echo $form->error($model,'months_count'); ?>                                 
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'interest_rate',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       	
                        <?php echo $form->textField($model,'interest_rate',array("class" => "form-control dd", "placeholder" => '')); ?>
                        <?php echo $form->error($model,'interest_rate'); ?>                                 
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'bank_id',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">     
                        <?php echo $form->dropDownList($model,'bank_id', CHtml::listData(Banks::model()->findAll(), 'bank_id', 'bank_name'),array('empty'=>'Select Value'),array("class" => "form-control dd",'empty'=>'')); ?>                         
                        <?php echo $form->error($model,'bank_id'); ?>                                 
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'transfer_amount',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">     
                        <?php echo $form->textField($model,'transfer_amount',array("class" => "form-control dd", "placeholder" => '')); ?>
                        <?php echo $form->error($model,'transfer_amount'); ?>                                 
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'bank_down_amount',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">     
                        <?php echo $form->textField($model,'bank_down_amount',array("class" => "form-control dd", "placeholder" => '')); ?>
                        <?php echo $form->error($model,'bank_down_amount'); ?>                                 
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'expenses',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">     
                        <?php echo $form->textField($model,'expenses',array("class" => "form-control dd", "placeholder" => '')); ?>
                        <?php echo $form->error($model,'expenses'); ?>                                 
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'insurance_comp_id',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">     
                        <?php echo $form->dropDownList($model,'insurance_comp_id', CHtml::listData(Inscomps::model()->findAll(), 'insurance_comp_id', 'insurance_comp_name'),array('empty'=>'Select Value'),array("class" => "form-control dd",'empty'=>'')); ?>                         
                        <?php echo $form->error($model,'insurance_comp_id'); ?>                                 
                    </div>
                </div>              
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'insurance_type',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">     
                        <?php echo $form->dropDownList($model,'insurance_type', array("تحمل"=>"تحمل","بدون تحمل"=>"بدون تحمل"),array('empty'=>'Select Value'),array("class" => "form-control dd",'empty'=>'')); ?>                         
                        <?php echo $form->error($model,'insurance_type'); ?>                                 
                    </div>
                </div>        
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'insurance_amount',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">     
                        <?php echo $form->textField($model,'insurance_amount',array("class" => "form-control dd", "placeholder" => '')); ?>
                        <?php echo $form->error($model,'insurance_amount'); ?>                                 
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'insurance_rate',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">     
                        <?php echo $form->textField($model,'insurance_rate',array("class" => "form-control dd", "placeholder" => '')); ?>
                        <?php echo $form->error($model,'insurance_rate'); ?>                                 
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'notes',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">     
                        <?php echo $form->textArea($model,'notes',array("class" => "form-control dd", "placeholder" => '')); ?>
                        <?php echo $form->error($model,'notes'); ?>                                 
                    </div>
                </div>
            </div><!-- panel-body -->
            <div class="panel-footer">
                <?php echo CHtml::submitButton($model->isNewRecord ? Yii::t("data",'Create') : Yii::t("data",'Save'),  array('class'=>'btn btn-success')); ?>
                <button type="reset" class="btn btn-default"><?php echo Yii::t("data",'Reset'); ?></button>
            </div><!-- panel-footer -->
        </div><!-- panel-default -->
<?php $this->endWidget(); ?>

    </div><!-- col-md-6 -->


</div>


<script type ="text/javascript">

      

   
    
    $(function(){
          $('#Salestbl_car_id').on('change',function(){
             

             
              $.ajax({
                  url: "<?php echo Yii::app()->request->baseUrl; ?>/"+"index.php?r=salestbl/GetCarData",
                  data:{"id":$(this).val()},
                  method:'POST',
                  success:function(data){$('#ajax').html(data);}                 
              });
          })
      })
      
          $(function(){
          $('#buttonid').on('click',function(){
             
             //alert ('sjhgdksjh');
              
           $.ajax({
                  url:"http://localhost/cars/index.php?r=salestbl/updateajax",
                  data:{"id":$('#Salestbl_car_id').val()},
                  method:'POST',
                 // success:function(data){
                      //$('#ajax').html(data);
                 // }
                  
              });
          })
      })
      
      
        </script>