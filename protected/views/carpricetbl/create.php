<?php
/* @var $this CarpricetblController */
/* @var $model Carpricetbl */

$this->breadcrumbs=array(
	'Carpricetbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Carpricetbl', 'url'=>array('index')),
	array('label'=>'Manage Carpricetbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>