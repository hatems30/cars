<?php
/* @var $this FactorstblController */
/* @var $model Factorstbl */

$this->breadcrumbs=array(
	'Factorstbls'=>array('index'),
	$model->factor_id=>array('view','id'=>$model->factor_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Factorstbl', 'url'=>array('index')),
	array('label'=>'Create Factorstbl', 'url'=>array('create')),
	array('label'=>'View Factorstbl', 'url'=>array('view', 'id'=>$model->factor_id)),
	array('label'=>'Manage Factorstbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>