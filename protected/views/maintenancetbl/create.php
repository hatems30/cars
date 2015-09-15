<?php
/* @var $this MaintenancetblController */
/* @var $model Maintenancetbl */

$this->breadcrumbs=array(
	'Maintenancetbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Maintenancetbl', 'url'=>array('index')),
	array('label'=>'Manage Maintenancetbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>