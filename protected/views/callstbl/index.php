<?php
/* @var $this CallstblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Callstbls',
);

$this->menu=array(
	array('label'=>'Create Callstbl', 'url'=>array('create')),
	array('label'=>'Manage Callstbl', 'url'=>array('admin')),
);
?>

<h1>Callstbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
