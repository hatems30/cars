<?php
/* @var $this DealerstblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dealerstbls',
);

$this->menu=array(
	array('label'=>'Create Dealerstbl', 'url'=>array('create')),
	array('label'=>'Manage Dealerstbl', 'url'=>array('admin')),
);
?>

<h1>Dealerstbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
