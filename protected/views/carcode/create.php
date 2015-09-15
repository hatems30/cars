<?php
/* @var $this CarcodeController */
/* @var $model Carcode */

$this->breadcrumbs=array(
	'Carcodes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Carcode', 'url'=>array('index')),
	array('label'=>'Manage Carcode', 'url'=>array('admin')),
);
?>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>