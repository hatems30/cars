<?php
/* @var $this InscompsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inscomps',
);

$this->menu=array(
	array('label'=>'Create Inscomps', 'url'=>array('create')),
	array('label'=>'Manage Inscomps', 'url'=>array('admin')),
);
?>

<h1>Inscomps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
