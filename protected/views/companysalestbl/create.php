<?php
/* @var $this CompanysalestblController */
/* @var $model Companysalestbl */

$this->breadcrumbs=array(
	'Companysalestbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Companysalestbl', 'url'=>array('index')),
	array('label'=>'Manage Companysalestbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>