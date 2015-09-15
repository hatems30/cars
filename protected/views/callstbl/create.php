<?php
/* @var $this CallstblController */
/* @var $model Callstbl */

$this->breadcrumbs=array(
	'Callstbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Callstbl', 'url'=>array('index')),
	array('label'=>'Manage Callstbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>