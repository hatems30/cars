<?php
/* @var $this VisitstblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Visitstbls',
);

$this->menu=array(
	array('label'=>'Create Visitstbl', 'url'=>array('create')),
	array('label'=>'Manage Visitstbl', 'url'=>array('admin')),
);
?>

<h1>Visitstbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
