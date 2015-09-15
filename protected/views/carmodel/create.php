<?php
/* @var $this CarmodelController */
/* @var $model Carmodel */

$this->breadcrumbs=array(
	'Carmodels'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Carmodel', 'url'=>array('index')),
	array('label'=>'Manage Carmodel', 'url'=>array('admin')),
);
?>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>