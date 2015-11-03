<?php
/* @var $this HowtblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Howtbls',
);

$this->menu=array(
	array('label'=>'Create Howtbl', 'url'=>array('create')),
	array('label'=>'Manage Howtbl', 'url'=>array('admin')),
);
?>

<h1>Howtbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
