<?php
/* @var $this CarpricetblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Carpricetbls',
);

$this->menu=array(
	array('label'=>'Create Carpricetbl', 'url'=>array('create')),
	array('label'=>'Manage Carpricetbl', 'url'=>array('admin')),
);
?>

<h1>Carpricetbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
