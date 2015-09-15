<?php
/* @var $this InnersaletblController */
/* @var $model Innersaletbl */

$this->breadcrumbs=array(
	'Innersaletbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Innersaletbl', 'url'=>array('index')),
	array('label'=>'Manage Innersaletbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>