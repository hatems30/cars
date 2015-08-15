<?php
/* @var $this ServicetblController */
/* @var $model Servicetbl */

$this->breadcrumbs=array(
	'Servicetbls'=>array('index'),
	$model->service_id=>array('view','id'=>$model->service_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Servicetbl', 'url'=>array('index')),
	array('label'=>'Create Servicetbl', 'url'=>array('create')),
	array('label'=>'View Servicetbl', 'url'=>array('view', 'id'=>$model->service_id)),
	array('label'=>'Manage Servicetbl', 'url'=>array('admin')),
);
?>

<h1>Update Servicetbl <?php echo $model->service_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>