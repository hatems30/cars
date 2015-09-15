<?php
/* @var $this DealerstblController */
/* @var $model Dealerstbl */

$this->breadcrumbs=array(
	'Dealerstbls'=>array('index'),
	$model->dealer_id,
);

$this->menu=array(
	array('label'=>'List Dealerstbl', 'url'=>array('index')),
	array('label'=>'Create Dealerstbl', 'url'=>array('create')),
	array('label'=>'Update Dealerstbl', 'url'=>array('update', 'id'=>$model->dealer_id)),
	array('label'=>'Delete Dealerstbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->dealer_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dealerstbl', 'url'=>array('admin')),
);
?>

<h1>View Dealerstbl #<?php echo $model->dealer_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'dealer_id',
		'dealer_name',
		'notes',
	),
)); ?>
