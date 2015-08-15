<?php
/* @var $this InscompsController */
/* @var $model Inscomps */

$this->breadcrumbs=array(
	'Inscomps'=>array('index'),
	$model->insurance_comp_id,
);

$this->menu=array(
	array('label'=>'List Inscomps', 'url'=>array('index')),
	array('label'=>'Create Inscomps', 'url'=>array('create')),
	array('label'=>'Update Inscomps', 'url'=>array('update', 'id'=>$model->insurance_comp_id)),
	array('label'=>'Delete Inscomps', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->insurance_comp_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Inscomps', 'url'=>array('admin')),
);
?>

<h1>View Inscomps #<?php echo $model->insurance_comp_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'insurance_comp_id',
		'insurance_comp_name',
	),
)); ?>
