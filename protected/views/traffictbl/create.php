<?php
/* @var $this TraffictblController */
/* @var $model Traffictbl */

$this->breadcrumbs=array(
	'Traffictbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Traffictbl', 'url'=>array('index')),
	array('label'=>'Manage Traffictbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>