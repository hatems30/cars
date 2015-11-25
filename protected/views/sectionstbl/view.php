<?php
/* @var $this SectionstblController */
/* @var $model Sectionstbl */

$this->breadcrumbs=array(
	'Sectionstbls'=>array('index'),
	$model->section_id,
);

$this->menu=array(
	array('label'=>'List Sectionstbl', 'url'=>array('index')),
	array('label'=>'Create Sectionstbl', 'url'=>array('create')),
	array('label'=>'Update Sectionstbl', 'url'=>array('update', 'id'=>$model->section_id)),
	array('label'=>'Delete Sectionstbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->section_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sectionstbl', 'url'=>array('admin')),
);
?>

<h1>View Sectionstbl #<?php echo $model->section_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'section_id',
		'section_name',
	),
)); ?>
