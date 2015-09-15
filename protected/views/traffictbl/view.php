<?php
/* @var $this TraffictblController */
/* @var $model Traffictbl */

$this->breadcrumbs=array(
	'Traffictbls'=>array('index'),
	$model->traffic_id,
);

$this->menu=array(
	array('label'=>'List Traffictbl', 'url'=>array('index')),
	array('label'=>'Create Traffictbl', 'url'=>array('create')),
	array('label'=>'Update Traffictbl', 'url'=>array('update', 'id'=>$model->traffic_id)),
	array('label'=>'Delete Traffictbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->traffic_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Traffictbl', 'url'=>array('admin')),
);
?>

<h1>View Traffictbl #<?php echo $model->traffic_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'traffic_id',
		'traffic_name',
		'notes',
	),
)); ?>
