<?php
/* @var $this StoresController */
/* @var $model Stores */

$this->breadcrumbs=array(
	'Stores'=>array('index'),
	$model->store_id=>array('view','id'=>$model->store_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Stores', 'url'=>array('index')),
	array('label'=>'Create Stores', 'url'=>array('create')),
	array('label'=>'View Stores', 'url'=>array('view', 'id'=>$model->store_id)),
	array('label'=>'Manage Stores', 'url'=>array('admin')),
);
?>

<h1>Update Stores <?php echo $model->store_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>