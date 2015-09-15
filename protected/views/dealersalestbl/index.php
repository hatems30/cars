<?php
/* @var $this DealersalestblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dealersalestbls',
);

$this->menu=array(
	array('label'=>'Create Dealersalestbl', 'url'=>array('create')),
	array('label'=>'Manage Dealersalestbl', 'url'=>array('admin')),
);
?>

<h1>Dealersalestbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
