<?php
/* @var $this BankofferstblController */
/* @var $model Bankofferstbl */

$this->breadcrumbs=array(
	'Bankofferstbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bankofferstbl', 'url'=>array('index')),
	array('label'=>'Manage Bankofferstbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>