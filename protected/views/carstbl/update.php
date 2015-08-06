<?php
/* @var $this CarstblController */
/* @var $model Carstbl */

$this->breadcrumbs=array(
	'Carstbls'=>array('index'),
	$model->car_id=>array('view','id'=>$model->car_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Carstbl', 'url'=>array('index')),
	array('label'=>'Create Carstbl', 'url'=>array('create')),
	array('label'=>'View Carstbl', 'url'=>array('view', 'id'=>$model->car_id)),
	array('label'=>'Manage Carstbl', 'url'=>array('admin')),
);
?>

<h1>Update Carstbl <?php echo $model->car_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>