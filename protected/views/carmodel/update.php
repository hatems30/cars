<?php
/* @var $this CarmodelController */
/* @var $model Carmodel */

$this->breadcrumbs=array(
	'Carmodels'=>array('index'),
	$model->model_id=>array('view','id'=>$model->model_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Carmodel', 'url'=>array('index')),
	array('label'=>'Create Carmodel', 'url'=>array('create')),
	array('label'=>'View Carmodel', 'url'=>array('view', 'id'=>$model->model_id)),
	array('label'=>'Manage Carmodel', 'url'=>array('admin')),
);
?>

<h1>Update Carmodel <?php echo $model->model_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>