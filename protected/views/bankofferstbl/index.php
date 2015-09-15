<?php
/* @var $this BankofferstblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bankofferstbls',
);

$this->menu=array(
	array('label'=>'Create Bankofferstbl', 'url'=>array('create')),
	array('label'=>'Manage Bankofferstbl', 'url'=>array('admin')),
);
?>

<h1>Bankofferstbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
