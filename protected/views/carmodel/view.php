<?php
/* @var $this CarmodelController */
/* @var $model Carmodel */

$this->breadcrumbs=array(
	'Carmodels'=>array('index'),
	$model->model_id,
);

$this->menu=array(
	array('label'=>'List Carmodel', 'url'=>array('index')),
	array('label'=>'Create Carmodel', 'url'=>array('create')),
	array('label'=>'Update Carmodel', 'url'=>array('update', 'id'=>$model->model_id)),
	array('label'=>'Delete Carmodel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->model_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Carmodel', 'url'=>array('admin')),
);
?>

<h1>View Carmodel #<?php echo $model->model_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'model_id',
		'model_name',
		array('name' => 'brand_id','value' => $model->brand->brand_name),
	),
)); ?>
