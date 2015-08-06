<?php
/* @var $this CarstblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Carstbls',
);

$this->menu=array(
	array('label'=>'Create Carstbl', 'url'=>array('create')),
	array('label'=>'Manage Carstbl', 'url'=>array('admin')),
);
?>

<h1>Carstbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
