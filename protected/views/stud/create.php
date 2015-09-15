<?php
/* @var $this StudController */
/* @var $model Stud */

$this->breadcrumbs=array(
	'Studs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Stud', 'url'=>array('index')),
	array('label'=>'Manage Stud', 'url'=>array('admin')),
);
?>

<h1>Create Stud</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>