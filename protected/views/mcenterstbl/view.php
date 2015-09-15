<?php
/* @var $this McenterstblController */
/* @var $model Mcenterstbl */

$this->breadcrumbs=array(
	'Mcenterstbls'=>array('index'),
	$model->m_center_id,
);

$this->menu=array(
	array('label'=>'List Mcenterstbl', 'url'=>array('index')),
	array('label'=>'Create Mcenterstbl', 'url'=>array('create')),
	array('label'=>'Update Mcenterstbl', 'url'=>array('update', 'id'=>$model->m_center_id)),
	array('label'=>'Delete Mcenterstbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->m_center_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mcenterstbl', 'url'=>array('admin')),
);
?>

<h1>View Mcenterstbl #<?php echo $model->m_center_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'm_center_id',
		'm_center_name',
		'notes',
	),
)); ?>
