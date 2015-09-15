<?php
/* @var $this InnersaletblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Innersaletbls',
);

$this->menu=array(
	array('label'=>'Create Innersaletbl', 'url'=>array('create')),
	array('label'=>'Manage Innersaletbl', 'url'=>array('admin')),
);
?>

<h1>Innersaletbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
