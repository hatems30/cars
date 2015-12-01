<?php
/* @var $this PaperstblController */
/* @var $model Paperstbl */

$this->breadcrumbs=array(
	'Paperstbls'=>array('index'),
	$model->paper_id,
);

$this->menu=array(
	array('label'=>'List Paperstbl', 'url'=>array('index')),
	array('label'=>'Create Paperstbl', 'url'=>array('create')),
	array('label'=>'Update Paperstbl', 'url'=>array('update', 'id'=>$model->paper_id)),
	array('label'=>'Delete Paperstbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->paper_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Paperstbl', 'url'=>array('admin')),
);
?>

<h1>View Paperstbl #<?php echo $model->paper_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'paper_id',
		'paper_date',
		'branch_id',
		'paper_type',
		'car_id',
		'supplier_id',
		'to_branch_id',
		'paper_status',
		'notes',
	),
)); ?>
