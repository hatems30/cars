<?php
/* @var $this BranchsController */
/* @var $model Branchs */

$this->breadcrumbs=array(
	'Branchs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Branchs', 'url'=>array('index')),
	array('label'=>'Manage Branchs', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>