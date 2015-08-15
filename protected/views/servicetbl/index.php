<?php
/* @var $this ServicetblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Servicetbls',
);

$this->menu=array(
	array('label'=>'Create Servicetbl', 'url'=>array('create')),
	array('label'=>'Manage Servicetbl', 'url'=>array('admin')),
);
?>

<h1>Servicetbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
