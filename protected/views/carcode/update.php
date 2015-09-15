<?php
/* @var $this CarcodeController */
/* @var $model Carcode */

$this->breadcrumbs=array(
	'Carcodes'=>array('index'),
	$model->code_id=>array('view','id'=>$model->code_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Carcode', 'url'=>array('index')),
	array('label'=>'Create Carcode', 'url'=>array('create')),
	array('label'=>'View Carcode', 'url'=>array('view', 'id'=>$model->code_id)),
	array('label'=>'Manage Carcode', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>