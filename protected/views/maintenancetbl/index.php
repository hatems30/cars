<?php
/* @var $this MaintenancetblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Maintenancetbls',
);

$this->menu=array(
	array('label'=>'Create Maintenancetbl', 'url'=>array('create')),
	array('label'=>'Manage Maintenancetbl', 'url'=>array('admin')),
);
?>

<h1>Maintenancetbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
