<?php
/* @var $this McenterstblController */
/* @var $model Mcenterstbl */

$this->breadcrumbs=array(
	'Mcenterstbls'=>array('index'),
	$model->m_center_id=>array('view','id'=>$model->m_center_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mcenterstbl', 'url'=>array('index')),
	array('label'=>'Create Mcenterstbl', 'url'=>array('create')),
	array('label'=>'View Mcenterstbl', 'url'=>array('view', 'id'=>$model->m_center_id)),
	array('label'=>'Manage Mcenterstbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>