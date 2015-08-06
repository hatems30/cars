<?php
/* @var $this ColorsController */
/* @var $model Colors */

$this->breadcrumbs=array(
	'Colors'=>array('index'),
	$model->color_id,
);

$this->menu=array(
	array('label'=>'List Colors', 'url'=>array('index')),
	array('label'=>'Create Colors', 'url'=>array('create')),
	array('label'=>'Update Colors', 'url'=>array('update', 'id'=>$model->color_id)),
	array('label'=>'Delete Colors', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->color_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Colors', 'url'=>array('admin')),
);
?>

<h1>View Colors #<?php echo $model->color_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'color_id',
		'color_name',
	),
)); ?>
