<?php
/* @var $this HowtblController */
/* @var $model Howtbl */

$this->breadcrumbs=array(
	'Howtbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Howtbl', 'url'=>array('index')),
	array('label'=>'Manage Howtbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>