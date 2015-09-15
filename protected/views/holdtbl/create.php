<?php
/* @var $this HoldtblController */
/* @var $model Holdtbl */

$this->breadcrumbs=array(
	'Holdtbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Holdtbl', 'url'=>array('index')),
	array('label'=>'Manage Holdtbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>