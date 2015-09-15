<?php
/* @var $this StudController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Studs',
);

$this->menu=array(
	array('label'=>'Create Stud', 'url'=>array('create')),
	array('label'=>'Manage Stud', 'url'=>array('admin')),
);
?>

<h1>Studs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
