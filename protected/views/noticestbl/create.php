<?php
/* @var $this NoticestblController */
/* @var $model Noticestbl */

$this->breadcrumbs=array(
	'Noticestbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Noticestbl', 'url'=>array('index')),
	array('label'=>'Manage Noticestbl', 'url'=>array('admin')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>