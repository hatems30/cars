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
                <h4 class="panel-title"><?php echo $model->isNewRecord ? Yii::t("data",'Add Car') : Yii::t("data",'Update Car') ;?></h4>
            </div>
            <div class="panel-body">

<?php //echo $form->textField($model,'brand_id'); ?>

                           
                
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'brand_id',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       	
                        <?php echo $form->dropDownList($model,'brand_id', CHtml::listData(Brands::model()->findAll(), 'brand_id', 'brand_name'),array("class"=>"col-sm-4 control-label"));  ?>
                        <?php echo $form->error($model,'brand_id'); ?>                                
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'model_id',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       	
                        <?php echo $form->dropDownList($model,'model_id', CHtml::listData(carmodel::model()->findAll() , 'model_id', 'model_name'),array("class"=>"col-sm-4 control-label"));  ?>
                        <?php echo $form->error($model,'model_id'); ?>                                
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'color_id',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       	
                        <?php echo $form->dropDownList($model,'color_id', CHtml::listData(colors::model()->findAll(), 'color_id', 'color_name'),array("class"=>"col-sm-4 control-label"));  ?>
                        <?php echo $form->error($model,'color_id'); ?>                                
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'chass_no',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       
                        <?php echo $form->textField($model,'chass_no',array("class" => "form-control dd", "placeholder" =>'')); ?>
                        <?php echo $form->error($model,'chass_no'); ?>                                
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'motor_no',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       
                        <?php echo $form->textField($model,'motor_no',array("class" => "form-control dd", "placeholder" =>'')); ?>
                        <?php echo $form->error($model,'motor_no'); ?>                                
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'off_price',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       
                        <?php echo $form->textField($model,'off_price',array("class" => "form-control dd", "placeholder" =>'')); ?>
                        <?php echo $form->error($model,'off_price'); ?>                                
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'cost_price',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       
                        <?php echo $form->textField($model,'cost_price',array("class" => "form-control dd", "placeholder" =>'')); ?>
                        <?php echo $form->error($model,'cost_price'); ?>                                
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'sale_price',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       
                        <?php echo $form->textField($model,'sale_price',array("class" => "form-control dd", "placeholder" =>'')); ?>
                        <?php echo $form->error($model,'sale_price'); ?>                                
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'car_code',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       
                        <?php echo $form->textField($model,'car_code',array("class" => "form-control dd", "placeholder" =>'')); ?>
                        <?php echo $form->error($model,'car_code'); ?>                                
                    </div>
                </div>       
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'car_spec',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       
                        <?php echo $form->textField($model,'car_spec',array("class" => "form-control dd", "placeholder" =>'')); ?>
                        <?php echo $form->error($model,'car_spec'); ?>                                
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'branch_id',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       	
                        <?php echo $form->dropDownList($model,'branch_id', CHtml::listData(Branchs::model()->findAll(), 'branch_id', 'branch_name'),array("class"=>"col-sm-4 control-label"));  ?>
                        <?php echo $form->error($model,'branch_id'); ?>                                
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'store_id',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       	
                        <?php echo $form->dropDownList($model,'store_id', CHtml::listData(Stores::model()->findAll(), 'store_id', 'store_name'),array("class"=>"col-sm-4 control-label"));  ?>
                        <?php echo $form->error($model,'store_id'); ?>                                
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'supplier_id',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       	
                        <?php echo $form->dropDownList($model,'supplier_id', CHtml::listData(Suppliers::model()->findAll(), 'supplier_id', 'supplier_name'),array("class"=>"col-sm-4 control-label"));  ?>
                        <?php echo $form->error($model,'supplier_id'); ?>                                
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'notes',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       	
                       <?php echo $form->textArea($model,'notes',array("class" => "form-control dd", "placeholder" =>'','rows'=>6, 'cols'=>50)); ?>

                        <?php echo $form->error($model,'notes'); ?>                                
                    </div>
                </div>
		<?php echo $form->hiddenField($model,'soled' , array('value'=>'0' , )); ?>

            </div><!-- panel-body -->
            <div class="panel-footer">
                <?php echo CHtml::submitButton($model->isNewRecord ? Yii::t("data",'Create') : Yii::t("data",'Save'),  array('class'=>'btn btn-success')); ?>
                <button type="reset" class="btn btn-default"><?php echo Yii::t("data",'Reset'); ?></button>
            </div><!-- panel-footer -->
        </div><!-- panel-default -->
<?php $this->endWidget(); ?>

    </div><!-- col-md-6 -->


</div>

