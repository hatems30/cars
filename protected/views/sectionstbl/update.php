<?php
/* @var $this SectionstblController */
/* @var $model Sectionstbl */

$this->breadcrumbs=array(
	'Sectionstbls'=>array('index'),
	$model->section_id=>array('view','id'=>$model->section_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sectionstbl', 'url'=>array('index')),
	array('label'=>'Create Sectionstbl', 'url'=>array('create')),
	array('label'=>'View Sectionstbl', 'url'=>array('view', 'id'=>$model->section_id)),
	array('label'=>'Manage Sectionstbl', 'url'=>array('admin')),
);
?>

<h1>Update Sectionstbl <?php echo $model->section_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>