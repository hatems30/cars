<?php
/* @var $this InscompsController */
/* @var $model Inscomps */

$this->breadcrumbs=array(
	'Inscomps'=>array('index'),
	$model->insurance_comp_id=>array('view','id'=>$model->insurance_comp_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Inscomps', 'url'=>array('index')),
	array('label'=>'Create Inscomps', 'url'=>array('create')),
	array('label'=>'View Inscomps', 'url'=>array('view', 'id'=>$model->insurance_comp_id)),
	array('label'=>'Manage Inscomps', 'url'=>array('admin')),
);
?>

<h1>Update Inscomps <?php echo $model->insurance_comp_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>