<?php
/* @var $this InscompsController */
/* @var $model Inscomps */

$this->breadcrumbs=array(
	'Inscomps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Inscomps', 'url'=>array('index')),
	array('label'=>'Manage Inscomps', 'url'=>array('admin')),
);
?>

<h1>Create Inscomps</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>