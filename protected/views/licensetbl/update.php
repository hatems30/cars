<?php
/* @var $this LicensetblController */
/* @var $model Licensetbl */

$this->breadcrumbs=array(
	'Licensetbls'=>array('index'),
	$model->License_id=>array('view','id'=>$model->License_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Licensetbl', 'url'=>array('index')),
	array('label'=>'Create Licensetbl', 'url'=>array('create')),
	array('label'=>'View Licensetbl', 'url'=>array('view', 'id'=>$model->License_id)),
	array('label'=>'Manage Licensetbl', 'url'=>array('admin')),
);
?>

<h1>Update Licensetbl <?php echo $model->License_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>