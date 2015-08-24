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
                   <?php echo $form->labelEx($model, 'service_date',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       	
                        <?php echo $form->DateField($model,'service_date',array("class" => "form-control dd", "placeholder" => Yii::t("data","color_name"))); ?>
                        <?php echo $form->error($model,'service_date'); ?>                                 
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'service_type',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">      
                        <?php echo $form->dropDownList($model,'service_type',array("صيانة"=>"صيانة","شكاوي"=>"شكاوي"),array('empty'=>'Select Customer Service',"class" => "form-control dd")); ?>
                        <?php echo $form->error($model,'service_type'); ?>                                 
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'customer_id',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                 
                    <?php echo $form->dropDownList($model,'customer_id', CHtml::listData(customers::model()->findAll(), 'customer_id', 'customer_name') , array ('empty' => 'Select Customer' ,"class" => "form-control dd", "placeholder" => '')); ?>  
                    <?php echo $form->error($model,'customer_id'); ?>                              
                    </div>
                </div>
                 <div class="form-group" id="ajax_chass_no">
                    
                </div>
                   
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'notes',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       	
                        <?php echo $form->textField($model,'notes',array("class" => "form-control dd", "placeholder" => Yii::t("data","color_name"))); ?>
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
          $('#Servicetbl_customer_id').on('change',function(){  
              
              if($(this).val() !=''){
                  $.ajax({
                  url: "<?php echo Yii::app()->request->baseUrl; ?>/Servicetbl/Getcustomercar",
                  data:{"id":$(this).val(),"car_id":"<?php echo $model->car_id ?>"},
                  method:'POST',
                   success:function(data){$('#ajax_chass_no').html(data);}                                
              });
              }
 
          })
          
           
      }) 
     

     $(document).ready(function(){
     
;     $('#Servicetbl_customer_id').change();
    })
        </script>
