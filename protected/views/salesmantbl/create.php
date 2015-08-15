<?php
/* @var $this SalesmantblController */
/* @var $model Salesmantbl */

$this->breadcrumbs=array(
	'Salesmantbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Salesmantbl', 'url'=>array('index')),
	array('label'=>'Manage Salesmantbl', 'url'=>array('admin')),
);
?>

<h1>Create Salesmantbl</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>