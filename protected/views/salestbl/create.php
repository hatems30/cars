<?php
/* @var $this SalestblController */
/* @var $model Salestbl */

$this->breadcrumbs=array(
	'Salestbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Salestbl', 'url'=>array('index')),
	array('label'=>'Manage Salestbl', 'url'=>array('admin')),
);
?>

<h1>Create Salestbl</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>