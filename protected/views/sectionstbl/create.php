<?php
/* @var $this SectionstblController */
/* @var $model Sectionstbl */

$this->breadcrumbs=array(
	'Sectionstbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sectionstbl', 'url'=>array('index')),
	array('label'=>'Manage Sectionstbl', 'url'=>array('admin')),
);
?>

<h1>Create Sectionstbl</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>