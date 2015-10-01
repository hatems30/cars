<?php
/* @var $this UserpertblController */
/* @var $model Userpertbl */

$this->breadcrumbs=array(
	'Userpertbls'=>array('index'),
	$model->per_id,
);

$this->menu=array(
	array('label'=>'List Userpertbl', 'url'=>array('index')),
	array('label'=>'Create Userpertbl', 'url'=>array('create')),
	array('label'=>'Update Userpertbl', 'url'=>array('update', 'id'=>$model->per_id)),
	array('label'=>'Delete Userpertbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->per_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Userpertbl', 'url'=>array('admin')),
);
?>

<h1>View Userpertbl #<?php echo $model->per_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'per_id',
		'user_id',
		'controller_id',
		'per_type',
	),
)); ?>
