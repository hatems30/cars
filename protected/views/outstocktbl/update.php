<?php
/* @var $this OutstocktblController */
/* @var $model Outstocktbl */

$this->breadcrumbs=array(
	'Outstocktbls'=>array('index'),
	$model->car_id=>array('view','id'=>$model->car_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Outstocktbl', 'url'=>array('index')),
	array('label'=>'Create Outstocktbl', 'url'=>array('create')),
	array('label'=>'View Outstocktbl', 'url'=>array('view', 'id'=>$model->car_id)),
	array('label'=>'Manage Outstocktbl', 'url'=>array('admin')),
);
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>