<?php
/* @var $this MaintenancetblController */
/* @var $model Maintenancetbl */

$this->breadcrumbs=array(
	'Maintenancetbls'=>array('index'),
	$model->m_hold_id=>array('view','id'=>$model->m_hold_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Maintenancetbl', 'url'=>array('index')),
	array('label'=>'Create Maintenancetbl', 'url'=>array('create')),
	array('label'=>'View Maintenancetbl', 'url'=>array('view', 'id'=>$model->m_hold_id)),
	array('label'=>'Manage Maintenancetbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>