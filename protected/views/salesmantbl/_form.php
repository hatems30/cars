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
                   <?php echo $form->labelEx($model, 'sales_man_name',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                       	
                        <?php echo $form->textField($model,'sales_man_name',array("class" => "form-control dd", "placeholder" => Yii::t("data","color_name"))); ?>
                        <?php echo $form->error($model,'sales_man_name'); ?>                                 
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'branch_id',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                 
                    <?php echo $form->dropDownList($model,'branch_id', CHtml::listData(branchs::model()->findAll(), 'branch_id', 'branch_name') , array ('empty' => 'Select Branch' ,"class" => "form-control dd", "placeholder" => '')); ?>  
                    <?php echo $form->error($model,'branch_id'); ?>                              
                    </div>
                </div>
                <div class="form-group">
                   <?php echo $form->labelEx($model, 'manager_id',array("class"=>"col-sm-4 control-label")); ?>
                    <div class="col-sm-8">                 
                <?php echo $form->dropDownList($model,'manager_id', CHtml::listData(Salesmantbl::model()->findAll() , 'sales_man_id', 'sales_man_name') , array ('empty' => 'Select Manager' ,"class" => "form-control dd", "placeholder" => '')); ?>
                    <?php echo $form->error($model,'manager_id'); ?>                              
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