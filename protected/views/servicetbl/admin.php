<?php
/* @var $this BrandsController */
/* @var $model Brands */

$this->breadcrumbs=array(
	'Cars'=>array('index'),
	'Manage',
);
?>

<h1 class="ar"><?php echo Yii::t("data","Manage Servicetbls");?></h1>

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
            <div class="the-box">
           <?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'servicetbl-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'service_id',
		'service_date',
		'service_type',
		'customer_id',
		'car_id',
		'notes',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
            </div>
        </div>
    </div>
</div>
