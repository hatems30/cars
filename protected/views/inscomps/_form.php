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
                <h4 class="panel-title"><?php echo $model->isNewRecord ? Yii::t("data",'Add Insurance company') : Yii::t("data",'Update Insurance company') ;?></h4>
            </div>
            <div class="panel-body">


                
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'insurance_comp_name',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       	
                        <?php echo $form->textField($model,'insurance_comp_name',array("class" => "form-control dd", "placeholder" => '')); ?>
                        <?php echo $form->error($model,'insurance_comp_name'); ?>                                 
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
    
