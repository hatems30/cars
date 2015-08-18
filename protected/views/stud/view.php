<?php
/* @var $this StudController */
/* @var $model Stud */

$this->breadcrumbs=array(
	'Studs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Stud', 'url'=>array('index')),
	array('label'=>'Create Stud', 'url'=>array('create')),
	array('label'=>'Update Stud', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Stud', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Stud', 'url'=>array('admin')),
);
?>

<h1>View Stud #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'address',
	),
)); ?>
