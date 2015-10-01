<?php
/* @var $this UserpertblController */
/* @var $model Userpertbl */

$this->breadcrumbs=array(
	'Userpertbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Userpertbl', 'url'=>array('index')),
	array('label'=>'Manage Userpertbl', 'url'=>array('admin')),
);
?>

<h1>Create Userpertbl</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>