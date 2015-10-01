<?php
/* @var $this CarpricetblController */
/* @var $model Carpricetbl */

$this->breadcrumbs=array(
	'Carpricetbls'=>array('index'),
	$model->price_id,
);

$this->menu=array(
	array('label'=>'List Carpricetbl', 'url'=>array('index')),
	array('label'=>'Create Carpricetbl', 'url'=>array('create')),
	array('label'=>'Update Carpricetbl', 'url'=>array('update', 'id'=>$model->price_id)),
	array('label'=>'Delete Carpricetbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->price_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Carpricetbl', 'url'=>array('admin')),
);
?>

<h1>View Carpricetbl #<?php echo $model->price_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'price_id',
		'car_id',
		'cost_price',
		'off_price',
		'sale_price_from',
		'sale_price_to',
	),
)); ?>
