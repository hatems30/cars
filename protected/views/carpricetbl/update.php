<?php
/* @var $this CarpricetblController */
/* @var $model Carpricetbl */

$this->breadcrumbs=array(
	'Carpricetbls'=>array('index'),
	$model->price_id=>array('view','id'=>$model->price_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Carpricetbl', 'url'=>array('index')),
	array('label'=>'Create Carpricetbl', 'url'=>array('create')),
	array('label'=>'View Carpricetbl', 'url'=>array('view', 'id'=>$model->price_id)),
	array('label'=>'Manage Carpricetbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>