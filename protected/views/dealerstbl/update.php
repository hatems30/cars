<?php
/* @var $this DealerstblController */
/* @var $model Dealerstbl */

$this->breadcrumbs=array(
	'Dealerstbls'=>array('index'),
	$model->dealer_id=>array('view','id'=>$model->dealer_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dealerstbl', 'url'=>array('index')),
	array('label'=>'Create Dealerstbl', 'url'=>array('create')),
	array('label'=>'View Dealerstbl', 'url'=>array('view', 'id'=>$model->dealer_id)),
	array('label'=>'Manage Dealerstbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>