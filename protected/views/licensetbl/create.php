<?php
/* @var $this LicensetblController */
/* @var $model Licensetbl */

$this->breadcrumbs=array(
	'Licensetbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Licensetbl', 'url'=>array('index')),
	array('label'=>'Manage Licensetbl', 'url'=>array('admin')),
);
?>

<h1>Create Licensetbl</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>