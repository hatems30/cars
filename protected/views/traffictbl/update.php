<?php
/* @var $this TraffictblController */
/* @var $model Traffictbl */

$this->breadcrumbs=array(
	'Traffictbls'=>array('index'),
	$model->traffic_id=>array('view','id'=>$model->traffic_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Traffictbl', 'url'=>array('index')),
	array('label'=>'Create Traffictbl', 'url'=>array('create')),
	array('label'=>'View Traffictbl', 'url'=>array('view', 'id'=>$model->traffic_id)),
	array('label'=>'Manage Traffictbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>