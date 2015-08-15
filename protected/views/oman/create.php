<?php
/* @var $this OmanController */
/* @var $model Oman */

$this->breadcrumbs=array(
	'Omen'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Oman', 'url'=>array('index')),
	array('label'=>'Manage Oman', 'url'=>array('admin')),
);
?>

<h1>Create Oman</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>