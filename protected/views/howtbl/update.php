<?php
/* @var $this HowtblController */
/* @var $model Howtbl */

$this->breadcrumbs=array(
	'Howtbls'=>array('index'),
	$model->how_id=>array('view','id'=>$model->how_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Howtbl', 'url'=>array('index')),
	array('label'=>'Create Howtbl', 'url'=>array('create')),
	array('label'=>'View Howtbl', 'url'=>array('view', 'id'=>$model->how_id)),
	array('label'=>'Manage Howtbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>