<?php
/* @var $this CustomersController */
/* @var $model Customers */
/* @var $form CActiveForm */
?>


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
                <h4 class="panel-title"><?php echo $model->isNewRecord ? Yii::t("data",'Add Customer') : Yii::t("data",'Update Customer') ;?></h4>
            </div>
            <div class="panel-body">


                
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'customer_name',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       	
                        <?php echo $form->textField($model,'customer_name',array("class" => "form-control dd", "placeholder" =>'')); ?>
                        <?php echo $form->error($model,'customer_name'); ?>                                 
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'mobile',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       	
                        <?php echo $form->textField($model,'mobile',array("class" => "form-control dd", "placeholder" => '')); ?>
                        <?php echo $form->error($model,'mobile'); ?>                                 
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'address',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       	
                        <?php echo $form->textField($model,'address',array("class" => "form-control dd", "placeholder" => '')); ?>
                        <?php echo $form->error($model,'address'); ?>                                 
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'license_address',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       	
                        <?php echo $form->textField($model,'license_address',array("class" => "form-control dd", "placeholder" => '')); ?>
                        <?php echo $form->error($model,'license_address'); ?>                                 
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

