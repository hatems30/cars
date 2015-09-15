<?php
/* @var $this InnersaletblController */
/* @var $model Innersaletbl */

$this->breadcrumbs=array(
	'Innersaletbls'=>array('index'),
	$model->trs_id=>array('view','id'=>$model->trs_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Innersaletbl', 'url'=>array('index')),
	array('label'=>'Create Innersaletbl', 'url'=>array('create')),
	array('label'=>'View Innersaletbl', 'url'=>array('view', 'id'=>$model->trs_id)),
	array('label'=>'Manage Innersaletbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>