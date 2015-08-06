<?php
/* @var $this StoresController */
/* @var $model Stores */

$this->breadcrumbs=array(
	'Stores'=>array('index'),
	$model->store_id,
);

$this->menu=array(
	array('label'=>'List Stores', 'url'=>array('index')),
	array('label'=>'Create Stores', 'url'=>array('create')),
	array('label'=>'Update Stores', 'url'=>array('update', 'id'=>$model->store_id)),
	array('label'=>'Delete Stores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->store_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Stores', 'url'=>array('admin')),
);
?>

<h1>View Stores #<?php echo $model->store_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'store_id',
		'store_name',
	),
)); ?>
