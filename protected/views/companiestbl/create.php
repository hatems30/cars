<?php
/* @var $this CompaniestblController */
/* @var $model Companiestbl */

$this->breadcrumbs=array(
	'Companiestbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Companiestbl', 'url'=>array('index')),
	array('label'=>'Manage Companiestbl', 'url'=>array('admin')),
);
?>

<h1>Create Companiestbl</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>