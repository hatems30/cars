<?php
/* @var $this DealersalestblController */
/* @var $model Dealersalestbl */

$this->breadcrumbs=array(
	'Dealersalestbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Dealersalestbl', 'url'=>array('index')),
	array('label'=>'Manage Dealersalestbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>