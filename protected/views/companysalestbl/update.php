<?php
/* @var $this CompanysalestblController */
/* @var $model Companysalestbl */

$this->breadcrumbs=array(
	'Companysalestbls'=>array('index'),
	$model->invoice_id=>array('view','id'=>$model->invoice_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Companysalestbl', 'url'=>array('index')),
	array('label'=>'Create Companysalestbl', 'url'=>array('create')),
	array('label'=>'View Companysalestbl', 'url'=>array('view', 'id'=>$model->invoice_id)),
	array('label'=>'Manage Companysalestbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>