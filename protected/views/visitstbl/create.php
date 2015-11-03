<?php
/* @var $this VisitstblController */
/* @var $model Visitstbl */

$this->breadcrumbs=array(
	'Visitstbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Visitstbl', 'url'=>array('index')),
	array('label'=>'Manage Visitstbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>