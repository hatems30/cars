<?php
/* @var $this PaperstblController */
/* @var $model Paperstbl */

$this->breadcrumbs=array(
	'Paperstbls'=>array('index'),
	$model->paper_id=>array('view','id'=>$model->paper_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Paperstbl', 'url'=>array('index')),
	array('label'=>'Create Paperstbl', 'url'=>array('create')),
	array('label'=>'View Paperstbl', 'url'=>array('view', 'id'=>$model->paper_id)),
	array('label'=>'Manage Paperstbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>