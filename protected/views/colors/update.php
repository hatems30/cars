<?php
/* @var $this ColorsController */
/* @var $model Colors */

$this->breadcrumbs=array(
	'Colors'=>array('index'),
	$model->color_id=>array('view','id'=>$model->color_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Colors', 'url'=>array('index')),
	array('label'=>'Create Colors', 'url'=>array('create')),
	array('label'=>'View Colors', 'url'=>array('view', 'id'=>$model->color_id)),
	array('label'=>'Manage Colors', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>