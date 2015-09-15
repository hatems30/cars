<?php
/* @var $this EmployeesController */
/* @var $model Employees */

$this->breadcrumbs=array(
	'Employees'=>array('index'),
	$model->employee_id=>array('view','id'=>$model->employee_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Employees', 'url'=>array('index')),
	array('label'=>'Create Employees', 'url'=>array('create')),
	array('label'=>'View Employees', 'url'=>array('view', 'id'=>$model->employee_id)),
	array('label'=>'Manage Employees', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>