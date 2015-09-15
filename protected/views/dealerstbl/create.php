<?php
/* @var $this DealerstblController */
/* @var $model Dealerstbl */

$this->breadcrumbs=array(
	'Dealerstbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Dealerstbl', 'url'=>array('index')),
	array('label'=>'Manage Dealerstbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>