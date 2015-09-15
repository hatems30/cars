<?php
/* @var $this ColorsController */
/* @var $model Colors */

$this->breadcrumbs=array(
	'Colors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Colors', 'url'=>array('index')),
	array('label'=>'Manage Colors', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>