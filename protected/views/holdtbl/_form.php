

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
                <h4 class="panel-title"><?php echo $model->isNewRecord ? Yii::t("data",'Add Holding') : Yii::t("data",'Update holding') ;?></h4>
            </div>
            <div class="panel-body">

<?php //echo $form->textField($model,'brand_id'); ?>

                           
                
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'car_id',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">        
                        <?php echo $form->dropDownList($model,'car_id', CHtml::listData(Carstbl::model()->findAll(), 'car_id', 'chass_no'),array("class"=>"col-sm-4 control-label"));  ?>
                        <?php echo $form->error($model,'brand_id'); ?>                                
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
                   <?php echo $form->labelEx($model, 'sales_man_id',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">        
                        <?php echo $form->dropDownList($model,'sales_man_id', CHtml::listData(Salesmantbl::model()->findAll(), 'sales_man_id', 'sales_man_name'),array("class"=>"col-sm-4 control-label"));  ?>
                        <?php echo $form->error($model,'sales_man_id'); ?>                                
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'customer_name',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       
                        <?php echo $form->textField($model,'customer_name',array("class" => "form-control dd", "placeholder" =>'')); ?>
                        <?php echo $form->error($model,'customer_name'); ?>                                
                    </div>
                </div>    
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'notes',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       
                        <?php echo $form->textArea($model,'notes',array("class" => "form-control dd", "placeholder" =>'')); ?>
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
