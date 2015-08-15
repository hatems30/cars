<?php
/* @var $this ServicetblController */
/* @var $model Servicetbl */

$this->breadcrumbs=array(
	'Servicetbls'=>array('index'),
	$model->service_id,
);

$this->menu=array(
	array('label'=>'List Servicetbl', 'url'=>array('index')),
	array('label'=>'Create Servicetbl', 'url'=>array('create')),
	array('label'=>'Update Servicetbl', 'url'=>array('update', 'id'=>$model->service_id)),
	array('label'=>'Delete Servicetbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->service_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Servicetbl', 'url'=>array('admin')),
);
?>

<h1>View Servicetbl #<?php echo $model->service_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'service_id',
		'service_date',
		'service_type',
		'customer_id',
		'car_id',
		'notes',
	),
)); ?>
