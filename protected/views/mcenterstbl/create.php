<?php
/* @var $this McenterstblController */
/* @var $model Mcenterstbl */

$this->breadcrumbs=array(
	'Mcenterstbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mcenterstbl', 'url'=>array('index')),
	array('label'=>'Manage Mcenterstbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>