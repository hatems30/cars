<?php
/* @var $this ComplaintstblController */
/* @var $model Complaintstbl */

$this->breadcrumbs=array(
	'Complaintstbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Complaintstbl', 'url'=>array('index')),
	array('label'=>'Manage Complaintstbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>