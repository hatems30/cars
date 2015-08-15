<?php
/* @var $this CarstblController */
/* @var $model Carstbl */

$this->breadcrumbs=array(
	'Carstbls'=>array('index'),
	$model->car_id,
);

$this->menu=array(
	array('label'=>'List Carstbl', 'url'=>array('index')),
	array('label'=>'Create Carstbl', 'url'=>array('create')),
	array('label'=>'Update Carstbl', 'url'=>array('update', 'id'=>$model->car_id)),
	array('label'=>'Delete Carstbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->car_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Carstbl', 'url'=>array('admin')),
);
?>

<h1>View Carstbl #<?php echo $model->car_id; ?></h1>

<?php 

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'car_id',
		'brand_id',
		'model_id',
		'color_id',
		'chass_no',            
		'motor_no',		
                'off_price',
		'cost_price',
		'sale_price',
		'car_code',
		'car_spec',
		'branch_id',
		'store_id',
		'supplier_id',
            
            
	),
 
 
)); 
?>
 



