<?php
/* @var $this TraffictblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array('Traffictbls',);

$this->menu=array(
	array('label'=>'Create Traffictbl', 'url'=>array('create')),
	array('label'=>'Manage Traffictbl', 'url'=>array('admin')),
);
?>

<h1>Traffictbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
