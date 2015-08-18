<?php
/* @var $this ColorsController */
/* @var $model Colors */

$this->breadcrumbs=array(
	'Colors'=>array('index'),
	'Manage',
);
?>

<h1 class="ar"><?php echo Yii::t("data","Manage Customers");?></h1>

<div class="the-box no-border">
    <div class="row">
        <div class="col-sm-1 btn-toolbar" role="toolbar">
            <?php //if (Yii::app()->user->checkAccess('Backoffice.Bank.Create')) : ?>
            <div class="btn-group">
                <?php echo CHtml::link('<i class="fa fa-plus"></i> '.Yii::t('data','Create'),array('create'), array(
                    'class' => 'btn btn-success',
                    'href' => 'sss',
                )); ?>
            </div>
            <?php //endif; ?>
            
            <div class="btn-group">
                
                <?php $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'form-bank-filter',
                    'method' => 'get',
                    'htmlOptions' => array(
                        'role' => 'form',
                    ),
                )); ?>
                
          
                
                <?php $this->endWidget(); ?>
            </div>
        </div>
        
     
    </div>
    
        <div class="row">
        <div class="col-sm-12">
           
            <?php $this->widget('zii.widgets.grid.CGridView', array(
                    'id'=>'colors-grid',
                    'dataProvider'=>$model->search(),
                    'filter'=>$model,
                    'columns'=>array(
                            'customer_id',
                            'customer_name',
                            'mobile',
                            'address',
                            array(
                                    'class'=>'CButtonColumn',
                            ),
                    ),
            )); ?>
            
        </div>
    </div>
</div>    