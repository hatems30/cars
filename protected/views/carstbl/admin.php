<?php
/* @var $this BrandsController */
/* @var $model Brands */

$this->breadcrumbs=array(
	'Cars'=>array('index'),
	'Manage',
);
?>

<h1 class="ar"><?php echo Yii::t("data","Manage Cars");?></h1>

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
	'id'=>'carstbl-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
               'filter'=> $model,

	'columns'=>array(
		'car_id',
                array('name' => 'brand_id','value' => '$data->Brand->brand_name'),
		array('name' => 'model_id','value' => '$data->carmodel->model_name'),
                array('name' => 'color_id','value' => '$data->colors->color_name'),		

		'chass_no',
	
            'motor_no',
			
		'off_price',
            /*
		'cost_price',
		'sale_price',
		'car_code',
		'car_spec',
		'branch_id',
		'store_id',
		'supplier_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
            </div>
        </div>
    </div>
</div>
