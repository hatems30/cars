<?php
/* @var $this FactorstblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Factorstbls',
);

$this->menu=array(
	array('label'=>'Create Factorstbl', 'url'=>array('create')),
	array('label'=>'Manage Factorstbl', 'url'=>array('admin')),
);
?>

<h1>Factorstbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
