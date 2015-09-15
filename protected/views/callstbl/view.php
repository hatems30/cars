<?php
/* @var $this CallstblController */
/* @var $model Callstbl */

$this->breadcrumbs=array(
	'Callstbls'=>array('index'),
	$model->call_id,
);

$this->menu=array(
	array('label'=>'List Callstbl', 'url'=>array('index')),
	array('label'=>'Create Callstbl', 'url'=>array('create')),
	array('label'=>'Update Callstbl', 'url'=>array('update', 'id'=>$model->call_id)),
	array('label'=>'Delete Callstbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->call_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Callstbl', 'url'=>array('admin')),
);
?>

<h1>View Callstbl #<?php echo $model->call_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'call_id',
		'call_date',
		'call_time',
		'car_data',
		'call_employee_id',
		'customer',
		'mobile',
		'service_employee_id',
		'area',
		'how',
	),
)); ?>
