<?php
/* @var $this BanksController */
/* @var $model Banks */

$this->breadcrumbs=array(
	'Banks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Banks', 'url'=>array('index')),
	array('label'=>'Manage Banks', 'url'=>array('admin')),
);
?>

<h1>Create Banks</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>