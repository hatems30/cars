<?php
/* @var $this OmanController */
/* @var $model Oman */

$this->breadcrumbs=array(
	'Omen'=>array('index'),
	$model->oman_id,
);

$this->menu=array(
	array('label'=>'List Oman', 'url'=>array('index')),
	array('label'=>'Create Oman', 'url'=>array('create')),
	array('label'=>'Update Oman', 'url'=>array('update', 'id'=>$model->oman_id)),
	array('label'=>'Delete Oman', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->oman_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Oman', 'url'=>array('admin')),
);
?>

<h1>View Oman #<?php echo $model->oman_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'oman_id',
		'oman_name',
		'type',
	),
)); ?>
