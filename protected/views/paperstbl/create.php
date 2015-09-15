<?php
/* @var $this PaperstblController */
/* @var $model Paperstbl */

$this->breadcrumbs=array(
	'Paperstbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Paperstbl', 'url'=>array('index')),
	array('label'=>'Manage Paperstbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>