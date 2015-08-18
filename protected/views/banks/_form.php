<div class="row">
    <div class="col-md-6">
   
        <?php
        $form = $this->beginWidget('CActiveForm', array(
           // 'enableClientValidation' => true,
            'id'=>'banks-form',
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
                <h4 class="panel-title"><?php echo $model->isNewRecord ? Yii::t("data",'Add Bank') : Yii::t("data",'Update Bank') ;?></h4>
            </div>
            <div class="panel-body">


                
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'bank_name',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       	
                        <?php echo $form->textField($model,'bank_name',array("class" => "form-control dd", "placeholder" => Yii::t("data","bank_name"))); ?>
                        <?php echo $form->error($model,'bank_name'); ?>                                 
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