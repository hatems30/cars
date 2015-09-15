<?php
/* @var $this StoresController */
/* @var $model Stores */

$this->breadcrumbs=array(
	'Stores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Stores', 'url'=>array('index')),
	array('label'=>'Manage Stores', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>