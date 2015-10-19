<?php
/* @var $this FactorstblController */
/* @var $model Factorstbl */

$this->breadcrumbs=array(
	'Factorstbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Factorstbl', 'url'=>array('index')),
	array('label'=>'Manage Factorstbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>