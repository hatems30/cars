<?php
/* @var $this FactorstblController */
/* @var $model Factorstbl */

$this->breadcrumbs=array(
	'Factorstbls'=>array('index'),
	$model->factor_id,
);

$this->menu=array(
	array('label'=>'List Factorstbl', 'url'=>array('index')),
	array('label'=>'Create Factorstbl', 'url'=>array('create')),
	array('label'=>'Update Factorstbl', 'url'=>array('update', 'id'=>$model->factor_id)),
	array('label'=>'Delete Factorstbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->factor_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Factorstbl', 'url'=>array('admin')),
);
?>

<h1>View Factorstbl #<?php echo $model->factor_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'factor_id',
		'cach_factor',
		'premium_factor',
		'dealer_factor',
		'company_factor',
	),
)); ?>
