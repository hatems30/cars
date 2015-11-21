<?php
/* @var $this ComplaintstblController */
/* @var $model Complaintstbl */

$this->breadcrumbs=array(
	'Complaintstbls'=>array('index'),
	$model->complaint_id=>array('view','id'=>$model->complaint_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Complaintstbl', 'url'=>array('index')),
	array('label'=>'Create Complaintstbl', 'url'=>array('create')),
	array('label'=>'View Complaintstbl', 'url'=>array('view', 'id'=>$model->complaint_id)),
	array('label'=>'Manage Complaintstbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>