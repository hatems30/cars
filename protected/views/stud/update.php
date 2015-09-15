<?php
/* @var $this StudController */
/* @var $model Stud */

$this->breadcrumbs=array(
	'Studs'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Stud', 'url'=>array('index')),
	array('label'=>'Create Stud', 'url'=>array('create')),
	array('label'=>'View Stud', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Stud', 'url'=>array('admin')),
);
?>

<h1>Update Stud <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>