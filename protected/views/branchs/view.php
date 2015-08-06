<?php
/* @var $this BranchsController */
/* @var $model Branchs */

$this->breadcrumbs=array(
	'Branchs'=>array('index'),
	$model->branch_id,
);

$this->menu=array(
	array('label'=>'List Branchs', 'url'=>array('index')),
	array('label'=>'Create Branchs', 'url'=>array('create')),
	array('label'=>'Update Branchs', 'url'=>array('update', 'id'=>$model->branch_id)),
	array('label'=>'Delete Branchs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->branch_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Branchs', 'url'=>array('admin')),
);
?>

<h1>View Branchs #<?php echo $model->branch_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'branch_id',
		'branch_name',
	),
)); ?>
