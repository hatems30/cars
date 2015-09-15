<?php
/* @var $this CompaniestblController */
/* @var $model Companiestbl */

$this->breadcrumbs=array(
	'Companiestbls'=>array('index'),
	$model->company_id,
);

$this->menu=array(
	array('label'=>'List Companiestbl', 'url'=>array('index')),
	array('label'=>'Create Companiestbl', 'url'=>array('create')),
	array('label'=>'Update Companiestbl', 'url'=>array('update', 'id'=>$model->company_id)),
	array('label'=>'Delete Companiestbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->company_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Companiestbl', 'url'=>array('admin')),
);
?>

<h1>View Companiestbl #<?php echo $model->company_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'company_id',
		'company_name',
		'notes',
	),
)); ?>
