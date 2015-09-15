<?php
/* @var $this DealersalestblController */
/* @var $model Dealersalestbl */

$this->breadcrumbs=array(
	'Dealersalestbls'=>array('index'),
	$model->invoice_id=>array('view','id'=>$model->invoice_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dealersalestbl', 'url'=>array('index')),
	array('label'=>'Create Dealersalestbl', 'url'=>array('create')),
	array('label'=>'View Dealersalestbl', 'url'=>array('view', 'id'=>$model->invoice_id)),
	array('label'=>'Manage Dealersalestbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>