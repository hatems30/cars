<?php
/* @var $this CallstblController */
/* @var $model Callstbl */

$this->breadcrumbs=array(
	'Callstbls'=>array('index'),
	$model->call_id=>array('view','id'=>$model->call_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Callstbl', 'url'=>array('index')),
	array('label'=>'Create Callstbl', 'url'=>array('create')),
	array('label'=>'View Callstbl', 'url'=>array('view', 'id'=>$model->call_id)),
	array('label'=>'Manage Callstbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>