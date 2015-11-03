<?php
/* @var $this HowtblController */
/* @var $model Howtbl */

$this->breadcrumbs=array(
	'Howtbls'=>array('index'),
	$model->how_id,
);

$this->menu=array(
	array('label'=>'List Howtbl', 'url'=>array('index')),
	array('label'=>'Create Howtbl', 'url'=>array('create')),
	array('label'=>'Update Howtbl', 'url'=>array('update', 'id'=>$model->how_id)),
	array('label'=>'Delete Howtbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->how_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Howtbl', 'url'=>array('admin')),
);
?>

<h1>View Howtbl #<?php echo $model->how_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'how_id',
		'how_name',
	),
)); ?>
