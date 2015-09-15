<?php
/* @var $this CarstblController */
/* @var $model Carstbl */

$this->breadcrumbs=array(
	'Carstbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Carstbl', 'url'=>array('index')),
	array('label'=>'Manage Carstbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>