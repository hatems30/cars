<?php
/* @var $this HoldtblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Holdtbls',
);

$this->menu=array(
	array('label'=>'Create Holdtbl', 'url'=>array('create')),
	array('label'=>'Manage Holdtbl', 'url'=>array('admin')),
);
?>

<h1>Holdtbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
