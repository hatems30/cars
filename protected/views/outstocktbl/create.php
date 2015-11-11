<?php
/* @var $this OutstocktblController */
/* @var $model Outstocktbl */

$this->breadcrumbs=array(
	'Outstocktbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Outstocktbl', 'url'=>array('index')),
	array('label'=>'Manage Outstocktbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>