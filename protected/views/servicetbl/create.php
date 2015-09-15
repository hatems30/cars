<?php
/* @var $this ServicetblController */
/* @var $model Servicetbl */

$this->breadcrumbs=array(
	'Servicetbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Servicetbl', 'url'=>array('index')),
	array('label'=>'Manage Servicetbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>