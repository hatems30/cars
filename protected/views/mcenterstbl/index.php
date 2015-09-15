<?php
/* @var $this McenterstblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mcenterstbls',
);

$this->menu=array(
	array('label'=>'Create Mcenterstbl', 'url'=>array('create')),
	array('label'=>'Manage Mcenterstbl', 'url'=>array('admin')),
);
?>

<h1>Mcenterstbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
