<?php
/* @var $this CarcodeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Carcodes',
);

$this->menu=array(
	array('label'=>'Create Carcode', 'url'=>array('create')),
	array('label'=>'Manage Carcode', 'url'=>array('admin')),
);
?>

<h1>Carcodes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
