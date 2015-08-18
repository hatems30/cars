<?php
/* @var $this BrandsController */
/* @var $model Brands */

$this->breadcrumbs=array(
	'Holdtbls'=>array('index'),
	'Manage',
);
?>

<h1 class="ar"><?php echo Yii::t("data","Manage Holdtbls");?></h1>

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
	'id'=>'holdtbl-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'hold_id',
		array('name' => 'car_id','value' => '$data->carstbl->chass_no'),
		array('name' => 'branch_id','value' => '$data->branch->branch_name'),
		array('name' => 'sales_man_id','value' => '$data->salesmantbl->sales_man_name'),
		'customer_name',
		'notes',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
 ?>
            </div>
        </div>
    </div>
</div>
