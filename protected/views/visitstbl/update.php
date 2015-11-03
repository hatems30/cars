<?php
/* @var $this VisitstblController */
/* @var $model Visitstbl */

$this->breadcrumbs=array(
	'Visitstbls'=>array('index'),
	$model->visit_id=>array('view','id'=>$model->visit_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Visitstbl', 'url'=>array('index')),
	array('label'=>'Create Visitstbl', 'url'=>array('create')),
	array('label'=>'View Visitstbl', 'url'=>array('view', 'id'=>$model->visit_id)),
	array('label'=>'Manage Visitstbl', 'url'=>array('admin')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>